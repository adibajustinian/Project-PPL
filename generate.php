<?php
    require_once('db_login.php');
    if(isset($_POST["submit"])){
        $nim = $_POST["NIM"];
        $nama = $_POST["nama"];
        $angkatan = $_POST["angkatan"];
        $status = $_POST["status"];
        
        $query = "INSERT INTO mahasiswa Values('','$nim','','$nama','','','','$angkatan','$status','','','','','')";
        mysqli_query($db,$query);

    }
    if(mysqli_affected_rows($db)>0){
        echo 
        "<script>
            alert('Data berhasil ditambahkan');
            document.location.href = 'dashboard_operator.php';
        </script>
        ";
    }else{
        "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'dashboard_operator.php';
        </script>
        ";
        echo mysqli_error($db);
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

<body style="background-color:#101E31">
    <br>
    <div class="container d-flex justify-content-center">
        <div class="card" style="width: 40rem;" style="box-shadow: 2px 2px rgb(69, 67, 67);">

            <section class="jumbotron text-center mt-4">
                <img src="logo.jpeg" alt="Informatika Undip" width="200" class="mt-2">

                <br>
                <h6 class="display-10 mt-2" style="text-size-adjust: 20px;"><b>SISTEM MONITORING MAHASISWA INFORMATIKA</b></h6>
                <h6 class="display-10">UNIVERSITAS DIPONEGORO</h6>
                <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-4" style="display: print-inline;">
                    <div class="container">
                        <div class="row">
                            <div class="col-5">
                                <hr class="bg-danger border-2 border-top border-secondary">
                            </div>
                            <div class="col-2 justify-content-center">
                                Entry
                            </div>
                            <div class="col-5">
                                <hr class="bg-danger border-2 border-top border-secondary">
                            </div>
                        </div>
                    </div>
                </h6>
            </section>
            <br><br>

            <div class="row justify-content-center">
                <div class="col-md-auto">
                    <form action="" method="POST" >
                        <table style="width:auto">
                            <tr">
                                <td style="width: 150px; ;">
                                    <b>Nim</b>
                                </td>
                                <td>
                                    <input type="text" class="form-control mb-2" id="NIM" name="NIM">
                                </td>
                                </tr>
                                <br>
                                <tr>
                                    <td>
                                        <b>Nama</b>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control mb-2 " id="nama" name="nama">
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td>
                                        <b>Angkatan</b>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control mb-2" id="angkatan" name="angkatan">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <b>Status</b>
                                    </td>
                                    <td>
                                    <input type="text" class="form-control mb-2" id="status" name="status">
                                    </td>
                                </tr>
                        </table>

                        <br><br><br>
                        <div class="col-md-12 text-center">
                            <button  type="submit" name="submit" class="btn btn-primary  ps-5 pe-5 pb-2 pt-2 text-center" style="background-color: #101E31;">Register</button>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>