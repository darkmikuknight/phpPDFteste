<?php 

// ob_end_flush();

require_once __DIR__ . '/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$options = new Options();
$options->set('chroot', __DIR__);
$options->set('isRemoteEnabled', true);
$options->setIsHtml5ParserEnabled(true);
$dompdf = new Dompdf($options);

ob_start();
include('print.php'); 

$htmlContent = ob_get_clean();
// $htmlContent = file_get_contents("print.php"); 
// echo $htmlContent;
$dompdf->loadHtml($htmlContent);
// echo $htmlContent;
// exit;
ob_end_clean();


// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4');

// Render the HTML as PDF

$dompdf->render();
header('Content-Type: application/pdf');


// $dompdf->output();
// Output the generated PDF to Browser
$dompdf->stream('teste.pdf', array("Attachment" => false));
// exit;