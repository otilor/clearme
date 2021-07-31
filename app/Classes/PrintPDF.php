<?php


namespace App\Classes;
use Barryvdh\DomPDF\PDF;


class PrintPDF
{
    public static function using($data)
    {
        return self::print($data);
    }

    public static function print($data)
    {
        view()->share('data', $data);
        $pdf = (new PDF)->loadView('pdf_view', $data);

        return $pdf->download('clearance_certificate.pdf');
    }

}
