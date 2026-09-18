<?php
include '../../koneksi.php';
$id_pendaftaran = $_GET['id_pendaftaran'];

$idUser;
$nomerPendaftaran;
$jenisPendaftaran;
$statusPendaftaran;
$statusPembayaran;
$statusKeberangkatan;
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

$query = mysqli_query($conn, "SELECT * FROM tb_pembayaran WHERE id_pendaftaran='$id_pendaftaran'");
while ($data2 = mysqli_fetch_array($query)) {
    if ($data2['verifikasi_pembayaran'] === 'yes' && $data2['bukti_pembayaran'] != null) {
        $statusPembayaran = "Terverifikasi";
        $statusKeberangkatan = "Menunggu keberangkatan";
    } else if ($data2['bukti_pembayaran'] != null && $data2['verifikasi_pembayaran'] === 'not') {
        $statusPembayaran = "pembayaran belum di verifikasi";
        $statusKeberangkatan = "Menunggu Verifikasi";
    } else if ($data2['bukti_pembayaran'] == null && $data2['verifikasi_pembayaran'] === 'not') {
        $statusPembayaran = "belum melakukan pembayaran";
        $statusKeberangkatan = "menunggu pembayaran";
    }
}
?>



<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../../Assets/css/bootstrap.min.css">
    <script src="../../Assets/js/bootstrap.min.js"></script>
    <!-- bootstrap link -->
    <!-- other css -->
    <link rel="stylesheet" href="styleAdmin.css">
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
    <div class="container-fluid">
        <div class="row" style="margin-top: 10vh;">
            <div class="col-2"></div>
            <div class="col-8 card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6">

                        </div>
                    </div>
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
                                        <li>Status Pedaftaran : <?php echo $statusPendaftaran; ?></li>
                                        <li>Status Pembayaran : <?php echo $statusPembayaran; ?></li>
                                        <li>Status Keberangkatan : <?php echo $statusKeberangkatan; ?>
                                            <?php if ($statusKeberangkatan == "Silahkan Melakukan pembayaran") { ?>
                                                <a href="" type="button" data-bs-toggle="modal" data-bs-target="#pembayaran">Lakukan Pembayaran</a>
                                            <?php } else { ?>

                                            <?php } ?>
                                        </li>
                                        <?php
                                        include '../../koneksi.php';
                                        $queryKeberangkatan = mysqli_query($conn, "SELECT * FROM tb_keberangkatan WHERE id_pendaftaran = '$id_pendaftaran'");
                                        while ($data3 = mysqli_fetch_array($queryKeberangkatan)) {
                                            if ($data3['id_kloter'] == NULL) { ?>
                                                <li>Kloter Keberangkatan : Belum mendapatkan Id kloter</li>
                                                <br>
                                                <div class="d-grid">
                                                    <button class="btn btn-primary btn-sm btn-block" data-bs-toggle="modal" data-bs-target="#kloter">
                                                        Atur Kloter
                                                    </button>
                                                </div>
                                            <?php } else { ?>
                                                <li>Kloter Keberangkatan : <?php echo $data3['id_kloter']; ?></li>
                                        <?php }
                                        }

                                        ?>

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
                                            <img src="../../User/After Login/Assets/Images Upload/<?php echo $image; ?>" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- data lengkap user -->
                    </div>
                </div>
            </div>
            <div class="col-2"></div>
        </div>
    </div>
    <!-- konten -->

    <!-- modal kloter -->
    <div class="modal" id="kloter">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <form action="tambahKloter.php" method="POST">
                        <input type="hidden" class="form-control" id="id_pendaftaran" name="id_pendaftaran" value="<?php echo $id_pendaftaran; ?>">
                        <select class="form-select" id="id_kloter" name="id_kloter">
                            <?php
                            include '../../koneksi.php';
                            $queryKloter = mysqli_query($conn, "SELECT * FROM tb_kloter ORDER BY tanggal_keberangkatan ASC ");
                            while ($data4 = mysqli_fetch_array($queryKloter)) {
                            ?>
                                <option value="<?php echo $data4['id_kloter'];; ?>"><?php echo "Tanggal Keberangkatan " . $data4['tanggal_keberangkatan'] . " (" . $data4['id_kloter'] . ")"; ?></option>
                            <?php }  ?>

                        </select>
                        <br>
                        <div class="d-grid">
                            <button class="btn btn-primary btn-sm btn-block" type="submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <!-- modal kloter -->
</body>

</html>