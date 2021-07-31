<?php


namespace App\Classes;
use PDF;
use Spatie\Browsershot\Browsershot;


class PrintPDF
{
    public function print($data)
    {
        Browsershot::url('http://clearme.test/student/preview-pdf')->authenticate('student@clearme.test', 'password')->windowSize(1920, 1080)->save('spatie.png');
    }
}
