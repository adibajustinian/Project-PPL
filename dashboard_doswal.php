<!--
    Nama file: dasboard_doswal.php
    fungsi: Halaman untuk dosen wali melihat dashboard dosen wali
-->


<?php
session_start();
require_once 'functions.php';
$query = " SELECT * FROM mahasiswa INNER JOIN dosen ON mahasiswa.nama_doswal = dosen.nama_doswal";

$dosen = (query($query));

?>
<?php
require_once 'db_login.php';
$aktif = [];
$lain = [];

$qry =  "SELECT nama_doswal FROM dosen WHERE email = '".$_SESSION['email']. "'";
$result = $db->query($qry);
while ($row = $result->fetch_object()) { //only this is changed
    $dswl = $row -> nama_doswal ;
}
$qry = "SELECT angkatan, status FROM mahasiswa WHERE nama_doswal = '" .$dswl."'";
$result = $db->query($qry);

while ($row = $result->fetch_object()) { //only this is changed
    if ($row->status == "AKTIF") {
        if (!isset($aktif[$row->angkatan]) || !isset($lain[$row->angkatan])) {
            $aktif[$row->angkatan] = 0;
            $lain[$row->angkatan] = 0;
        }
        $aktif[$row->angkatan] += 1;
    } else {
        if (!isset($aktif[$row->angkatan]) || !isset($lain[$row->angkatan])) {
            $lain[$row->angkatan] = 0;
            $aktif[$row->angkatan] = 0;
        }
        $lain[$row->angkatan] += 1;
    }
}

ksort($aktif);
ksort($lain);
$data_aktif = array_values($aktif);
$data_lain = array_values($lain);
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
        <h5>Dosen Wali</h5>
    </div>
    </nav>
    <?php $i = 1 ?>
    <?php foreach ($dosen as $dsn) : ?>
        <?php if ($dsn["email"] == $_SESSION["email"]) { ?>
            <!--form-->
    <div class="me-5 ms-5">
        <br>
        <ul class="nav nav-pills justify-content-center text-dark">
            <li class="nav-item"><a href="dashboard_doswal.php" class="nav-link active" aria-current="page" style="background-color:#101E31" ><b>Home</b></a></li>
            <li class="nav-item"><a href="doswal_verifikasi.php" class="nav-link text-dark"><b>Verifikasi Progres</b></a></li>
            <li class="nav-item"><a href="rekap_pkl_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa PKL</b></a></li>
            <li class="nav-item"><a href="rekap_skripsi_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa Skripsi</b></a></li>
        </ul>

        <br><br>
        <div class="container bg-white">
            <div class="row">


                <div class="col-6" style="margin-top: 50px;">
                    <div class="row">
                        <div class="col-3">
                            <img src="dosen.png" alt="Informatika Undip" width="170" class="rounded-circle img-thumbnail ms-3 me-3">
                        </div>
                        <div class="col-9" style="margin-top: 15px;">
                        <div class="ms-3"><?= $dsn["nama_doswal"] ?></div>
                            <div class="ms-3"><?= $dsn["NIP"] ?></div>
                            <div class="ms-3"><?= $dsn["email"] ?></div>
                            <div class="ms-3">Fakultas Sains dan Matematika</div>
                            <br>
                            <br><br>
                        </div>
                    </div>
                    

                    <div class="row ms-3">
                        <div class="col-6">
                            <div class="card mb-4 text-light" style="width:15rem; height:14rem;background-color:#2F6146;">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-center">Total Mahasiswa Perwalian Status Aktif</h5> 
                                        <br>
                                        <h1>
                                        <?php 
                                        $qry = mysqli_query($db,"select * from mahasiswa WHERE nama_doswal= '".$dswl."' AND status='AKTIF'");
                                        echo mysqli_num_rows($qry);	
                                        ?> 
                                        </h1>
                                        
                                </div>
                            </div>

                        </div>
                        <div class="col-6">
                            <div class="card text-light" style="width:15rem; height:14rem;background-color:#972126;">
                                <div class="card-body text-center">
                                    <h5 class="card-title text-center">Total Mahasiswa Perwalian Status Lain</h5>
                                    <br>
                                    <h1> 
                                        <?php 
                                        $qry2 = mysqli_query($db,"select * from mahasiswa WHERE nama_doswal= '".$dswl."' AND status!='AKTIF'");
                                        echo mysqli_num_rows($qry2);	
                                        ?>
                                    </h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container col-5 text-center" style="margin-top: 100px;">
                <div class="chartBox">
                            <canvas id="myChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            var dataLain = <?php echo '["' . implode('", "', $data_lain) . '"]' ?>;
                            dataLain = dataLain.map(Number);

                            var dataAktif = <?php echo '["' . implode('", "', $data_aktif) . '"]' ?>;
                            dataaktif$aktif = dataAktif.map(Number);
                            const data = {
                                labels: ["2016","2017","2018", "2019", "2020","2021","2022"],
                                datasets: [{
                                        data: dataAktif,
                                        borderColor: 'rgba(102, 178, 255, 1)',
                                        backgroundColor: 'rgba(102, 178, 255, 1)',
                                        label: 'Aktif',
                                    },
                                    {
                                        label: 'Status Lain',
                                        data: dataLain,
                                        borderColor: 'rgba(64, 64, 64, 1)',
                                        backgroundColor: 'rgba(64, 64, 64, 1)',
                                    }
                                ]
                            };
                            const config = {
                                type: 'bar',
                                data,
                                options: {
                                    scales: {
                                        y: {
                                            beginAtZero: true
                                        }
                                    }
                                }
                            };

                            // render init block
                            const myChart = new Chart(
                                document.getElementById('myChart'),
                                config
                            );
                        </script>
                        <br>
                        <div class="text-left">
                            <!-- <button type="submit" class="btn text-center text-light ps-4 pe-4 pb-1 pt-1 text-left" name="add" value="add" style="background-color: #0E3B81">Progress Mahasiswa Perwalian</button> -->
                            <div class="nav nav-pills justify-content-center text-dark">
                                <li class="nav-item"><a href="list_aktif_doswal.php" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Progress Mahasiswa Perwalian</b></a></li>
                            </div>
                        </div>
                    </div>

              

            </div>
        </div>
        </div>
        </div>
        </div>
        <?php break;?>
        <?php } ?>
        <?php endforeach; ?>         

</body>

</html>