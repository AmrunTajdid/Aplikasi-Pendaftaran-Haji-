<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username='$username' AND password='$password'");

$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:index.php");
} else {
    header("location:landingPage.php");
}
