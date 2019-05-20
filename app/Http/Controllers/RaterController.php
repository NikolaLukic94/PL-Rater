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
    public  function createNewWithCalculatedCoeficients($id, $request) {

            $file = null;
            $rate = null;

            $file = File::findOrFail($id);
            $rate = Rate::where('lob', $file->lob)->first();
            // getting coeficients that will be used for rating; lob of rates will always match the lob of file
            $cov_a  = null;
            $other_structures = null;
            $loss_of_use = null;
            $med_pay_rate = null;
            $aop_ded_rate = null;
            $construction_type_rate = null;
            $protection_class_rate = '1';
            $new_purchase_rate = null;
            $email_address = null;
            $prior_carrier_rate = null;
            $prior_carrier_name_rate = null;
            $zero_two_losses_rate = null;
            $more_than_two_losses = null;
            $inspection_fee = null;
            $brokerage_fee = null;
            $agency_fee = null;
            $file_id = $file->id;

            if($file->med_pay == '1000') {
                     $med_pay_rate = $rate->med_pay_1k;
            }  elseif  ($file->med_pay == '2500' ) { 
                    $med_pay_rate = $rate->med_pay_2_5k; 
            }   elseif ($file->med_pay == '5000') {
                    $med_pay_rate = $rate->med_pay_5k; }

            if($file->aop_ded == '1') { 
                    $aop_ded_rate = $rate->aop_ded_1; }    
                elseif  ($file->aop_ded == '2') { 
                     $aop_ded_rate = $rate->aop_ded_2; }
                elseif  ($file->aop_ded == '3') { 
                     $aop_ded_rate = $rate->aop_ded_3; }
                elseif  ($file->aop_ded == '4') { 
                     $aop_ded_rate = $rate->aop_ded_4; }
                elseif  ($file->aop_ded == '5') { 
                     $aop_ded_rate = $rate->aop_ded_5; }

            if($file->construction_type == 'frame') { 
                $construction_type_rate == $rate->frame; 
            }    
                elseif  ($file->construction_type == 'jm') { 
                    $construction_type_rate = $rate->jm; 
            }
                elseif  ($file->construction_type == 'bv') { 
                    $construction_type_rate = $rate->bv; 
            }
                elseif  ($file->construction_type == 'masonry') { 
                    $construction_type_rate = $rate->masonry; 
            }

            if($file->protection_class == '1') { 
                $protection_class_rate == $rate->protection_class_1; }    
                elseif  ($file->protection_class == '2') { 
                    $protection_class_rate = $rate->protection_class_2; }
                elseif  ($file->protection_class == '3') { 
                    $protection_class_rate = $rate->protection_class_3; }
                elseif  ($file->protection_class == '4') { 
                    $protection_class_rate = $rate->protection_class_4; }
                elseif  ($file->protection_class == '5') { 
                    $protection_class_rate = $rate->protection_class_5; }

            if($file->new_purchase == '1') { 
                $new_purchase_rate == $rate->new_purchase; }                     

            if($file->prior_carrier == '1') { 
                $prior_carrier_rate == $rate->prior_carrier; }

            if($file->prior_carrier_name == '1') { 
                $prior_carrier_name_rate == $rate->prior_carrier_name; }

            if($file->zero_two_losses == '1') { 
                $zero_two_losses_rate == $rate->zero_two_losses; }

            if($file->zero_two_losses == '1') { 
                $zero_two_losses_rate == $rate->more_than_two_losses; }

            if(isset($request->inspection_fee)) {
                $inspection_fee = $request->inspection_fee;
            } else {
                $inspection_fee = '0';
            }

            if(isset($request->brokerage_fee)) {
                $brokerage_fee = $request->brokerage_fee;
            } else {
                $brokerage_fee = '0';
            }       

            if(isset($request->agency_fee)) {
                $agency_fee = $request->agency_fee;
            } else {
                $agency_fee = '0';
            }                

            $rater = new Rater;

                $rater->lob = $file->lob;
                $rater->file_id = $file_id;
                $rater->cov_a = $rate->cov_a;
                $rater->other_structures = $rate->other_structures;
                $rater->loss_of_use = $rate->loss_of_use;
                $rater->med_pay = $med_pay_rate;
                $rater->aop_ded = $aop_ded_rate;
                $rater->construction_type = '1';
                $rater->new_purchase = '1';
                $rater->prior_carrier = $prior_carrier_rate;
                $rater->prior_carrier_name = $prior_carrier_name_rate;
                $rater->zero_two_losses = $zero_two_losses_rate;
                $rater->more_than_two_losses = $more_than_two_losses; 
                $rater->protection_class = $protection_class_rate;
        /*    $rater->inspection_fee = $inspection_fee;
                $rater->brokerage_fee = $brokerage_fee;
                $rater->agency_fee = $agency_fee;
        */
            $rater->save();

            return $rater;
    }

	/* CHECK FOR ACCUARACY OF INFO AND IF NEEDED AMEND LIMITS/COVERAGES */
    public function index($id) {

    	return view('/rater/prepare',[
    		'file' => File::findOrFail($id),
            'lob' => $this->lob
    	]);
    }
    /* ENTER RW COEFICIENTS IN DB */
    /* SHOW LIMITS AND COEFICIENTS THAT WILL BE APPLIED WITH LIMITS GIVEN */
    public function create($id, Request $request) {

        // file we are currently rating
        $file = File::findOrFail($id);
        // finding rates that should be applied, since different rates will apply to different lob
        $rate = Rate::where('lob', $file->lob)->first();

        if ($rate == null) {
            return view('/rater/rates_not_found'); 
        } 
            else 
        {
            $rater = $this->createNewWithCalculatedCoeficients($id, $request);

            return view('/rater/rw_preview',[
                'file' => $file,
                'rater' => $rater
            ]);
        }
    }

    public function getFilesCovLimits($id) {

        $cov_limits = null;

        $file = File::findOrFail($id); 

        $this->$cov_limits = $file->cov_a + $file->other_structures + $file->loss_of_use;

        return $cov_limits;
    }

    public function getFilesCovLimitsRate($id) {

        $cov_limits_rate = null;

        $file = File::find($id); 
        $rater = Rater::where('lob', $file->lob)->first();

        $this->$cov_limits_rate = ($rater->cov_a + $rater->other_structures + $rater->loss_of_use) / 3;

        return $cov_limits_rate;
    }

    public function getOtherRater($id) {

        $other_rater = null;

        $file = File::findOrFail($id);

        $rater = Rater::where('lob', $file->lob)->first();

        $this->$other_rater = ($rater->aop_ded + 
                                $rater->protection_class +
                                $rater->new_purchase +
                                $rater->prior_carrier +
                                $rater->prior_carrier_name) / 5;
        return $other_rater;

    }
    /* CREATE/STORE RATING WORKESHEET */
    public function store($file_id, $rater_id) {

        $file = File::findOrFail($file_id); 

        $cov_limits = $this->getFilesCovLimits($file_id);
        $cov_limits_rate = $this->getFilesCovLimitsRate($file_id);
        $other_rater = $this->getOtherRater($file_id);

        $calc = ($cov_limits/$cov_limits_rate)*$other_rater;

        $surplus_lines_tax_fee = $calc * 0.04;
        $empa = $calc * 0.02;

        $premium = Premium::create([
            'grand_premium' => $calc,
            'surplus_lines_tax_fee' => $surplus_lines_tax_fee,
            'file_id' => $file->id,
            'empa' => $empa
         ]);

        $file->status = 'rated';

    	return redirect('/rating-worksheet/store/'. $file->id . '/' . $rater->id);
    }

}
