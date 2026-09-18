<!-- session -->
<?php
include '../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:landingPage.php");
}
?>
<!-- session -->
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap link -->
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <script src="../Assets/js/bootstrap.min.js"></script>
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
                    <a href="logout.php" class="btn btn-primary btn-sm">Logout</a>
                </div>
            </div>
        </div>
    </header>
    <!-- header -->

    <!-- konten -->
    <div class="container-fluid">
        <div class="row">
            <!-- menu -->
            <div class="col-3">
                <div class="card shadow" style="height: 80vh;">
                    <div class="card-body">
                        <ul class="nav nav-pills flex-column">
                            <!-- menu 1 -->
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#data_user">Data user</a>
                            </li>
                            <!-- menu 1 -->

                            <!-- menu 2 -->
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#data_pendaftaran">Data Pendaftaran</a>
                            </li>
                            <!-- menu 2 -->

                            <!-- menu 3 -->
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#verifikasi">Verifikasi</a>
                            </li>
                            <!-- menu 3 -->


                            <!-- menu 4  -->
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#jadwal">Jadwal</a>
                            </li>
                            <!-- menu 4  -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- menu -->

            <!-- konten -->
            <div class="col-8">
                <div class="tab-content">
                    <!-- konten 1 -->
                    <div class="tab-pane container p-4 active" id="data_user">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">ID User</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include '../koneksi.php';
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM tb_user");
                                if (mysqli_num_rows($query) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php echo $row['id_user'] ?></td>
                                    <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- konten 1 -->

                    <!-- konten 2 -->
                    <div class="tab-pane container p-4 fade" id="data_pendaftaran">
                        <ul class="nav nav-pills">
                            <!-- menu 1 -->
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="pill" href="#haji">Haji</a>
                            </li>
                            <!-- menu 1 -->

                            <!-- menu 2 -->
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#umrah">Umrah</a>
                            </li>
                            <!-- menu 2 -->

                            <!-- menu 3 -->
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="pill" href="#umrahPlus">Umrah Plus</a>
                            </li>
                            <!-- menu 3 -->
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content p-2">
                            <!-- konten 1 -->
                            <div class="tab-pane container active" id="haji">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Id Pendaftaran</th>
                                            <th scope="col">Tanggal Pendaftaran</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE pendaftaran = 'Haji'");
                                        if (mysqli_num_rows($query) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $row['nama_lengkap'] ?></td>
                                                    <td><?php echo $row['id_pendaftaran'] ?></td>
                                                    <td><?php echo $row['tanggal_pendaftaran'] ?></td>
                                                    <td>
                                                        <a href="After Login/detailPendaftaran.php?id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" target="_blank" class="btn btn-primary btn-sm">Detail</a>
                                                    </td>
                                            <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- konten 1 -->

                            <!-- konten 2 -->
                            <div class="tab-pane container fade" id="umrah">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Id Pendaftaran</th>
                                            <th scope="col">Tanggal Pendaftaran</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE pendaftaran = 'Umrah' ");
                                        if (mysqli_num_rows($query) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $row['nama_lengkap'] ?></td>
                                                    <td><?php echo $row['id_pendaftaran'] ?></td>
                                                    <td><?php echo $row['tanggal_pendaftaran'] ?></td>
                                                    <td>
                                                        <a href="After Login/detailPendaftaran.php?id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" target="_blank" class="btn btn-primary btn-sm">Detail</a>
                                                    </td>
                                            <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- konten 2 -->

                            <!-- konten 3 -->
                            <div class="tab-pane container fade" id="umrahPlus">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Nama lengkap</th>
                                            <th scope="col">Id Pendaftaran</th>
                                            <th scope="col">Tanggal Pendaftaran</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $no = 1;
                                        $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE pendaftaran = 'Umrah Plus'");
                                        if (mysqli_num_rows($query) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($query)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $row['nama_lengkap'] ?></td>
                                                    <td><?php echo $row['id_pendaftaran'] ?></td>
                                                    <td><?php echo $row['tanggal_pendaftaran'] ?></td>
                                                    <td>
                                                        <a href="After Login/detailPendaftaran.php?id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" target="_blank" class="btn btn-primary btn-sm">Detail</a>
                                                    </td>
                                            <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                            ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- konten 3 -->
                        </div>
                    </div>
                    <!-- konten 2 -->

                    <!-- konten 3 -->
                    <div class="tab-pane container p-4 fade" id="verifikasi">

                        <ul class="nav nav-pills">
                            <!-- menu 1 -->
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#verifikasiData">Verifikasi data</a>
                            </li>
                            <!-- menu 1 -->

                            <!-- menu 2 -->
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#verifikasiPembayaran">Verifikasi pembayaran</a>
                            </li>
                            <!-- menu 2 -->
                        </ul>
                        <div class="tab-content p-2">
                            <div class="tab-pane container active" id="verifikasiData">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                             <th scope="col">Nama</th>
                                            <th scope="col">Id Pendaftaran</th>
                                            <th scope="col">Jenis Pendaftaran</th>
                                            <th scope="col">Id User</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $queryPendaftaran = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE verifikasi_data = 'not' ");
                                        $no = 1;
                                        if (mysqli_num_rows($queryPendaftaran) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($queryPendaftaran)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $row['nama_lengkap'] ?></td>
                                                    <td><?php echo $row['id_pendaftaran'] ?></td>
                                                    <td><?php echo $row['pendaftaran'] ?></td>
                                                    <td><?php echo $row['id_user'] ?></td>
                                                    <td><a href="After Login/verifikasiPendaftaran.php?id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" class="btn btn-primary btn-sm" target="_blank">Verifikasi</td></a>
                                                </tr>

                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane container fade" id="verifikasiPembayaran">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Id Pembayaran</th>
                                            <th scope="col">Id User</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $queryPembayaran = mysqli_query($conn, "SELECT * FROM tb_pembayaran WHERE verifikasi_pembayaran = 'not' ");
                                        $nomer = 1;
                                        if (mysqli_num_rows($queryPembayaran) > 0) {
                                            // output data of each row
                                            while ($row2 = mysqli_fetch_assoc($queryPembayaran)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $nomer++; ?></th>
                                                    <td><?php echo $row2['id_pembayaran'] ?></td>
                                                    <td><?php echo $row2['id_user'] ?></td>
                                                    <td><a href="After Login/verifikasiPembayaran.php?id_pendaftaran=<?php echo $row2['id_pendaftaran']; ?>" class="btn btn-primary btn-sm" target="_blank">Verifikasi</td></a>
                                                </tr>

                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                    <!-- konten 3 -->

                    <!-- konten 4 -->
                    <div class="tab-pane container p-4 fade" id="jadwal">

                        <ul class="nav nav-pills">
                            <!-- menu 1 -->
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#jadwalUmrah">Jadwal keberangkatan Umrah</a>
                            </li>
                            <!-- menu 1 -->

                            <!-- menu 2 -->
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#jadwalUmrahPlus">Jadwal keberangkatan Umrah Plus</a>
                            </li>
                            <!-- menu 2 -->
                        </ul>

                        <div class="tab-content p-2">
                            <!-- konten 1 -->
                            <div class="tab-pane container active" id="jadwalUmrah">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-sm btn-block mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#kloter">
                                        Buat kloter baru
                                    </button>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Id Kloter</th>
                                            <th scope="col">Tanggal Keberangkatan</th>
                                            <th scope="col">Titik Kumpul</th>
                                            <th scope="col">Tanggal Pulang</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $queryUmrah = mysqli_query($conn, "SELECT * FROM tb_kloter WHERE keberangkatan = 'Umrah' ");
                                        $no = 1;
                                        if (mysqli_num_rows($queryUmrah) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($queryUmrah)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $row['id_kloter'] ?></td>
                                                    <td><?php echo $row['tanggal_keberangkatan'] ?></td>
                                                    <td><?php echo $row['titik_kumpul'] ?></td>
                                                    <td><?php echo $row['Tanggal_pulang'] ?></td>
                                                    <td><a href="After Login/hapusKloter.php?id_kloter=<?php echo $row['id_kloter']; ?>" class="btn btn-danger btn-sm">Hapus</td></a>
                                                </tr>

                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- konten 1 -->

                            <!-- konten 2 -->
                            <div class="tab-pane container fade" id="jadwalUmrahPlus">
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-sm btn-block mt-4 mb-2" data-bs-toggle="modal" data-bs-target="#kloter">
                                        Buat kloter baru
                                    </button>
                                </div>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Id Kloter</th>
                                            <th scope="col">Tanggal Keberangkatan</th>
                                            <th scope="col">Titik Kumpul</th>
                                            <th scope="col">Tanggal Pulang</th>
                                            <th scope="col">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include '../koneksi.php';
                                        $queryUmrah = mysqli_query($conn, "SELECT * FROM tb_kloter WHERE keberangkatan = 'Umrah Plus' ");
                                        $no = 1;
                                        if (mysqli_num_rows($queryUmrah) > 0) {
                                            // output data of each row
                                            while ($row = mysqli_fetch_assoc($queryUmrah)) {
                                        ?>
                                                <tr>
                                                    <th scope="row"><?php echo $no++; ?></th>
                                                    <td><?php echo $row['id_kloter'] ?></td>
                                                    <td><?php echo $row['tanggal_keberangkatan'] ?></td>
                                                    <td><?php echo $row['titik_kumpul'] ?></td>
                                                    <td><?php echo $row['Tanggal_pulang'] ?></td>
                                                    <td><a href="After Login/hapusKloter.php?id_kloter=<?php echo $row['id_kloter']; ?>" class="btn btn-danger btn-sm">Hapus</td></a>
                                                </tr>

                                        <?php
                                            }
                                        } else {
                                            echo "0 results";
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- konten 2 -->
                        </div>

                    </div>
                    <!-- konten 4 -->

                </div>
            </div>
            <!-- konten -->
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
                    <form action="After Login/jadwalKeberangkatan.php" method="POST">
                        <div class="mb3 mt-3">
                            <label for="">Keberangkatan</label>
                            <select class="form-select" id="keberangkatan" name="keberangkatan">
                                <option value="Umrah">Umrah</option>
                                <option value="Umrah Plus">Umrah Plus</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="tanggalBerangkat">Tanggal Keberangkatan</label>
                            <input type="date" class="form-control" id="tanggalBerangakat" name="tanggalBerangkat">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="titikKumpul" placeholder="Titik kumpul" name="titikKumpul">
                        </div>
                        <div class="mb-3">
                            <label for="tanggalPulang">Tanggal Kepulangan</label>
                            <input type="date" class="form-control" id="tanggalPulang" name="tanggalPulang">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-block">Buat Jadwal Baru</button>
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
    <!-- modal kloter -->
</body>

</html>