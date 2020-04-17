<?php 
require 'vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$dompdf->load_html('Menggunakan Library Dompdf untuk Membuat Report PDF dengan DOMPDF');

$dompdf->setPaper('A4','landscape');

$dompdf->render();

$dompdf->stream('hasil_report.pdf');
?>