<?php 
require 'db_login.php';
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">

    </script>
</head>

<body>
    <div class="container">
        <div class="form-group">
            <label for="exampleFormControlSelect1">Provinsi</label>
            <select class="form-control" id="id_provinsi">
                <option>---Pilih Provinsi---</option>
                <?php
                $sql = mysqli_query($db, "SELECT * FROM provinces") or die(mysqli_error($con));
                while ($dt = mysqli_fetch_array($sql)) {
                ?><?php 
                include "db_login.php";
                ?>
                <!doctype html>
                <html lang="en">
                
                <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
                
                    <title>Combobox Bertingkat</title>
                </head>
                
                <body>
                
                    <div class="container-fluid">
                        <div class=" row justify-content-md-center">
                
                            <div class="col-md-6">
                                <br>
                                <div class="card" style="width: 100%;">
                                    <div class="card-body">
                                        <h5 class="card-title text-center">Combobox Bertingkat</h5>
                                        <h6 class="card-subtitle mb-2 text-muted text-center">ClasCode | iniilmu.com</h6>
                                        <form>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Provinsi</label>
                                                <select class="form-control" id="id_provinsi">
                                                    <option>---Pilih Provinsi---</option>
                                                    <?php
                                                        $sql = mysqli_query($db,"SELECT * FROM provinces") or die(mysqli_error($con));
                                                        while ($dt = mysqli_fetch_array($sql)) {
                                                    ?>
                                                        <option value="<?php echo $dt['id_prov'] ?>"><?php echo $dt['name'] ?></option>
                                                    <?php } ?>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Kabupaten</label>
                                                <select class="form-control" id="id_kabupaten">
                                                    <option>---Pilih Kabupaten---</option>
                                                </select>
                                            </div>
                                           
                                            <div class="form-group">
                                                <button class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                
                            </div>
                
                        </div>
                    </div>
                
                
                    <script src="js/jquery.min.js"></script>
                
                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
                
                    <script>
                        $(document).ready(function(){
                            $('#id_provinsi').on('change',function(){
                                var id_provinsi = $(this).val();
                                $.ajax({
                                    url:'ambil_data.php',
                                    type:"POST",
                                    data:{
                                        modul:'Kabupaten',
                                        provinsiID:id_provinsi
                                    },
                                    success:function(respond){
                                        $("#id_kabupaten").html(respond);
                                    },
                                    error:function(){
                                        alert("Gagal Mengambil Data");
                                    }
                                })
                            })
                
                            
                        });
                
                    </script>
                
                </body>
                
                </html>
                    <option value="<?php echo $dt['id_prov'] ?>"><?php echo $dt['name'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">Kabupaten</label>
            <select class="form-control" id="id_kabupaten">
                <option>---Pilih Kabupaten---</option>
            </select>
        </div>
    </div>
</body>

</html>