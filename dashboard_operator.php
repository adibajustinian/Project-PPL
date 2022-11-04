<!--
    Nama file: dashboard_operator.php
    fungsi: halaman untuk operator melihat dashboard operator
-->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siap Undip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
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
        <h5>Operator</h5>
    </div>
    </nav>

    <!--form-->
    <div class="me-5 ms-5">
        <br>
        <ul class="nav nav-pills justify-content-center text-dark">

        </ul>

        <br>
        <div class="container bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mt-4 ms-2">
                        <h4><b>Manajemen Akun</b></h4>
                    </div>
                    <div class="col-md-4 offset-md-9">
                        <!-- <button type="submit" class="btn text-center text-light ps-4 pe-4 pb-1 pt-1 text-left" name="add" value="add" style="background-color: #0E3B81">Tambah Akun</button> -->
                        <ul class="nav nav-pills justify-content-center text-dark">
                            <li class="nav-item"><a href="generate.php" class="nav-link active" aria-current="page" style="background-color:grey"><b>Tambah Akun</b></a></li>
                        </ul>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class=".col-md-6 .offset-md-3 align-self-center">
                        <form method="POST" autocomplete="on" action="" class="justify-content-center">
                            <br>
                            <table class="table table-bordered justify-content-center">
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Action</th>
                                </tr>
                                <?php require_once('functions.php'); ?>
                                <?php $i = 1 ?>
                                <?php $mahasiswa = query("SELECT * FROM mahasiswa") ?>
                                <?php foreach ($mahasiswa as $mhs) : ?>

                                    <tr>
                                        <td> <?= $i ?></td>
                                        <td><?= $mhs["NIM"] ?></td>
                                        <td><?= $mhs["nama"] ?></td>
                                        <td>
                                            
                                            <a class="btn btn-warning btn-sm" href="data_mhs_operator.php?id=<?= $mhs["id_mhs"]; ?>">Detail</a>
                                            <a class="btn btn-danger btn-sm" style="background-color:red" href="delete_mahasiswa.php?id=<?= $mhs["id_mhs"]; ?>">Delete</a>
                                        </td>
                    

                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                                
                            </table>
                        </form>
                    </div>
                </div>
            </div>

        </div>
</body>

</html>