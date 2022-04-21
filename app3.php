<?php
require_once __DIR__ . '/vendor/autoload.php';
include('print.php'); //Include (and compiles) the given file

use mikehaertl\wkhtmlto\Pdf;

// You can pass a filename, a HTML string, an URL or an options array to the constructor
// $pdf = new Pdf('/print.html');
$pdf = new Pdf;
// $html = file_get_contents("print.php");
// exec('./print.php > file.html');

$htmlContent = ob_get_clean(); //Get the buffer and erase it
$pdf->addPage($htmlContent);
// $pdf->addPage('<html>....</html>');
// $pdf->addPage('http://www.example.com');

// On some systems you may have to set the path to the wkhtmltopdf executable
// $pdf->binary = 'C:\...';


if (!$pdf->saveAs('page.pdf')) {
    $error = $pdf->getError();
    // ... handle error here
}