<!--
    Nama file: list_belum_pkl.php
    fungsi: Halaman untuk departemen melihat data mahasiswa yang belum PKL pada sistem
-->
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
        .box-container{
            font-size:12px;
            width:200px;
            height: 180px;
            padding:5px 25px;
            /* background: ; */
            color: #222;
            border-radius:50px;
            border-style:groove;
        }
    </style>
</head>

<body style="background-color:#f3f3f3"">

    <!-- header-->  
    
            <nav class=" navbar navbar-expand-lg navbar-light text-light" style="background-color:#101E31">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
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
        <h5 >Dosen Wali</h5>
    </div>
    </nav>

    <!--form-->
    <div class="me-5 ms-5">
        <br>
        <ul class="nav nav-pills justify-content-center text-dark">
            <li class="nav-item"><a href="dashboard_doswal.php" class="nav-link text-dark"><b>Home</b></a></li>
            <li class="nav-item"><a href="doswal_verifikasi.php" class="nav-link text-dark"><b>Verifikasi Progres</b></a></li>
            <li class="nav-item"><a href="rekap_pkl_doswal.php" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Data Mahasiswa PKL</b></a></li>
            <li class="nav-item"><a href="rekap_skripsi_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa Skripsi</b></a></li>
        </ul>

        <br>
        <div class="container bg-white">
            <div class="row">

                <div class="col-sm-8">
                    <br>
                <ul class="nav nav-pills justify-content-center text-dark">
                    <li class="nav-item"><a href="rekap_pkl_doswal.php" class="nav-link text-dark"><b>Rekap Data PKL Mahasiswa</b></a></li>
                    <li class="nav-item"><a href="list_sudah_pkl_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa Sudah PKL</b></a></li>
                    <li class="nav-item"><a href="list_belum_pkl_doswal" class="nav-link active" aria-current="page" style="background-color:grey"><b>Data Mahasiswa Belum PKL</b></a></li>
                </ul>
                    <form method="POST" autocomplete="on" action="">
                        <br>
                        <table class="table table-bordered">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Action</th>
                        </tr>
                        <?php
                        // Include our login information
                        require_once('functions.php');
                        // Execute the query
                        $query = query(" SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
                        ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl = 'Belum PKL' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'");
                        
                        if (isset($_POST["upload"])) {
                            $query = klik8($_POST["upload"]);
                        }
                        if (isset($_POST["semua"])) {
                            $query = semua8($_POST["semua"]);
                        }
                        // Fetch and display the results
                        $i = 1;
                        foreach ($query as $mhs) : ?>
                        <tr>
                            <td> <?= $i ?></td>
                            <td><?= $mhs["NIM"] ?></td>
                            <td><?= $mhs["nama"] ?></td>
                            <td><a class="btn btn-warning btn-sm" href="data_mhs_doswalblmpkl.php?id=<?= $mhs["id_mhs"]; ?>">Detail</a>
                            </td>
                        </tr>
                        <?php $i++;?>
                        <?php endforeach; ?>
                        </table>
                    </form>
                    <form action="" method="post">
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-left" name="semua" value="semua" style="background-color:#101E31">Tampilkan Semua</button>
                    </div>    
                    </form>
                </div>
                
                <div class="col-sm-4">
                <br>
                <div class="container bg-white justify-content-center">
                <form action="" method="post">
                    <div class="text-center">    
                        <h7>Detail setiap angkatan: </h7>
                    </div>  
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-center" name="upload" value="2016" style="background-color:#101E31">2016</button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-left" name="upload" value="2017" style="background-color:#101E31">2017</button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-left" name="upload" value="2018" style="background-color:#101E31">2018</button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-left" name="upload" value="2019" style="background-color:#101E31">2019</button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-left" name="upload" value="2020" style="background-color:#101E31">2020</button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-left" name="upload" value="2021" style="background-color:#101E31">2021</button>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark mt-2 ps-5 pe-5 pb-1 pt-1 text-left" name="upload" value="2022" style="background-color:#101E31">2022</button>
                    </div>
                    
                    </form>
                    <br><br>
                </div>
            </div>
            <br><br><br>
        </div>


    </div>



</body>

</html>