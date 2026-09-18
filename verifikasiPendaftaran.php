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
            <h4 class="modal-title text-center">Verifikasi Pendaftaran</h4>
            <hr>
            <br>
            <?php
            $id_pendaftaran = $_GET['id_pendaftaran'];
            include '../../koneksi.php';
            $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'");
            while ($data = mysqli_fetch_array($query)) { ?>
                <h5>Pendaftaran : <?php echo $data['pendaftaran'] ?></h5>
                <h5>Id Pendaftaran : <?php echo $data['id_pendaftaran'] ?></h5>
                <h5>Id User : <?php echo $data['id_user'] ?></h5>
                <br>
                <hr>
                <h3>Data Lengkap</h3>
                <ul>
                    <li>Nama lengkap : <?php echo $data['nama_lengkap'] ?></li>
                    <li>Nama ayah : <?php echo $data['nama_ayah'] ?></li>
                    <li>Nama ibu : <?php echo $data['nama_ibu'] ?></li>
                    <li>Tempat lahir : <?php echo $data['tempat_lahir'] ?></li>
                    <li>Umur : <?php echo $data['umur'] ?></li>
                    <li>Jenis Kelamin : <?php echo $data['jenis_kelamin'] ?></li>
                    <li>Pendidikan terakhir : <?php echo $data['pendidikan_terakhir'] ?></li>
                    <li>Pekerjaan : <?php echo $data['pekerjaan'] ?></li>
                    <li>Pergi haji : <?php echo $data['pergi_haji'] ?></li>
                    <li>Alamat lengkap : <?php echo $data['alamat_lengkap'] ?></li>
                    <li>No Telepon : <?php echo $data['nomer_telepon'] ?></li>
                    <li>Mahram : <?php echo $data['mahram'] ?></li>
                    <li>Hubungan mahram : <?php echo $data['hubungan_mahram'] ?></li>
                    <li>Status : <?php echo $data['status'] ?></li>
                    <li>Paspor : <?php echo $data['paspor'] ?></li>
                </ul>
                <div class="d-grid mt-4 mb-4">
                    <button type="submit" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#modalVerifikasi">Verifikasi data</button>
                </div>
            <?php } ?>
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
                    <form action="prosesVerifikasiPendaftaran.php" method="POST">
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