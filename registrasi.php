<?php
include '../../koneksi.php';

$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$insert = mysqli_query($conn, "INSERT INTO tb_user VALUES ('','$username','$email','$password')");
header("location:../index.php");

// if ($cek > 0) {
//     $_SESSION['status'] = "Berhasil Mendaftar, Silahkan Login!";
//     header("location:../index.php");
// } else {
//     $_SESSION['status'] = "Gagal Mendaftar, Silahkan Registrasi ulang!";
//     header("location:index.html");
// }
