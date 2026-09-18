<?php
include '../../koneksi.php';


$id_user = $_POST['id_user'];
$id_pendaftaran = $_POST['id_pendaftaran'];

$nama_file = $_FILES['buktiPembayaran']['name'];
$ukuran_file = $_FILES['buktiPembayaran']['size'];
$tipe_file = $_FILES['buktiPembayaran']['type'];
$tmp_file = $_FILES['buktiPembayaran']['tmp_name'];
$path = "Assets/Images bukti pembayaran/" . $nama_file;
move_uploaded_file($tmp_file, $path);

mysqli_query($conn, "UPDATE tb_pembayaran SET bukti_pembayaran='$nama_file' WHERE id_pendaftaran='$id_pendaftaran'");
$id_user = $_POST['id_user'];
$id_pendaftaran = $_POST['id_pendaftaran'];
session_start();
$_SESSION['id_user'] = $id_user;
$_SESSION['id_pendaftaran'] = $id_pendaftaran;
$_SESSION['status'] = "login";
header("location:afterPembayaran.php");
