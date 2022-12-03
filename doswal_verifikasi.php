<?php session_start();?>
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
    <style>
        .box-container {
            font-size: 12px;
            width: 200px;
            height: 180px;
            padding: 5px 25px;
            /* background: ; */
            color: #222;
            border-radius: 50px;
            border-style: groove;
        }

        table,
        th,
        td {
            border: 1px solid #CCCCCC;
            border-style: solid;
            /* border-collapse: collapse; */
        }
    </style>
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
        <h6>Dosen Wali</h6>
    </div>
    </nav>

    <!--form-->
    <div class="me-5 ms-5">
        <br>
        <ul class="nav nav-pills justify-content-center text-dark">
            <li class="nav-item"><a href="dashboard_doswal.php" class="nav-link text-dark"><b>Home</b></a></li>
            <li class="nav-item"><a href="doswal_verifikasi.php" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Verifikasi Progres</b></a></li>
            <li class="nav-item"><a href="rekap_pkl_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa PKL</b></a></li>
            <li class="nav-item"><a href="rekap_skripsi_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa Skripsi</b></a></li>
        </ul>

        <br>
        <div class="container bg-white">
            <br>
            <div class="row">
                <div class="col-6">
                    <div class="me-5 ms-2">
                        <h3>Verifikasi Progres Mahasiswa</h3>
                    </div>
                </div>
                <div class="col-6">
                    <div class="me-9 ms-1">
                    <form action="" method="POST">
                        <input name="keyword" type="text" placeholder="Masukkan nama dan NIM" size="40">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="cari">Search</button>
                    </form>
                    </div>
                </div>

            </div>
            <div class="row_justify">
            <form method="POST" autocomplete="on" action="" class="justify-content-center">
                <table style="height: 50px;">
                    <tr style="text-align: center;">
                        <td style="width: 50px;">
                            <b>No</b>
                        </td>
                        <td style="width: 150px;">
                            <b>NIM</b>
                        </td>
                        <td style="width: 300px;">
                            <b>Nama</b>
                        </td>
                        <td style="width: 100px;">
                            <b>IRS</b>
                        </td>
                        <td style="width: 100px;">
                            <b>KHS</b>
                        </td>
                        <td style="width: 200px;">
                            <b>PKL</b>
                        </td>
                        <td style="width: 200px;">
                            <b>Skripsi</b>
                        </td>
                        <td style="width: 200px;">
                            <b>Persetujuan</b>
                        </td>
                        <td style="width: 200px;">
                            <b>Action</b>
                        </td>
                    </tr>
                    <?php
                    
                    
                    

                    require_once('functions.php');
                    $dosen = query("SELECT * FROM mahasiswa INNER JOIN dosen ON mahasiswa.nama_doswal = dosen.nama_doswal");

                    $i=1;
                    foreach($dosen as $dsn) :
                        if($dsn["email"] == $_SESSION["email"]){
                            $nama_doswal = $dsn["nama_doswal"];
                        }
                        
                    endforeach;

                    
                    $mahasiswa = query("SELECT mahasiswa.id_mhs,NIM,nama,status_irs,status_khs,status_pkl,status_skripsi,persetujuan,nama_doswal
                        FROM irs INNER JOIN mahasiswa
                        ON irs.id_mhs = mahasiswa.id_mhs INNER JOIN khs
                        ON khs.id_mhs = mahasiswa.id_mhs INNER JOIN pkl
                        ON pkl.id_mhs = mahasiswa.id_mhs INNER JOIN skripsi
                        ON skripsi.id_mhs = mahasiswa.id_mhs WHERE nama_doswal = '$nama_doswal'");
                        
                    if (isset($_POST["cari"])) {
                        $mahasiswa = cari($_POST["keyword"]);
                    }   
                    ?>
                    <?php $i = 1 ?>
                    <?php foreach ($mahasiswa as $mhs) : ?>

                        <tr>
                            <td><?= $i?></td>

                            <td><?= $mhs["NIM"] ?></td>
                            <td><?= $mhs["nama"] ?></td>
                            <td><?= $mhs["status_irs"] ?></td>
                            <td><?= $mhs["status_khs"] ?></td>
                            <td><?= $mhs["status_pkl"] ?></td>
                            <td><?= $mhs["status_skripsi"] ?></td>
                            <td><?= $mhs["persetujuan"] ?></td>
                            <td>
                                <a class="btn btn-warning btn-sm" href="data_mhs.php?id=<?= $mhs["id_mhs"]; ?>">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </table>
            
            </form>
                
                <br><br><br>
            </div>


        </div>



</body>

</html>
