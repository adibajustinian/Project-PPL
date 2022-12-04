<?php 
    require_once "db_login.php";
    
?>

<div class="container">

    <div class="row">
    <ol class="breadcumb" style="box-shadow:2px 2px 8px #888888;">
    <p><h4>dokumen detail</h4></p>

    </ol>
    </div>

    <?php
    $id = $_GET["id"];
    require_once ('functions.php');
    $mahasiswa = query("SELECT *
                        FROM irs INNER JOIN mahasiswa
                        ON irs.id_mhs = mahasiswa.id_mhs INNER JOIN khs
                        ON khs.id_mhs = mahasiswa.id_mhs INNER JOIN pkl
                        ON pkl.id_mhs = mahasiswa.id_mhs INNER JOIN skripsi
                        ON skripsi.id_mhs = mahasiswa.id_mhs");
    
    ?>
    <?php $i = 1;?> 
    <?php foreach($mahasiswa as $mhs) : ?>
        <?php if($id == $mhs["id_mhs"]){?>
        <?php header("content-type: application/pdf"); ?>
        <?php $dokumenSkripsi = $mhs["berkas_skripsi"]; ?>
        <?php readfile("file_upload/skripsi/$dokumenskripsi");?>
        
        
        <?php } ?>
    <?php endforeach; ?>
    
</div>