<?php
session_start();
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
include '../../koneksi.php';
$id_pendaftaran = $_GET['id_pendaftaran'];

$idUser;
$nomerPendaftaran;
$jenisPendaftaran;
$statusPendaftaran;
$image;

$query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'");
while ($data = mysqli_fetch_array($query)) {
    $idUser = $data['id_user'];
    $nomerPendaftaran = $data['id_pendaftaran'];
    $jenisPendaftaran = $data['pendaftaran'];
    if ($data['verifikasi_data'] == "not") {
        $statusPendaftaran = "Belum di verifikasi";
    } else {
        $statusPendaftaran = "Terverifikasi";
    }
    $image = $data['foto'];
}

$statusPembayaran;
$statusKeberangkatan;
$query2 = mysqli_query($conn, "SELECT * FROM tb_pembayaran WHERE id_pendaftaran='$id_pendaftaran'");
while ($data2 = mysqli_fetch_array($query2)) {
    if ($data2['verifikasi_pembayaran'] === 'yes' && $data2['bukti_pembayaran'] != null) {
        $statusPembayaran = "Terverifikasi";
        $statusKeberangkatan = "Menunggu keberangkatan";
    } else if ($data2['bukti_pembayaran'] != null && $data2['verifikasi_pembayaran'] === 'not') {
        $statusPembayaran = "pembayaran belum di verifikasi";
        $statusKeberangkatan = "Menunggu Verifikasi";
    } else if ($data2['bukti_pembayaran'] == null && $data2['verifikasi_pembayaran'] === 'not') {
        $statusPembayaran = "anda belum melakukan pembayaran / pembayaran belum di verifikasi";
        $statusKeberangkatan = "Silahkan Melakukan pembayaran";
    }
}

$idKloter;
$query3 = mysqli_query($conn, "SELECT * FROM tb_keberangkatan WHERE id_pendaftaran='$id_pendaftaran'");
while ($data3 = mysqli_fetch_array($query3)) {
    $idKloter = $data3['id_kloter'];
}




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
    <!-- navbar -->
    <nav class="navbar navbar-expand-sm navbar-dark mb-4 fixed-top" style="background-color: #F4A442;">
        <div class="container">
            <a class="navbar-brand" href="javascript:void(0)" style="color:black;">Multazam Sinar Surya</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class="navbar-nav me-auto">

                </ul>
                <div class="d-flex justify-content-between">
                    <!-- button menu -->
                    <a href="../../User/After Login/index.php" class="cssbuttons-io-button" style="text-decoration: none;"> Home
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                        </div>
                    </a>
                    <!-- button menu -->
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    <!-- konten -->
    <div class="row" style="margin-top: 15vh;">
        <div class="col-2"></div>
        <div class="col-8 card">
            <div class="card-body">
                <h3 class="text-center">DETAIL PENDAFTARAN</h3>
                <div class="accordion" id="accordionExample">
                    <!-- general -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                General
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Id User : <?php echo $idUser; ?></li>
                                    <li>Nomer Pendaftaran : <?php echo $nomerPendaftaran; ?></li>
                                    <li>Jenis Pendaftaran : <?php echo $jenisPendaftaran; ?></li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- general -->

                    <!-- data lengkap user -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Data Pendaftaran
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <div class="row">
                                    <div class="col-6">
                                        <?php
                                        $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_pendaftaran='$id_pendaftaran'");
                                        while ($data = mysqli_fetch_array($query)) { ?>
                                            <ul>
                                                <li>Nama lengkap : <?php echo $data['nama_lengkap'] ?></li>
                                                <li>Pendaftaran : <?php echo $data['pendaftaran'] ?></li>
                                                <li>Nomer pendaftaran : <?php echo $data['id_pendaftaran'] ?></li>
                                                <li>Id user : <?php echo $data['id_user'] ?></li>
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
                                        <?php } ?>
                                    </div>
                                    <div class="col-6">
                                        <img src="Assets/Images Upload/<?php echo $image; ?>" class="img-thumbnail">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data lengkap user -->

                    <!-- status -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Status
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>Status Pedaftaran : <?php echo $statusPendaftaran; ?></li>
                                    <li>Status Pembayaran : <?php echo $statusPembayaran; ?></li>
                                    <li>Status Keberangkatan : <?php echo $statusKeberangkatan; ?>
                                        <?php if ($statusKeberangkatan == "Silahkan Melakukan pembayaran") { ?>
                                            <a href="" type="button" data-bs-toggle="modal" data-bs-target="#pembayaran">Lakukan Pembayaran</a>
                                    </li>

                                    <br>
                                </ul>
                                <div class="d-grid">
                                    <a href="cancel.php?id_pendaftaran=<?php echo $id_pendaftaran; ?>" class="btn btn-danger  btn-block">Batalkan pendaftaran</a>
                                </div>
                                <?php } else {
                                            $query4 = mysqli_query($conn, "SELECT * FROM tb_kloter WHERE id_kloter='$idKloter'");
                                            while ($data4 = mysqli_fetch_array($query4)) { ?>

                                    <li>Tanggal Berangkat : <?php echo $data4['tanggal_keberangkatan']; ?></li>
                                    <li>Titik Kumpul : <?php echo $data4['titik_kumpul']; ?></li>
                                    <li>Tanggal Pulang : <?php echo  $data4['Tanggal_pulang']; ?></li>
                                <?php } ?>

                            <?php } ?>

                            </div>
                        </div>
                    </div>
                    <!-- status -->
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </div>
    <!-- konten -->

    <!-- modal pembayaran -->
    <div class="modal" id="pembayaran">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Silahkan lakukan pembayaran</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
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
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <!-- modal pembayaran -->

</body>

</html>