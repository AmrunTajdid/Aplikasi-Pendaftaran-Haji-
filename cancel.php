<?php
include '../../koneksi.php';
$id_pendaftaran = $_GET['id_pendaftaran'];
mysqli_query($conn, "DELETE FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'");
mysqli_query($conn, "DELETE FROM tb_pembayaran WHERE id_pendaftaran='$id_pendaftaran'");
mysqli_query($conn, "DELETE FROM tb_keberangkatan WHERE id_pendaftaran='$id_pendaftaran'");

header("location:verifikasiCancel.php");
