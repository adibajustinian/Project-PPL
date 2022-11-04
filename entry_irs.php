<!--
    Nama file: entry_irs.php
    fungsi: Halaman untuk mahasiswa menambahkan data IRS pada sistem
-->
<?php
//koneksi basis data
session_start();
require 'function_entry.php';
$id_email = $_SESSION["email"];
$mhs = query("SELECT * FROM irs INNER JOIN mahasiswa
    ON irs.id_mhs = mahasiswa.id_mhs INNER JOIN khs
    ON khs.id_mhs = mahasiswa.id_mhs INNER JOIN pkl
    ON pkl.id_mhs = mahasiswa.id_mhs INNER JOIN skripsi
    ON skripsi.id_mhs = mahasiswa.id_mhs WHERE email = '$id_email'")[0];

if (isset($_POST["submit"])) {

    //ubah data
    if (ubah($_POST) > 0) {
        echo
        "<script>
                alert('Data berhasil ubah');
                document.location.href = 'dashboard_mhs.php';
            </script>
            ";
    } else {
        "<script>
                alert('Data gagal diubah');
                document.location.href = 'dashboard_mhs.php';
            </script>
            ";
        echo mysqli_error($db);
    }
}

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
        <h5>Mahasiswa</h5>
    </div>
    </nav>

    <!--form-->
    <div class="me-5 ms-5">
        <br>
        <ul class="nav nav-pills justify-content-center text-dark">
            <li class="nav-item"><a href="dashboard_mhs.php" class="nav-link text-dark"><b>Home</b></a></li>
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Data IRS</b></a></li>
            <li class="nav-item"><a href="entry_khs.php" class="nav-link text-dark"><b>Data KHS</b></a></li>
            <li class="nav-item"><a href="entry_pkl.php" class="nav-link text-dark"><b>Data PKL</b></a></li>
            <li class="nav-item"><a href="entry_skripsi.php" class="nav-link text-dark"><b>Data Skripsi</b></a></li>
        </ul>

        <br>
        <div class="container bg-white">
            <div class="row">
                <div class="col-2 mt-4 text-right">

                </div>
                <div class="col-sm">
                    <form method="POST" action="" enctype="multipart/form-data">
                        <br>
                        <br><br>
                        <br><br>
                        <input type="hidden" name="id_irs" value="<?= $mhs["id_irs"]; ?>">
                        <div class="mb-3 row mt-4">
                            <label for="smst_aktif" class="col-sm-4 col-form-label">Semester Aktif :</label>
                            <div class="col-sm-5">
                                <input type="text" name="smst_aktif" class="form-control" id="smst_aktif" value="<?= $mhs["smst_aktif"]; ?>">
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="jumlah_sks" class="col-sm-4 col-form-label">SKS yang diambil :</label>
                            <div class="col-sm-5">
                                <input type="text" name="jumlah_sks" class="form-control" id="jumlah_sks" value="<?= $mhs["jumlah_sks"]; ?>">
                            </div>
                        </div>
                        <br>
                        
                
                </div>
                <div class="text-center">
                    <div class="col-sm d-flex justify-content-center">
                            <br><br><br><br>
                            <div class="box-container ">
                                <br><br>
                                <div class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="70" height="70" fill="currentColor" class="bi bi-upload" viewBox="0 0 16 16">
                                        <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
                                        <path d="M7.646 1.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 2.707V11.5a.5.5 0 0 1-1 0V2.707L5.354 4.854a.5.5 0 1 1-.708-.708l3-3z" />
                                    </svg>

                                </div>

                                <br>
                                <input type="file" name="berkas" /><br><br>

                            </div>

                        </div>
                        <br>
                    <button type="submit" class="btn btn-dark ps-3 pe-3 pb-1 pt-1 " name="submit" style="background-color:#101E31">--Perbarui--</button>
                    </form>
                </div>
                    


            </div>
            <br><br><br>
        </div>


    </div>



</body>

</html>