<?php 
require_once __DIR__ . '/vendor/autoload.php';
include('print.php'); //Include (and compiles) the given file

$mpdf = new \Mpdf\Mpdf();
// $output = file_get_contents('print.php');
// exec('print.php');

// $stylesheet = file_get_contents('style.css');
$htmlContent = ob_get_clean(); //Get the buffer and erase it

// $mpdf->WriteHTML($stylesheet,\Mpdf\HTMLParserMode::HEADER_CSS);
// $mpdf->WriteHTML($htmlContent,\Mpdf\HTMLParserMode::);

// $mpdf->SetProtection(array(), 'pass', 'pass1');
$mpdf-> WriteHTML($htmlContent);
$mpdf->Output('teste.pdf', \Mpdf\Output\Destination::INLINE);