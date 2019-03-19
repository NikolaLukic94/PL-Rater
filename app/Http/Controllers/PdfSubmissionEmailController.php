<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PdfSubmissionEmailController extends Controller
{
    public function __invoke(Request $request) {

        $dompdf = new Dompdf();
        $dompdf->loadHtml('/subs/index');
        $dompdf->stream();

    }

}
