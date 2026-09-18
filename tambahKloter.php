<?php
include '../../koneksi.php';


$id_kloter = $_POST['id_kloter'];
$id_pendaftaran = $_POST['id_pendaftaran'];


mysqli_query($conn, "UPDATE tb_keberangkatan SET id_kloter='$id_kloter' WHERE id_pendaftaran='$id_pendaftaran'");

header("location:detailPendaftaran.php?id_pendaftaran=" . $id_pendaftaran);
