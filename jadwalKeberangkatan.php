<?php
include '../../koneksi.php';

$keberangkatan = $_POST['keberangkatan'];
$tanggalBerangkat = $_POST['tanggalBerangkat'];
$titikKumpul = $_POST['titikKumpul'];
$tanggalPulang = $_POST['tanggalPulang'];

$date = date('dmy');
$time = date('His');
$id_kloter = $date . "-" . $time . "KTL";




$insertKeberangkatan = mysqli_query($conn, "INSERT INTO tb_kloter  VALUES ('$id_kloter','$keberangkatan','$tanggalBerangkat','$titikKumpul','$tanggalPulang')");
header("location:../index.php");
