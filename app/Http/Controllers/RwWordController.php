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
use App\LogActivity;

class RwWordController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($file_id, $rater_id) {

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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
