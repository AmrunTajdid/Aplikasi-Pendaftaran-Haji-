<?php
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$login = mysqli_query($conn, "SELECT * FROM tb_user WHERE username='$username' AND password='$password'");
$data_user = mysqli_fetch_array($login);
$id_user = $data_user['id_user'];
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['id_user'] = $id_user;
    $_SESSION['status'] = "login";
    header("location:After Login/index.php");
} else {
    header("location:index.php");
}
