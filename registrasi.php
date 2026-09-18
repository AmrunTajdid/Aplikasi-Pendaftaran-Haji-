<?php
include '../../koneksi.php';

$id_user = $_POST['id_user'];
$pendaftaran = $_POST['pendaftaran'];
$nama_lengkap = $_POST['nama_lengkap'];
$nama_ayah = $_POST['nama_ayah'];
$nama_ibu = $_POST['nama_ibu'];
$tempat_lahir = $_POST['tempat_lahir'];
$tanggal_lahir = $_POST['tanggal_lahir'];
$umur = $_POST['umur'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$pendidikan_terakhir = $_POST['pendidikan_terakhir'];
$pekerjaan = $_POST['pekerjaan'];
$pergi_haji = $_POST['pergi_haji'];
$alamat_lengkap = $_POST['alamat_lengkap'];
$nomer_telepon = $_POST['nomer_telepon'];
$mahram = $_POST['mahram'];
$hubungan_mahram = $_POST['hubungan_mahram'];
$status = $_POST['status'];
$paspor = $_POST['paspor'];

$nama_file = $_FILES['foto']['name'];
$ukuran_file = $_FILES['foto']['size'];
$tipe_file = $_FILES['foto']['type'];
$tmp_file = $_FILES['foto']['tmp_name'];
$path = "Assets/Images Upload/" . $nama_file;
move_uploaded_file($tmp_file, $path);

$date = date('dmy');
$time = date('His');
$id_pendaftaran = $id_user . "-" . $date . "-" . $time . "PFT";
$id_pembayaran = $id_user . "-" . $date . "-" . $time . "PBY";
$id_keberangkatan = $id_user . "-" . $date . "-" . $time . "KBR";
$verifikasi_data = "not";
$verifikasi_pembayaran = "not";
$tanggal_pendaftaran = date('l / d-m-Y');

$insertPendaftaran = mysqli_query($conn, "INSERT INTO tb_pendaftaran (id_pendaftaran, id_user, pendaftaran, nama_lengkap, nama_ayah, nama_ibu, tempat_lahir, tanggal_lahir, umur, jenis_kelamin, pendidikan_terakhir, pekerjaan, pergi_haji, alamat_lengkap, nomer_telepon, mahram, hubungan_mahram, status, paspor, foto, verifikasi_data, tanggal_pendaftaran) VALUES ('$id_pendaftaran','$id_user','$pendaftaran','$nama_lengkap','$nama_ayah','$nama_ibu','$tempat_lahir','$tanggal_lahir','$umur','$jenis_kelamin','$pendidikan_terakhir','$pekerjaan','$pergi_haji','$alamat_lengkap','$nomer_telepon','$mahram','$hubungan_mahram','$status','$paspor','$nama_file','$verifikasi_data','$tanggal_pendaftaran')");

$inserPembayaran = mysqli_query($conn, "INSERT INTO tb_pembayaran  VALUES ('$id_pembayaran','$id_pendaftaran','$id_user','2.000.000','','$verifikasi_pembayaran')");

$inserKeberangkatan = mysqli_query($conn, "INSERT INTO tb_keberangkatan  VALUES ('$id_keberangkatan','$id_pembayaran','$id_pendaftaran','$id_user','')");
$idpendaftaran = $id_pendaftaran;
session_start();
$_SESSION['id_user'] = $id_user;
$_SESSION['id_pendaftaran'] = $idpendaftaran;
$_SESSION['status'] = "login";
header("location:afterRegistrasi.php");

// if ($cek > 0) {
//     $_SESSION['status'] = "Berhasil Mendaftar, Silahkan Login!";
//     header("location:../index.php");
// } else {
//     $_SESSION['status'] = "Gagal Mendaftar, Silahkan Registrasi ulang!";
//     header("location:index.html");
// }
