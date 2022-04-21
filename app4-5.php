<?php
require_once __DIR__ . '/vendor/autoload.php';

// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
ob_start();
$dompdf = new Dompdf();
$dompdf->loadHtml('hello world');

// (Optional) Setup the paper size and orientation
// $dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();
header('Content-Type: application/pdf');

// Output the generated PDF to Browser
$dompdf->stream("test.pdf", array("Attachment" => false));   