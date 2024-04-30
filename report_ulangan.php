<?php
include "conn.php";
session_start();
// memanggil library FPDF
require('C:\xampp\htdocs\min8ngawi\fpdf181/fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('P','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);

$id_siswa=$_SESSION['id_siswa'];
$siswa=mysql_fetch_array(mysql_query("select nama, nisn from siswa where id_siswa='$id_siswa'"));
    
$nama=$siswa['nama'];
$nisn=$siswa['nisn'];

// mencetak string 
$pdf->Cell(190,7,'MADRASAH IBTIDAIYAH NEGERI 8 NGAWI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'NILAI ULANGAN SISWA',0,1,'C');

$pdf->Cell(20,10,'Nama: ');
$pdf->Cell(20,10,$siswa['nama']);
$pdf->Cell(40,10,' ');
$pdf->Cell(20,10,'NISN: ');
$pdf->Cell(20,10,$siswa['nisn']);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,6,'Id Ulangan',1,0);
$pdf->Cell(85,6,'Nama Pelajaran',1,0);
$pdf->Cell(27,6,'Tahun Ajaran',1,0);
$pdf->Cell(25,6,'nilai',1,1);

$pdf->SetFont('Arial','',10);

$view=mysql_query("select * from ulangan, mata_pelajaran, kelas where id_siswa='$id_siswa' and ulangan.kd_mapel=mata_pelajaran.kd_mapel and ulangan.id_kelas=kelas.id_kelas");
while ($row = mysql_fetch_array($view)){
    $pdf->Cell(20,6,$row['id_ulangan'],1,0);
    $pdf->Cell(85,6,$row['nama_pelajaran'],1,0);
    $pdf->Cell(27,6,$row['id_th_ajaran'],1,0);
    $pdf->Cell(25,6,$row['nilai'],1,1); 
}

$pdf->Output();
?>