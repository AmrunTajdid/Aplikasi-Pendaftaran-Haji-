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

<body>
    <!-- header -->
    <header class="py-3 mb-4 border-bottom shadow">
        <div class="container-fluid align-items-center d-flex">
            <div class="flex-shrink-1">
                <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none">
                    <i class="bi bi-bootstrap fs-2 text-dark"></i>
                </a>
            </div>
            <div class="flex-grow-1 d-flex align-items-center">
                <form class="w-100 me-3">

                </form>
                <div class="flex-shrink-0 dropdown">
                    <a href="../index.php" class="btn btn-primary btn-sm">Kembali</a>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- konten -->
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <h4 class="modal-title text-center">Verifikasi Pembayaran</h4>
            <hr>
            <br>
            <?php
            $id_user;
            $nama_user;
            $id_pembayaran;
            $bukti_pembayaran;
            $nominal_pembayaran;
            $id_pendaftaran = $_GET['id_pendaftaran'];
            include '../../koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM tb_pembayaran WHERE id_pendaftaran='$id_pendaftaran'");
            while ($data = mysqli_fetch_array($query)) {
                $id_pembayaran = $data['id_pembayaran'];
                $bukti_pembayaran = $data['bukti_pembayaran'];
                $nominal_pembayaran = $data['nominal_pembayaran'];
            }
            $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'");
            while ($data2 = mysqli_fetch_array($query)) {
                $id_user = $data2['id_user'];
                $nama_user = $data2['nama_lengkap'];
            }
            ?>


            <ul>
                <li>Nama Pendaftar : <?php echo $nama_user; ?></li>
                <li>Id User : <?php echo $id_user; ?></li>
                <li>Id Pembayaran : <?php echo $id_pembayaran; ?></li>
                <li>id Pendaftaran : <?php echo $id_pendaftaran; ?></li>
                <li>Nominal Pembayaran : <?php echo $nominal_pembayaran; ?></li>
            </ul>
            <hr>
            <h3>Bukti Pembayaran</h3>
            <img src="../../User/After Login/Assets/Images bukti pembayaran/<?php echo $bukti_pembayaran; ?>" class="img-thumbnail" alt="">
            <hr>

            <div class="d-grid mt-4 mb-4">
                <button type="submit" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#modalVerifikasi">Verifikasi data</button>
            </div>
        </div>
    </div>
    <div class="col-2"></div>
    </div>
    <!-- konten -->

    <!-- modal -->
    <div class="modal" id="modalVerifikasi">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <h5>Apakah anda yakin?</h5>
                    <form action="prosesVerifikasiPembayaran.php" method="POST">
                        <input type="hidden" id="id_pendaftaran" name="id_pendaftaran" value="<?php echo $id_pendaftaran; ?>">
                        <div class="d-grid mt-4 mb-4">
                            <button type="submit" class="btn btn-primary btn-block">Verifikasi Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal -->

</body>

</html>