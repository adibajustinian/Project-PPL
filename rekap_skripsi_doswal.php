<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siap Undip</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <style>
        .box-container {
            font-size: 12px;
            width: 200px;
            height: 180px;
            padding: 5px 25px;
            color: #222;
            border-radius: 50px;
            border-style: groove;
        }

        .chartBox {
            width: auto;
        }
    </style>
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

    <!--form-->
    <div class="me-5 ms-5">
        <br>
        <ul class="nav nav-pills justify-content-center text-dark">
        <li class="nav-item"><a href="dashboard_doswal.php" class="nav-link text-dark"><b>Home</b></a></li>
            <li class="nav-item"><a href="doswal_verifikasi.php" class="nav-link text-dark"><b>Verifikasi Progres</b></a></li>
            <li class="nav-item"><a href="rekap_pkl_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa PKL</b></a></li>
            <li class="nav-item"><a href="rekap_skripsi_doswal" class="nav-link active" aria-current="page" style="background-color:#101E31"><b>Data Mahasiswa Skripsi</b></a></li>
        </ul>

        <br>
        <div class="container bg-white">
            <div class="row">
                <ul class="nav nav-pills justify-content-center text-dark">
                    <li class="nav-item"><a href="#.php" class="nav-link active" aria-current="page" style="background-color:grey"><b>Rekap Data Skripsi Mahasiswa</b></a></li>
                    <li class="nav-item"><a href="list_sudah_skripsi_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa Sudah Skripsi</b></a></li>
                    <li class="nav-item"><a href="list_belum_skripsi_doswal.php" class="nav-link text-dark"><b>Data Mahasiswa Belum Skripsi</b></a></li>
                </ul>
                <div class="col-sm-11 justify-content-center">

                    <form method="POST" autocomplete="on" action="">
                        <br>
                        <div class="chartBox">
                            <canvas id="myChart"></canvas>
                        </div>
                        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                        <script>
                            const data = {
                                labels: ["2016", "2017", "2018", "2019", "2020", "2021", "2022"],
                                datasets: [{
                                        data: [100, 95, 80, 20, 0, 0, 0],
                                        borderColor: 'rgba(102, 178, 255, 1)',
                                        backgroundColor: 'rgba(102, 178, 255, 1)',
                                        label: 'Sudah',
                                    },
                                    {
                                        label: 'Belum',
                                        data: [20, 37, 50, 140, 162, 160, 170],
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
                        </script>
                    </form>
                </div>

                <br><br><br>
            </div>


        </div>


</body>

</html>