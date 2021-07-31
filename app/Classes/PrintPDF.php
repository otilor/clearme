<?php


namespace App\Classes;
use Barryvdh\DomPDF\PDF;


class PrintPDF
{
    public function print($data)
    {
        view()->share('data', $data);
        $pdf = PDF::loadView('prints.clearance-report', $data);

        return $pdf->download('clearance_certificate.pdf');
    }
}
