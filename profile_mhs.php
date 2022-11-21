<?php
session_start();
require 'function_entry.php';
$id_email = $_SESSION["email"];
$mhs = query("SELECT * FROM irs INNER JOIN mahasiswa
    ON irs.id_mhs = mahasiswa.id_mhs INNER JOIN khs
    ON khs.id_mhs = mahasiswa.id_mhs INNER JOIN pkl
    ON pkl.id_mhs = mahasiswa.id_mhs INNER JOIN skripsi
    ON skripsi.id_mhs = mahasiswa.id_mhs WHERE email = '$id_email'")[0];
var_dump($mhs);
if (isset($_POST["submit"])) {

    //ubah data
    if (getUpdateProfile($_POST) > 0) {
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
        <div class="container mt-4">
            <h2>Profile Mahasiswa</h2>
        </div>
        <br>
        <div class="container bg-white">
            <div class="row">
                <div class="col col-lg-2 mt-4 text-center">
                    <img src="nobita.jfif" alt="Informatika Undip" width="200" class="rounded-circle img-thumbnail">

                    <br>
                    <br>
                    <button type="submit" class="btn btn-dark text-center" name="login" value="login">Ubah Foto Profil</button>
                </div>
                <div class="col-sm">
                    <form method="POST" autocomplete="on" action="">
                        <input type="hidden" name="id_mhs" value="<?= $mhs["id_mhs"]; ?>">
                        <div class="mb-3 row mt-4">
                            <label for="NIM" class="col-sm-4 col-form-label">NIM :</label>
                            <div class="col-sm-8">
                                <input type="text" name="NIM" class="form-control" id="NIM" value="<?= $mhs["NIM"]; ?>">
                            </div>

                        </div>
                        <div class="mb-3 row">
                            <label for="nama" class="col-sm-4 col-form-label">Nama Lengkap :</label>
                            <div class="col-sm-8">
                                <input type="text"name="nama" class="form-control" id="nama" value="<?= $mhs["nama"]; ?>">
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="alamat" class="col-sm-4 col-form-label">Alamat :</label>
                            <div class="col-sm-8 ">
                                <textarea class="form-control" rows="6" cols="6" name="alamat" id="alamat"><?= $mhs["alamat"]; ?></textarea>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="Provinsi" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8 ">
                                <select class="form-control" id="Provinsi" name="Provinsi">
                                    <option value="0">Provinsi</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="Kota/Kabupaten" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8 ">
                                <select class="form-control" id="Kota/Kabupaten" name="Kota/Kabupaten">
                                    <option value="0">Kota/Kabupaten</option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="Kelurahan" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-8 ">
                                <select class="form-control" id="Kelurahan" name="Kelurahan">
                                    <option value="0">Kelurahan</option>
                                </select>
                            </div>
                        </div>

                </div>
                <div class="col-sm">
                    <div class="mb-3 row mt-4">
                        <label for="angkatan" class="col-sm-4 col-form-label">Angkatan :</label>
                        <div class="col-sm-8">
                            <input type="text" name="angkatan"class="form-control" id="angkatan" value="<?= $mhs["angkatan"]; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Status" class="col-sm-4 col-form-label">Status :</label>
                        <div class="col-sm-8 ">
                            <select class="form-control" id="Status" name="Status">
                                <option value="0"></option>
                            </select>
                        </div>
                    </div>



                    <div class="mb-3 row">
                        <label for="no_HP" class="col-sm-4 col-form-label">No Handphone :</label>
                        <div class="col-sm-8">
                            <input type="text" name="no_HP"class="form-control" id="no_HP" value="<?= $mhs["no_HP"]; ?>">
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label for="Jalur Masuk" class="col-sm-4 col-form-label">Jalur Masuk :</label>
                        <div class="col-sm-8 ">
                            <select class="form-control" id="Jalur Masuk" name="Jalur Masuk">
                                <option value="0"></option>
                            </select>
                        </div>
                    </div>
                    <br><br><br><br><br>
                    <div class="text-center">
                        <button type="submit" class="btn btn-dark  ps-5 pe-5 pb-1 pt-1 text-center" name="submit">Perbarui</button>
                    </form>
                        <a href="dashboard_mhs.php" class="btn btn-dark  ps-5 pe-5 pb-1 pt-1 text-center">Next</a>
                    </div>


                </div>

            </div>
            <br><br>
        </div>


    </div>



</body>

</html>