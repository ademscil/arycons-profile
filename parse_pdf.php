<?php
require 'vendor/autoload.php';
$parser = new \Smalot\PdfParser\Parser();
$pdf = $parser->parseFile('COMPANY PROFILE ARYCONS.pdf');
echo $pdf->getText();
