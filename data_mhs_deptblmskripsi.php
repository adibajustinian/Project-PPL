<!--
    Nama file: data_mhs.php
    fungsi: Halaman untuk dosen wali melihat detail data mahasiswa pada bagian "data mahasiswa"
-->
<?php
require_once 'functions.php';
$query = " SELECT * FROM irs INNER JOIN mahasiswa
                            ON irs.id_mhs = mahasiswa.id_mhs INNER JOIN khs
                            ON khs.id_mhs = mahasiswa.id_mhs INNER JOIN pkl
                            ON pkl.id_mhs = mahasiswa.id_mhs INNER JOIN skripsi
                            ON skripsi.id_mhs = mahasiswa.id_mhs";
$mahasiswa = (query($query));

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siap Undip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body style="background-color:#f3f3f3">

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
            <h5>Dosen Wali</h5>
        </div>
    </nav>


    <?php $i = 1 ?>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <?php if ($_GET["id"]  == $mhs["id_mhs"]) { ?>

            <!--form-->
            <div class="me-5 ms-5">
                <br>
                <ul class="nav nav-pills justify-content-center text-dark">
                    <li class="nav-item-left"><a href="list_belum_skripsi.php" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Kembali</b></a></li>
                </ul>

                <br>
                <div class="container bg-white">
                    <br>
                    <div class="text-center">
                        <h2>Proses Perkembangan Studi Mahasiswa Informatika Fakultas Sains dan Matematika Universitas Diponegoro</h2>
                    </div>
                    <div class="row">


                        <div class="col-6 " style="margin-top: 20px;">
                            <div class="row justify-content-center">
                                <div class="col-3 ms-2 ">
                                    <img src="nobita.jfif" alt="Informatika Undip" width="170" class="rounded-circle img-thumbnail ms-3 me-3 " style="margin-top: 60px;">
                                </div>
                                <div class="col-8">
                                    <form method="POST" class="ms-3" autocomplete="on" action="">
                                        <div class="mb-3 row mt-4">
                                            <label for="doswal" class="col-sm-3 col-form-label">NIM </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="doswal" value="<?= $mhs["NIM"] ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="nip" class="col-sm-3  col-form-label">Nama </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="nip" value="<?= $mhs["nama"] ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="semester" class="col-sm-3 col-form-label">Angkatan </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="semester" value="<?= $mhs["angkatan"] ?>">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="status" class="col-sm-3 col-form-label">Doswal </label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="status" value="<?= $mhs["nama_doswal"] ?>">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <div class="table-responsive-lg ms-4 justify-content-center">
                                <table class="table table-borderless">
                                    <tr>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">1</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">2</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">3</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">4</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">5</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">6</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">7</button></th>
                                    </tr>
                                    <tr>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">8</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">9</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">10</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">11</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">12</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">13</button></th>
                                        <th><button type="submit" class="btn btn-dark  pe-4 ps-4 pt-2 pb-2 text-center" name="upload" value="upload" style="background-color:#101E31;width: 100%;">14</button></th>
                                    </tr>

                                </table>
                            </div>
                            <div class="ms-4">
                                <h5>Keterangan</h5>
                            </div>
                            <div class="row ms-4">
                                <div class="col-1" style="width:2rem; height:2rem;background-color:#0E3B81;"></div>
                                <div class="col-5">: Sudah diisikan IRS dan KHS</div>
                                <div class="col-1" style="width:2rem; height:2rem;background-color:#C98400;"></div>
                                <div class="col-5">: Sudah lulus PKL</div>
                            </div>
                            <div class="row ms-4 mt-2">
                                <div class="col-1" style="width:2rem; height:2rem;background-color:#972126;"></div>
                                <div class="col-5">: Belum diisikan IRS dan KHS</div>
                                <div class="col-1" style="width:2rem; height:2rem;background-color:#2F6146;"></div>
                                <div class="col-5">: Sudah lulus Skripsi</div>
                            </div>



                        </div>
                        <div class="container col-5" style="margin-top: 30px;">
                            <div class="row">
                                <div class="col-6">
                                    <div class="card mb-4 " style="width:16rem; height:14rem;background-color:#0E3B81;">
                                        <div class="card-body text-light">
                                        <div class="row">
                                                <div class="col-6"><h5 class="card-title text-light">IRS</h5></div>
                                                <div class="col-6"><h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5></div>
                                            </div>
                                            <br>
                                            <div class="card-body text-center d-flex justify-content-center align-items-center">
                                                <div class="card-title text-center display-6 mb-4"><?= $mhs["SKS_semester"] ?> SKS</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card" style="width:16rem; height:14rem;background-color:#972126;">
                                        <div class="card-body text-light">
                                        <div class="row">
                                                <div class="col-6"><h5 class="card-title text-light">KHS</h5></div>
                                                <div class="col-6"><h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5></div>
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
                                    <div class="card" style="width:16rem; height:14rem;background-color:#C98400;">
                                        <div class="card-body text-light">
                                        <div class="row">
                                                <div class="col-6"><h5 class="card-title text-light">PKL</h5></div>
                                                <div class="col-6"><h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5></div>
                                            </div>
                                            <br>
                                            <div class="card-text">
                                                <div>Status PKL : <?= $mhs["status_pkl"] ?></div>
                                                <div>Nilai PKL : <?= $mhs["nilai_pkl"] ?></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="card" style="width:16rem; height:14rem;background-color:#2F6146;">
                                        <div class="card-body text-light">
                                        <div class="row">
                                                <div class="col-6"><h5 class="card-title text-light">Skripsi</h5></div>
                                                <div class="col-6"><h5 class="card-title text-light text-center ms-5"><?= $mhs["smst_aktif"] ?></h5></div>
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
                            <br><br>
                        </div>
                    </div>
                    
                <?php } ?>
            <?php endforeach; ?>
</body>

</html>