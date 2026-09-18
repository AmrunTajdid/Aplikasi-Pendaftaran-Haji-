<?php
include '../../koneksi.php';

$id_pendaftaran = $_POST['id_pendaftaran'];
$query = mysqli_query($conn, "UPDATE tb_pembayaran SET verifikasi_pembayaran='yes' WHERE id_pendaftaran='$id_pendaftaran'");
header("location:../index.php");
