<!--
    Nama file: dashboard_mhs.php
    fungsi: Halaman untuk mahasiswa melihat dashboard mahasiswa
-->
<!-- hubungkan database -->
<?php
session_start();
require_once 'functions.php';
$query = " SELECT * FROM dosen INNER JOIN mahasiswa 
                        ON dosen.nama_doswal = mahasiswa.nama_doswal INNER JOIN irs
                        ON irs.id_mhs = mahasiswa.id_mhs INNER JOIN khs
                        ON khs.id_mhs = mahasiswa.id_mhs INNER JOIN pkl
                        ON pkl.id_mhs = mahasiswa.id_mhs INNER JOIN skripsi
                        ON skripsi.id_mhs = mahasiswa.id_mhs ";
$mahasiswa = (query($query));



//mysqli_fetch_row() indeks angka
//mysqli_fetch_assoc() indeks assoc
//mysqli_fetch_array() indeks assoc dan angka

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siap Undip</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body style="background-color:#f3f3f3"">

    <!-- header-->  
    
            <nav class=" navbar navbar-expand-lg navbar-light text-light" style="background-color:#101E31">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
        </svg>
    </a>
    <ul class="dropdown-menu text-light" aria-labelledby="navbarDropdown">
        <li><a class="dropdown-item" href="logout.php">Logout</a></li>

    </ul>
    <div class="container">

        <div class="container justify-content-center text-center text-light">
            <h4>SISTEM MONITORING MAHASISWA INFORMATIKA UNIVERSITAS DIPONEGORO</h4>
        </div>

    </div>
    <div class="me-4 align-items-center flex justify-center text-light" style="text-align:center">
        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
        </svg>
        <!-- <li class="nav-item"><a href="profil-mahasiswa.php" class="nav-pills-link justify-content-center text-light"><h5>Mahasiswa</h5></a></li> -->
        <h5>Mahasiswa</h5>
    </div>
    </nav>
    <?php $i = 1 ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <?php if ($mhs["email"] == $_SESSION["email"]) { ?>
            <!--form-->
            <div class="me-5 ms-5">
                <br>
                <ul class="nav nav-pills justify-content-center text-dark">
                    <li class="nav-item"><a href="#" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Home</b></a></li>
                    <li class="nav-item"><a href="entry_irs.php" class="nav-link text-dark"><b>Data IRS</b></a></li>
                    <li class="nav-item"><a href="entry_khs.php" class="nav-link text-dark"><b>Data KHS</b></a></li>
                    <li class="nav-item"><a href="entry_pkl.php" class="nav-link text-dark"><b>Data PKL</b></a></li>
                    <li class="nav-item"><a href="entry_skripsi.php" class="nav-link text-dark"><b>Data Skripsi</b></a></li>
                </ul>

                <br><br>
                <div class="container bg-white">
                    <div class="row">


                        <div class="col-6" style="margin-top: 50px;">
                            <div class="row">
                                <div class="col-3">
                                    <img src="nobita.jfif" alt="Informatika Undip" width="170" class="rounded-circle img-thumbnail ms-3 me-3">
                                </div>


                                <div class="col-9" style="margin-top: 15px;">
                                    <div class="ms-3"><?= $mhs["nama"] ?></div>
                                    <div class="ms-3"><?= $mhs["NIM"] ?></div>
                                    <div class="ms-3"><?= $mhs["email"] ?></div>
                                    <div class="ms-3"><?= $mhs["fakultas"] ?></div>
                                    <br>
                                    <!-- <button type="submit" class="btn btn-dark btn-sm text-center ps-4 pe-4 pb-1 pt-1 text-left ms-3" name="update" value="update">Perbarui Data</button> -->
                                    <!-- <li type="button" class="btn nav-item"><a href="profile_mhs.php" class="nav-link nav-pills text-light text-center pb-1 pt-1 text-left me-10 ms-10" style="background-color:#101E31" role="button"><b>Perbarui Data</b></a></li> -->
                                    <ul class="nav nav-pills justify-content text-dark">
                                        <li class="nav-item"><a href="profile_mhs.php" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Perbarui Data</b></a></li>
                                    </ul>
                                    <br><br>
                                </div>



                            </div>
                            <form method="POST" class="ms-3" autocomplete="on" action="">
                                <div class="mb-3 row mt-4">
                                    <label for="doswal" class="col-sm-3 col-form-label">Dosen Wali </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="doswal" name="doswal" value="<?= $mhs["nama_doswal"] ?>" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="nip" class="col-sm-3 col-form-label">NIP Dosen Wali </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="nip" name="nip" value="<?= $mhs["NIP"] ?>" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="semester" class="col-sm-3 col-form-label">Studi Semester </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="semester" name="semester" value="<?= $mhs["smst_aktif"] ?>" disabled>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label for="status" class="col-sm-3 col-form-label">Status Akademik </label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="status" name="status" value="<?= $mhs["status"] ?>" disabled>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-6 text-white" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card mb-4 " style="width:15rem; height:14rem;background-color:#0E3B81;">
                                        <div class="card-body text-light">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title text-light">IRS</h5>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card-body text-center d-flex justify-content-center align-items-center">
                                                <div class="card-title text-center display-6 mb-4"><?= $mhs["SKS_semester"] ?> SKS</div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-6">
                                    <div class="card" style="width:15rem; height:14rem;background-color:#972126;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title text-light">KHS</h5>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card-text">
                                                <div>SKS Semester : <?= $mhs["SKS_semester"] ?></div>
                                                <div>IP Semester : <?= $mhs["IP_smt"] ?></div>
                                                <div>SKS Kumulatif : <?= $mhs["SKS_kumulatif"] ?></div>
                                                <div>IP Kumulatif : <?= $mhs["IP_kumulatif"] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="card" style="width:15rem; height:14rem;background-color:#C98400;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title text-light">PKL</h5>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5>
                                                </div>
                                            </div>
                                            <br><br>
                                            <div class="card-text">
                                                <div>Status PKL : <?= $mhs["status_pkl"] ?></div>
                                                <div>Nilai PKL : <?= $mhs["nilai_pkl"] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card" style="width:15rem; height:14rem;background-color:#2F6146;">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-6">
                                                    <h5 class="card-title text-light">Skripsi</h5>
                                                </div>
                                                <div class="col-6">
                                                    <h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="card-text">
                                                <div>Status Skripsi : <?= $mhs["status_skripsi"] ?></div>
                                                <div>Nilai Skripsi : <?= $mhs["nilai_skripsi"] ?></div>
                                                <div>Lama Studi : <?= $mhs["lama_studi"] ?></div>
                                                <div>Tanggal Lulus : <?= $mhs["tanggal_sidang"] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        </div>



                    </div>
                <?php } ?>
            <?php endforeach; ?>
</body>

</html>