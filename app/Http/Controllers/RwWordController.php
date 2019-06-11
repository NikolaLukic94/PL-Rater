<?php

namespace App\Http\Controllers;

use App\File;
use App\Rater;
use App\Premium;

class RwWordController extends Controller
{
    public function __invoke($file_id, $rater_id)
    {
        $file = File::where('id', $file_id)->get();
        $rater = Rater::findOrFail($rater_id);
        $premium = Premium::where('file_id', $file_id)->get();
        $total_premium = $premium[0]->grand_premium + $premium[0]->surplus_lines_tax_fee + $premium[0]->empa;

        $phpWord = new \PhpOffice\PhpWord\PhpWord();

        $section = $phpWord->addSection();

        $section->addText(
            'Named Insured: '
                .$file[0]->named_insured,
                 ['name' => 'Tahoma', 'size' => 15]
        );

        $section->addText(
            'Coverage A '
                .$file[0]->cov_a
        );

        $section->addText(
            'Other Structures Limit '
                .$file[0]->other_structures
        );

        $section->addText(
            'Loss of use '
                .$file[0]->loss_of_use
        );

        $section->addText(
            'Med Pay '
                .$file[0]->med_pay
        );

        $section->addText(
            'AOP deductible '
                .$file[0]->aop_ded
        );

        $section->addText(
            'Construction type '
                .$file[0]->construction_type
        );

        $section->addText(
            'Protection class '
                .$file[0]->protection_class
        );

        $section->addText(
            'Premium: ',
            ['name' => 'Tahoma', 'size' => 12]
        );

        $section->addText(
            'Grand premium '
                .$premium[0]->grand_premium
        );
        $section->addText(
            'SL Tax '
                .$premium[0]->surplus_lines_tax_fee
        );
        $section->addText(
            'Empa '
                .$premium[0]->empa
        );
        $section->addText(
            'Total Premium: '
                .$total_premium
        );
        // Saving the document as OOXML file...
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save(storage_path('Rw.docx'));

        return response()->download(storage_path('rw.docx'));
    }
}
