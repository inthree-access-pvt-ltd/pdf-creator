<?php
require_once __DIR__ . '/vendor/autoload.php';

$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML('<h1>Hello world!</h1><h2>PDF Created Successfully</h2><h4>Deva Added</h4><h5>perumal updated</h5>');
$mpdf->Output();
?>