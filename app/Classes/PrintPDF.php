<?php


namespace App\Classes;
use PDF;


class PrintPDF
{
    public function print($data)
    {
        view()->share('data', $data);
        $pdf = PDF::loadView('prints.clearance-report', $data);

        return $pdf->download('clearance-report.pdf');
    }
}
