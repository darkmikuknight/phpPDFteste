<?php
//https://computingforgeeks.com/install-wkhtmltopdf-on-ubuntu-debian-linux/
require __DIR__ . '/vendor/autoload.php';
include('print.php'); //Include (and compiles) the given file

use Knp\Snappy\Pdf;

// $snappy = new Pdf('/usr/local/bin/wkhtmltopdf --load-error-handling ignore');

// or you can do it in two steps
// $snappy = new Pdf();
// $snappy->setBinary('/usr/local/bin/wkhtmltopdf --load-error-handling ignore');


$snappy = new Pdf('/usr/local/bin/wkhtmltopdf --enable-local-file-access');
// header('Content-Type: application/pdf');
// exec('./print.php > file.html');
$htmlContent = ob_get_clean(); //Get the buffer and erase it
// $output = file_get_contents('file.html');
echo $snappy->getOutput($htmlContent);

// $snappy = new Pdf('/usr/local/bin/wkhtmltopdf');
// header('Content-Type: application/pdf');
// header('Content-Disposition: attachment; filename="file.pdf"');
// echo $snappy->getOutput('http://www.github.com');