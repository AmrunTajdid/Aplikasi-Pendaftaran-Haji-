<?php
include '../../koneksi.php';
$id_kloter = $_GET['id_kloter'];
mysqli_query($conn, "DELETE FROM tb_kloter WHERE id_kloter='$id_kloter'");

header("location:../index.php");
