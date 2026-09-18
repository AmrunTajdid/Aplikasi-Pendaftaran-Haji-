<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$id_user = $_SESSION['id_user'];
$id_pendaftaran = $_SESSION['id_pendaftaran'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Pages</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">
    <script src=".../../../../Assets/js/bootstrap.min.js"></script>
    <!-- bootstrap link -->
    <!-- other css -->
    <link rel="stylesheet" href="styleAfterLogin.css">
    <!-- other css -->
</head>

<body class="p-4">
    <!-- konten -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h4 class="modal-title text-center">Pembayaran Berhasil!!</h4>
            <hr>
            <br>

        </div>
    </div>
    <div class="col-2"></div>
    </div>
    <!-- konten -->

</body>

</html>