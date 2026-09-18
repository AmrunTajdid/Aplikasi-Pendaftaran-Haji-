<!-- session -->
<?php
include '../../koneksi.php';

// mengaktifkan session
session_start();

// cek apakah user telah login, jika belum login maka di alihkan ke halaman login
if ($_SESSION['status'] != "login") {
    header("location:../index.php");
}
$id_user = $_SESSION['id_user'];
?>
<!-- session -->

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
                    <button class="cssbuttons-io-button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions"> Menu
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                            </svg>
                        </div>
                    </button>
                    <!-- button menu -->
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar -->

    <!-- content -->
    <div class="col py-3">
        <div class="tab-content">
            <!-- content Menu 1 -->
            <div class="tab-pane container active" id="beranda">
                <!-- header -->
                <div class="container" style="margin-top: 15vh; margin-bottom:20vh">
                    <div class="d-flex justify-content-between mb-3">
                        <div>
                            <h1>Kami wujudkan impian anda!</h1>
                            <h3>untuk pergi ke tanah suci</h3>
                        </div>
                        <div>
                            <!-- card header -->
                            <div class="cardHeader">
                                <div class="first-content">
                                </div>
                                <div class="second-content">
                                </div>
                            </div>
                            <!-- card header-->
                        </div>
                    </div>
                </div>
                <!-- header -->

                <!-- konten 1 -->
                <div class="container-fluid  text-center">
                    <h1>Produk</h1>
                </div>
                <div class="container" style="margin-top: 10vh; margin-bottom:20vh">
                    <div class="d-flex justify-content-between mb-3">
                        <!-- card konten 1-->
                        <div>
                            <div class="cardContent1">
                                <div class="image1"></div>
                                <div class="content">
                                    <p class="text-1">
                                        Haji Regular
                                    </p>

                                    <div class="text-2">
                                        <h5>Fasilitas</h5>
                                        <p>- Hotel Bintang 5</p>
                                        <p>- Maskapai Garuda Indonesia</p>
                                        <p>- Makan 3x</p>
                                        <p>- Manasik Haji</p>
                                    </div>
                                    <button class="buttonPendaftaran" type="button" data-bs-toggle="modal" data-bs-target="#modalPendaftaranHaji">
                                        Daftar Sekarang
                                    </button>
                                    <p class="date">
                                        Dapatkan diskon sampai 25% *
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="cardContent1">
                                <div class="image2"></div>
                                <div class="content">
                                    <p class="text-1">
                                        Umrah Regular
                                    </p>

                                    <div class="text-2">
                                        <h5>Fasilitas</h5>
                                        <p>- Hotel Bintang 5</p>
                                        <p>- Maskapai Garuda Indonesia</p>
                                        <p>- Makan 3x</p>
                                        <p>- Visa</p>
                                    </div>
                                    <button class="buttonPendaftaran" type="button" data-bs-toggle="modal" data-bs-target="#modalPendaftaranUmrah">
                                        Daftar Sekarang
                                    </button>
                                    <p class="date">
                                        Dapatkan diskon sampai 30% *
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="cardContent1">
                                <div class="image3"></div>
                                <div class="content">
                                    <p class="text-1">
                                        Umrah Plus
                                    </p>

                                    <div class="text-2">
                                        <h5>Fasilitas</h5>
                                        <p>- Hotel Bintang 5</p>
                                        <p>- Maskapai Garuda Indonesia</p>
                                        <p>- Makan 3x</p>
                                        <p>- Keberangkatan di bulan Haji</p>
                                    </div>
                                    <button class="buttonPendaftaran" type="button" data-bs-toggle="modal" data-bs-target="#modalPendaftaranUmrahPlus">
                                        Daftar Sekarang
                                    </button>
                                    <p class="date">
                                        dapatkan diskon sampai 45% *
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- card konten 1 -->
                    </div>
                </div>
                <!-- konten 1 -->
            </div>
            <!-- content Menu 1 -->

            <!-- content Menu 2 -->
            <div class="tab-pane container fade" id="riwayatPendaftaran" style="margin-top: 10vh; margin-bottom:20vh">
                <!-- sub menu -->
                <ul class="nav nav-pills">
                    <!-- Sub Menu 1 -->
                    <li class="nav-item">
                        <a class="nav-link active" data-bs-toggle="tab" href="#haji">Riwayat pendaftaran Haji</a>
                    </li>
                    <!-- Sub Menu 1 -->

                    <!-- Sub Menu 2 -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#umrah">Riwayat pendaftaran Umrah</a>
                    </li>
                    <!-- Sub Menu 2 -->

                    <!-- Sub Menu 3 -->
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" href="#umrahPlus">Riwayat pendaftaran Umrah Plus</a>
                    </li>
                    <!-- Sub Menu 3 -->
                </ul>
                <!-- sub menu -->

                <!-- content sub menu -->
                <div class="tab-content">
                    <!-- Content sub Menu 1  -->
                    <div class="tab-pane container active" id="haji">
                        <!-- tabel -->
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Pendaftaran</th>
                                    <th scope="col">Tanggal Pendaftaran</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include '../../koneksi.php';
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_user = $id_user AND pendaftaran='Haji' ");
                                if (mysqli_num_rows($query) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>

                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo $row['id_pendaftaran'] ?></td>
                                            <td><?php echo $row['tanggal_pendaftaran'] ?></td>
                                            <td><a href="detail.php?id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" class="btn btn-primary btn-sm" target="_blank">Detail</td></a>
                                        </tr>

                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- tabel -->
                    </div>
                    <!-- Content sub Menu 1  -->

                    <!-- Content sub Menu 2  -->
                    <div class="tab-pane container fade" id="umrah">
                        <!-- tabel -->
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Pendaftaran</th>
                                    <th scope="col">Tanggal Pendaftaran</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include '../../koneksi.php';
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_user = $id_user AND pendaftaran='Umrah'");
                                if (mysqli_num_rows($query) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>

                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo $row['id_pendaftaran'] ?></td>
                                            <td><?php echo $row['tanggal_pendaftaran'] ?></td>
                                            <td><a href="detail.php?id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" class="btn btn-primary btn-sm" target="_blank">Detail</td></a>
                                        </tr>

                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- tabel -->
                    </div>
                    <!-- Content sub Menu 2  -->

                    <!-- Content sub Menu 3  -->
                    <div class="tab-pane container fade" id="umrahPlus">
                        <!-- tabel -->
                        <table class="table mt-4">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Id Pendaftaran</th>
                                    <th scope="col">Tanggal Pendaftaran</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                include '../../koneksi.php';
                                $no = 1;
                                $query = mysqli_query($conn, "SELECT * FROM tb_pendaftaran WHERE id_user = $id_user AND pendaftaran='Umrah Plus'");
                                if (mysqli_num_rows($query) > 0) {
                                    // output data of each row
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>

                                        <tr>
                                            <th scope="row"><?php echo $no++; ?></th>
                                            <td><?php echo $row['id_pendaftaran'] ?></td>
                                            <td><?php echo $row['tanggal_pendaftaran'] ?></td>
                                            <td><a href="detail.php?id_pendaftaran=<?php echo $row['id_pendaftaran']; ?>" class="btn btn-primary btn-sm" target="_blank">Detail</td></a>
                                        </tr>

                                <?php
                                    }
                                } else {
                                    echo "0 results";
                                }
                                ?>
                            </tbody>
                        </table>
                        <!-- tabel -->
                    </div>
                    <!-- Content sub Menu 3  -->
                </div>
                <!-- content sub menu -->
            </div>
            <!-- content Menu 2 -->

            <!-- content Menu 3 -->
            <div class="tab-pane container fade" id="pengaturan" style="margin-top: 10vh; margin-bottom:20vh">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Pengaturan Akun
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <form action="/action_page.php" class="mb-4 mt-4">
                                    <div class="mb-3 mt-3">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label for="text" class="form-label">Username:</label>
                                        <input type="username" class="form-control" id="email" placeholder="Enter username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="pwd" class="form-label">Password:</label>
                                        <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
                                    </div>
                                    <div class="d-grid">
                                        <button type="submit" class="btn btn-primary btn-blok">Perbaharui</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Keluar
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <h3 class="text-center">Apakah anda yakin ingin keluar?</h3>
                                <div class="d-grid mt-4">
                                    <a href="../logout.php" style="text-decoration: none;" type="button" class="btn btn-danger btn-blok">
                                        Keluar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content Menu 3 -->
        </div>
    </div>
    </div>
    <!-- content -->












    <!-- diluar tamplate -->

    <!-- Menu -->
    <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel" style="color: white;">Menu</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="nav nav-pills flex-column">
                <!-- Menu 1 -->
                <li class="nav-item">
                    <a class="nav-link active" data-bs-toggle="pill" href="#beranda">Beranda</a>
                </li>
                <!-- Menu 1 -->

                <!-- Menu 2 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#riwayatPendaftaran">Riwayat Pendafataran</a>
                </li>
                <!-- Menu 2 -->

                <!-- Menu 3 -->
                <li class="nav-item">
                    <a class="nav-link" data-bs-toggle="pill" href="#pengaturan">Pengaturan</a>
                </li>
                <!-- Menu 3 -->
            </ul>
        </div>
    </div>
    <!-- Menu -->

    <!-- bottom navbar -->
    <nav class="navbar navbar-expand-sm fixed-bottom mb-2">
        <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
            </ul>
            <form class="d-flex">
                <!-- button wa -->
                <a href="">
                    <button class="buttonWa">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                            <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                        </svg>
                        <span>Whatsapp</span>
                    </button>
                </a>
                <!-- button wa -->
            </form>
        </div>
    </nav>
    <!-- bottom navbar -->


    <!-- Modal -->
    <!-- modal pendaftaran haji -->
    <div class="modal fade" id="modalPendaftaranHaji" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header container">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran haji</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body container">
                    <form action="../../User/After Login/registrasi.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                        <div class="mb-3 mt-3">
                            <label for="pendaftaran" class="form-label">Pendaftaran</label>
                            <select class="form-select" id="pendaftaran" name="pendaftaran">
                                <option value="Haji">Haji</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan nama lengkap anda" name="nama_lengkap">
                        </div>
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" placeholder="Masukan nama ayah anda" name="nama_ayah">
                                </div>
                                <div class="col-6">
                                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" placeholder="Masukan nama ibu anda" name="nama_ibu">
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan tempat lahir anda" name="tempat_lahir">
                                </div>
                                <div class="col-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">

                                <label for="tanggal_lahir" class="form-label">Umur</label>
                                <input type="text" class="form-control" id="umur" placeholder="Masukan umur anda" name="umur">

                            </div>
                            <div class="col-6">

                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-select" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan pekerjaan anda" name="pekerjaan">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="pergi_haji" class="form-label">Apakah anda pernah pergi haji?</label>
                            <select class="form-select" id="pergi_haji" name="pergi_haji">
                                <option value="Sudah Pernah">Sudah Pernah</option>
                                <option value="Belum Pernah">Belum Pernah</option>
                            </select>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="comment">Alamat Lengkap</label>
                            <textarea class="form-control mt-2" rows="5" id="alamat_lengkap" name="alamat_lengkap"></textarea>
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="telepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="nomer_telepon" placeholder="Masukan noemr telepon anda" name="nomer_telepon">
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="mahram" class="form-label">Mahram</label>
                            <input type="text" class="form-control" id="mahram" placeholder="Masukan nama mahram anda" name="mahram">
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="hubungan_mahram" class="form-label">Hubungan Mahram</label>
                            <input type="text" class="form-control" id="hubungan_mahram" placeholder="Apa hubungan anda dengan mahram anda?" name="hubungan_mahram">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Janda/Duda">Janda/Duda</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="paspor" class="form-label">Apakah anda memiliki Paspor?</label>
                            <select class="form-select" id="paspor" name="paspor">
                                <option value="Memiliki">Memiliki</option>
                                <option value="Belum Memiliki">Belum Memiliki</option>
                            </select>
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="Foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-blok">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal pendaftaran haji -->

    <!-- modal pendaftaran umrah -->
    <div class="modal fade" id="modalPendaftaranUmrah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header container">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Umrah</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body container">
                    <form action="../../User/After Login/registrasi.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                        <div class="mb-3 mt-3">
                            <label for="pendaftaran" class="form-label">Pendaftaran</label>
                            <select class="form-select" id="pendaftaran" name="pendaftaran">
                                <option value="Umrah">Umrah</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan nama lengkap anda" name="nama_lengkap">
                        </div>
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" placeholder="Masukan nama ayah anda" name="nama_ayah">
                                </div>
                                <div class="col-6">
                                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" placeholder="Masukan nama ibu anda" name="nama_ibu">
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan tempat lahir anda" name="tempat_lahir">
                                </div>
                                <div class="col-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">

                                <label for="tanggal_lahir" class="form-label">Umur</label>
                                <input type="text" class="form-control" id="umur" placeholder="Masukan umur anda" name="umur">

                            </div>
                            <div class="col-6">

                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-select" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan pekerjaan anda" name="pekerjaan">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="pergi_haji" class="form-label">Apakah anda pernah pergi haji?</label>
                            <select class="form-select" id="pergi_haji" name="pergi_haji">
                                <option value="Sudah Pernah">Sudah Pernah</option>
                                <option value="Belum Pernah">Belum Pernah</option>
                            </select>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="comment">Alamat Lengkap</label>
                            <textarea class="form-control mt-2" rows="5" id="alamat_lengkap" name="alamat_lengkap"></textarea>
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="telepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="nomer_telepon" placeholder="Masukan noemr telepon anda" name="nomer_telepon">
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="mahram" class="form-label">Mahram</label>
                            <input type="text" class="form-control" id="mahram" placeholder="Masukan nama mahram anda" name="mahram">
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="hubungan_mahram" class="form-label">Hubungan Mahram</label>
                            <input type="text" class="form-control" id="hubungan_mahram" placeholder="Apa hubungan anda dengan mahram anda?" name="hubungan_mahram">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Janda/Duda">Janda/Duda</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="paspor" class="form-label">Apakah anda memiliki Paspor?</label>
                            <select class="form-select" id="paspor" name="paspor">
                                <option value="Memiliki">Memiliki</option>
                                <option value="Belum Memiliki">Belum Memiliki</option>
                            </select>
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="Foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-blok">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal pendaftaran umrah -->

    <!-- modal pendaftaran umrah plus -->
    <div class="modal fade" id="modalPendaftaranUmrahPlus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header container">
                    <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Umrah Plus</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body container">
                    <form action="../../User/After Login/registrasi.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                        <div class="mb-3 mt-3">
                            <label for="pendaftaran" class="form-label">Pendaftaran</label>
                            <select class="form-select" id="pendaftaran" name="pendaftaran">
                                <option value="Umrah Plus">Umrah Plus</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="nama_lengkap" placeholder="Masukan nama lengkap anda" name="nama_lengkap">
                        </div>
                        <div class="mt-3 mb-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="nama_ayah" class="form-label">Nama Ayah</label>
                                    <input type="text" class="form-control" id="nama_ayah" placeholder="Masukan nama ayah anda" name="nama_ayah">
                                </div>
                                <div class="col-6">
                                    <label for="nama_ibu" class="form-label">Nama Ibu</label>
                                    <input type="text" class="form-control" id="nama_ibu" placeholder="Masukan nama ibu anda" name="nama_ibu">
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mb-4">
                            <div class="row">
                                <div class="col-6">
                                    <label for="tempat_lahir" class="form-label">Tempat Lahir</label>
                                    <input type="text" class="form-control" id="tempat_lahir" placeholder="Masukan tempat lahir anda" name="tempat_lahir">
                                </div>
                                <div class="col-6">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">

                                <label for="tanggal_lahir" class="form-label">Umur</label>
                                <input type="text" class="form-control" id="umur" placeholder="Masukan umur anda" name="umur">

                            </div>
                            <div class="col-6">

                                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                                <select class="form-select" id="jenis_kelamin" name="jenis_kelamin">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>

                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <div class="row">
                                <div class="col-6">
                                    <label for="pendidikan" class="form-label">Pendidikan Terakhir</label>
                                    <select class="form-select" id="pendidikan_terakhir" name="pendidikan_terakhir">
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                                <div class="col-6">
                                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                                    <input type="text" class="form-control" id="pekerjaan" placeholder="Masukan pekerjaan anda" name="pekerjaan">
                                </div>
                            </div>
                        </div>

                        <div class="mb-3 mt-3">
                            <label for="pergi_haji" class="form-label">Apakah anda pernah pergi haji?</label>
                            <select class="form-select" id="pergi_haji" name="pergi_haji">
                                <option value="Sudah Pernah">Sudah Pernah</option>
                                <option value="Belum Pernah">Belum Pernah</option>
                            </select>
                        </div>
                        <div class="mt-3 mb-3">
                            <label for="comment">Alamat Lengkap</label>
                            <textarea class="form-control mt-2" rows="5" id="alamat_lengkap" name="alamat_lengkap"></textarea>
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="telepon" class="form-label">No Telepon</label>
                            <input type="text" class="form-control" id="nomer_telepon" placeholder="Masukan noemr telepon anda" name="nomer_telepon">
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="mahram" class="form-label">Mahram</label>
                            <input type="text" class="form-control" id="mahram" placeholder="Masukan nama mahram anda" name="mahram">
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="hubungan_mahram" class="form-label">Hubungan Mahram</label>
                            <input type="text" class="form-control" id="hubungan_mahram" placeholder="Apa hubungan anda dengan mahram anda?" name="hubungan_mahram">
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="status" class="form-label">Status</label>
                            <select class="form-select" id="status" name="status">
                                <option value="Menikah">Menikah</option>
                                <option value="Belum Menikah">Belum Menikah</option>
                                <option value="Janda/Duda">Janda/Duda</option>
                            </select>
                        </div>
                        <div class="mb-3 mt-3">
                            <label for="paspor" class="form-label">Apakah anda memiliki Paspor?</label>
                            <select class="form-select" id="paspor" name="paspor">
                                <option value="Memiliki">Memiliki</option>
                                <option value="Belum Memiliki">Belum Memiliki</option>
                            </select>
                        </div>
                        <div class="mt-3 mb-4">
                            <label for="Foto" class="form-label">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary btn-blok">Daftar Sekarang</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- modal pendaftaran umrah plus -->
    <!-- Modal -->

</body>

</html>