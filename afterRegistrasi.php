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
            <h4 class="modal-title text-center">Pendaftaran Berhasil!!</h4>
            <hr>
            <br>
            <h2 class="text-center">098902937748239</h2>
            <p class="text-center">Lakukan pembayaran dengan memasukan nomer virtual BRI diatas</p>
            <br>
            <hr>
            <br>
            <label for="buktiPembayaran">Silahkan kirimkan bukti pembayaran</label>
            <form action="../../User/After Login/inputPembayaran.php" method="POST" enctype="multipart/form-data">
                <input type="file" id="buktiPembayaran" name="buktiPembayaran" class="form-control mt-2" placeholder="Normal input">
                <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="<?php echo $id_pendaftaran; ?>">

                <div class="d-grid mt-4 mb-4">
                    <button type="submit" class="btn btn-primary btn-block"> Kirim bukti pembayaran </button>
                </div>
            </form>
            <div class="d-grid">
                <a href="../../User/After Login/detail.php?id_pendaftaran=<?php echo $id_pendaftaran ?>" type="button" class="btn btn-danger btn-block"> Bayar nanti </a>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    <!-- konten -->

</body>

</html>