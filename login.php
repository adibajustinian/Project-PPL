<?php
//File      : login.php
//Deskripsi : menampilkan form login dan melakukan login ke halaman admin.php

session_start(); //inisialisasi session
require_once('db_login.php');

//cek apakah user sudah submit form
if (isset($_POST["submit"])){
    $valid = TRUE; //flag validasi

    //cek validasi email
    $email = test_input($_POST['email']);
    $result = $db->query("SELECT * FROM user WHERE email='$email'");
    if ($email == ''){
        $error_email = "Email is required";
        $valid = FALSE;
    } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $error_email = "Invalid email format";
        $valid = FALSE;
    }

    //cek validasi password
    $password = test_input($_POST['password']);
    if ($password == ''){
        $error_password = "Password is required";
        $valid = FALSE;
    }

    //cek validasi
    // menyeleksi data user dengan email dan password yang sesuai
    $login = mysqli_query($db,"SELECT email, password FROM user WHERE email='$email' and password='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    if ((!empty($email)) &(!empty($password)) & (!$cek)){
      $error_login = "The email or password is incorrect";
      $valid = false;
    }

}

    
    // menyeleksi data user dengan email dan password yang sesuai
    $login = mysqli_query($db,"SELECT * FROM user where email='$email' AND password ='$password'");
    // menghitung jumlah data yang ditemukan
    $cek = mysqli_num_rows($login);
    
    // cek apakah email dan password di temukan pada database
    if($cek > 0){
        
        $data = mysqli_fetch_array($login);
    
        // cek jika user login sebagai admin
        if($data['peran']=="mahasiswa"){
            // buat session login dan email
            $_SESSION['email'] = $data['email'];
            $_SESSION['peran'] = "mahasiswa";
            // alihkan ke halaman dashboard admin
            header("location:dashboard_mhs.php");
    
        // cek jika user login sebagai pegawai
        }else if($data['peran']=="dosen"){
            // buat session login dan email
            $_SESSION['email'] = $data['email'];
            $_SESSION['peran'] = "dosen";
            // alihkan ke halaman dashboard pegawai
            header("location:dashboard_doswal.php");
    
        // cek jika user login sebagai pengurus
        }else if($data['peran']=="operator"){
            // buat session login dan email
            $_SESSION['email'] = $data['email'];
            $_SESSION['peran'] = "operator";
            // alihkan ke halaman dashboard pengurus
            header("location:dashboard_operator.php");
        }
        else if($data['peran']=="departemen"){
            // buat session login dan email
            $_SESSION['email'] = $data['email'];
            $_SESSION['peran'] = "departemen";
            // alihkan ke halaman dashboard pengurus
            header("location:dashboard_departemen.php");
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

<body style="background-color:#101E31">
    <!-- Navbar
    <nav class="p-3"  style="background-color:#101E31" style="padding: 10px;" style="box-shadow: 10px 10px rgb(69, 67, 67);">
      
          <div class="row text-center text-light" >
            <div class="col">
              <h2>Sistem Informasi Akademik Departemen Ilmu Komputer / Informatika</h2>
            </div>
          </div>
      
    </nav> -->
    <!-- container -->
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
                                Login
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
                    <form method="POST" autocomplete="on" action="">
                        <table style="width:auto">
                            <tr">
                                <td style="width: 150px; ;">
                                    <b>Email</b>
                                </td>
                                <td>
                                    <input type="email" class="form-control mb-2"  id="email" name= "email";   value="<?php if (isset($email)) {
                                        echo $email;
                                } ?>">
                                <div class=" text-danger"><?php if (isset($error_email)) echo $error_email;?></div>
                                </td>
                            </tr>
                            <br>
                            <tr>
                                <td>
                                    <b>Password</b>
                                </td>
                                <td>
                                    <input type="password" class="form-control mb-2 " id="password" name="password" value="<?php if (isset($password)) {
                                    echo $password;
                                    } ?>">
                                    <div class=" text-danger"><?php if (isset($error_password)) echo $error_password;?></div>
                                    <div class=" text-danger"><?php if (isset($error_login)) echo $error_login;?></div>
                                </td>
                                
                            </tr>
    
                            
                        </table>

                        <br><br><br>
                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn ps-5 pe-5 pb-2 pt-2 text-center text-light" name="submit" style="background-color: #101E31;">Login</button>
                        </div>
                        <br><br>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>

</html>