<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;
use App\Rate;
use App\Rater;
use App\Premium;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

/* USED FOR GENERATING RATING WORKSHEETS AND CALCULATING PREMIUM */

class RaterController extends Controller
{
	/* CHECK FOR ACCUARACY OF INFO AND IF NEEDED AMEND LIMITS/COVERAGES */
    public function prepareRw($id) {

        $file = File::findOrFail($id); 

    	return view('/rater/prepare',[
    		'file' => $file,
            'lob' => $lob
    	]);
    }
        /* ENTER RW COEFICIENTS IN DB */
        /* SHOW LIMITS AND COEFICIENTS THAT WILL BE APPLIED WITH LIMITS GIVEN */
    public function getRateCoeficientsAndPreview($id) {

        // file we are currently rating
        $file = DB::table('files')->where('id',$id)->get(); //File::findOrFail($id); 

        // finding rates that should be applied, since different rates will apply to different lob
        $rate = DB::table('rates')->where('lob', $file[0]->lob)->get();

        // getting coeficients that will be used for rating
        $lob = null;
        $cov_a  = null;
        $other_structures = null;
        $loss_of_use = null;
        $med_pay_rate = null;
        $aop_ded_rate = null;
        $construction_type_rate = null;
        $protection_class = null;
        $new_purchase_rate = null;
        $email_address = null;
        $prior_carrier_rate = null;
        $prior_carrier_name_rate = null;
        //   $zero_two_losses_rate = null;
        $file_id = $file[0]->id;

                if($file[0]->med_pay == '1000') {
                         $med_pay_rate = $rate[0]->med_pay_1k;
                }  elseif  ($file[0]->med_pay == '2500' ) { 
                        $med_pay_rate = $rate[0]->med_pay_2_5k; 
                }   elseif ($file[0]->med_pay == '5000') {
                        $med_pay_rate = $rate[0]->med_pay_5k; }

                if($file[0]->aop_ded == '1') { 
                        $aop_ded_rate = $rate[0]->aop_ded_1; }    
                    elseif  ($file[0]->aop_ded == '2') { 
                         $aop_ded_rate = $rate[0]->aop_ded_2; }
                    elseif  ($file[0]->aop_ded == '3') { 
                         $aop_ded_rate = $rate[0]->aop_ded_3; }
                    elseif  ($file[0]->aop_ded == '4') { 
                         $aop_ded_rate = $rate[0]->aop_ded_4; }
                    elseif  ($file[0]->aop_ded == '5') { 
                         $aop_ded_rate = $rate[0]->aop_ded_5; }

                if($file[0]->construction_type == 'frame') { 
                    $construction_type_rate == $rate[0]->frame; }    
                    elseif  ($file[0]->construction_type == 'jm') { 
                        $construction_type_rate = $rate[0]->jm; }
                    elseif  ($file[0]->construction_type == 'bv') { 
                        $construction_type_rate = $rate[0]->bv; }
                    elseif  ($file[0]->construction_type == 'masonry') { 
                        $construction_type_rate = $rate[0]->masonry; }

                if($file[0]->protection_class == '1') { 
                    $protection_class_rate == $rate[0]->protection_class_1; }    
                    elseif  ($file[0]->protection_class == '2') { 
                        $protection_class_rate = $rate[0]->protection_class_2; }
                    elseif  ($file[0]->protection_class == '3') { 
                        $protection_class_rate = $rate[0]->protection_class_3; }
                    elseif  ($file[0]->protection_class == '4') { 
                        $protection_class_rate = $rate[0]->protection_class_4; }
                    elseif  ($file[0]->protection_class == '5') { 
                        $protection_class_rate = $rate[0]->protection_class_5; }

                if($file[0]->new_purchase == '1') { 
                    $new_purchase_rate == $rate[0]->new_purchase; }                     

                if($file[0]->prior_carrier == '1') { 
                    $prior_carrier_rate == $rate[0]->prior_carrier; }

                if($file[0]->prior_carrier_name == '1') { 
                    $prior_carrier_name_rate == $rate[0]->prior_carrier_name; }

         //       if($file[0]->zero_two_losses == '1') { 
         //           $zero_two_losses_rate == $rate[0]->zero_two_losses; }

         //       if($file[0]->more_than_two_losses == '1') { 
         //           $more_than_two_losses_rate == $rate[0]->more_than_two_losses; }

        $rater = Rater::create([           
                'file_id' => $file_id,
                'general_rate' => $rate[0]->general_rate,
                'cov_a' => $rate[0]->cov_a,
                'other_structures' => $rate[0]->other_structures,
                'loss_of_use' => $rate[0]->loss_of_use,
                'med_pay' => $med_pay_rate,
                'aop_ded' => $aop_ded_rate,
                'construction_type' => $construction_type_rate,
                'new_purchase' => '1',
                'prior_carrier' => $prior_carrier_rate,
                'prior_carrier_name' => $prior_carrier_name_rate,
          /*   'zero_two_losses' => $zero_two_losses,
                'more_than_two_losses' => $more_than_two_losses, */
                'protection_class' => $protection_class_rate,
          /*    'inspection_fee' => $request->inspection_fee,
                'brokerage_fee' => $request->brokerage_fee,
                'agency_fee' => $request->agency_fee, */

                      ]);                      

        return view('/rater/rw_preview',[
            'file' => $file,
            'rater' => $rater
        ]);
    }

    /* CREATE RATING WORKESHEET, SAVE IT TO PDF, SEND PDF TO AGENT AND ATTACH IN FILE/ATTACHMENTS  */
    public function generateRw($file_id, $rater_id) {

        $file = DB::table('files')->where('id',$file_id)->get();
        $rater = Rater::findOrFail($rater_id); 

        $cov_limits = $file[0]->cov_a + $file[0]->other_structures + $file[0]->loss_of_use;
        $cov_limits_rate = ($rater->cov_a + $rater->other_structures + $rater->loss_of_use) / 3;

        $other_rater = ($rater->aop_ded + 
                        $rater->protection_class +
                        $rater->new_purchase +
                        $rater->prior_carrier +
                        $rater->prior_carrier_name) / 5;

        $calc = ($cov_limits/$cov_limits_rate)*$other_rater;

        $tax = $calc * 0.04;
        $empa = $calc * 0.02;

        $premium = Premium::create([
            'grand_premium' => $calc,
            'surplus_lines_tax_fee' => $tax,
            'file_id' => $file[0]->id,
            'empa' => $empa
         ]);

        $file->status = 'rated';

    	return view('/rater/rw',[
            'file' => $file,
            'rater' => $rater,
            'premium' => $premium
        ]);
    }

    public function rwToWord($file_id, $rater_id) {

        $file = DB::table('files')->where('id',$file_id)->get();
        $rater = Rater::findOrFail($rater_id); 
        $premium = DB::table('premiums')->where('file_id', $file_id)->get();
        $total_premium = $premium[0]->grand_premium + $premium[0]->surplus_lines_tax_fee + $premium[0]->empa;

        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $section->addText(
            'Named Insured: '
                . $file[0]->named_insured  ,
                 array('name' => 'Tahoma', 'size' => 15)
        );

        $section->addText(
            'Coverage A '
                . $file[0]->cov_a  
        );

        $section->addText(
            'Other Structures Limit '
                . $file[0]->other_structures
        );

        $section->addText(
            'Loss of use '
                . $file[0]->loss_of_use   
        );

        $section->addText(
            'Med Pay '
                . $file[0]->med_pay    
        );

        $section->addText(
            'AOP deductible '
                . $file[0]->aop_ded    
        );        

        $section->addText(
            'Construction type '
                . $file[0]->construction_type     
        );   

        $section->addText(
            'Protection class '
                . $file[0]->protection_class     
        );   

        $section->addText(
            'Premium: ',
            array('name' => 'Tahoma', 'size' => 12)
        );
        
        $section->addText(
            'Grand premium '
                . $premium[0]->grand_premium     
        ); 
        $section->addText(
            'SL Tax '
                . $premium[0]->surplus_lines_tax_fee     
        );  
        $section->addText(
            'Empa '
                . $premium[0]->empa     
        );         
        $section->addText(
            'Total Premium: '
                . $total_premium    
        ); 
        // Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save(storage_path('Rw.docx'));

        return response()->download(storage_path('rw.docx'));

    }

}
