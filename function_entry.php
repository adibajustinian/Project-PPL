<?php
if(!isset($_SESSION["email"])){
    session_start();
}
$db = mysqli_connect("localhost","root","","db_mahasiswa");

function query($query){
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)){
        $rows[] =$row;
    }
    return $rows;
}
function ubah($data){
        global $db;

        //$email = $_SESSION["email"];
        $smst_aktif = $data["smst_aktif"];
        $jumlah_sks = $data["jumlah_sks"];
        $id_irs =$data["id_irs"];
        
        $file = upload_irs();
        global $query;
        $query = "UPDATE irs SET 
            smst_aktif = '$smst_aktif',
            jumlah_sks = '$jumlah_sks',
            berkas_IRS = '$file'
            WHERE id_irs = $id_irs
        ";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
}
function ubah_khs($data){
        global $db;

        //$email = $_SESSION["email"];
        $SKS_semester = $data["SKS_semester"];
        $IP_smt = $data["IP_smt"];
        $SKS_kumulatif = $data["SKS_kumulatif"];
        $IP_kumulatif = $data["IP_kumulatif"];
        $id_khs =$data["id_khs"];

        //upload gambar
        $file = upload_khs();
        
        global $query;
        $query = "UPDATE khs SET 
            SKS_semester = '$SKS_semester',
            IP_smt = '$IP_smt',
            SKS_kumulatif = '$SKS_kumulatif',
            IP_kumulatif = '$IP_kumulatif',
            berkas_KHS = '$file'
            WHERE id_khs = $id_khs
        ";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
}
function ubah_pkl($data){
        global $db;

        //$email = $_SESSION["email"];
        $status_pkl = $data["status_pkl"];
        $nilai_pkl = $data["nilai_pkl"];
        $id_pkl =$data["id_pkl"];

        $file = upload_pkl();
        global $query;
        $query = "UPDATE pkl SET 
            status_pkl = '$status_pkl',
            nilai_pkl = '$nilai_pkl',
            berkas_PKL = '$file'
            WHERE id_pkl = $id_pkl
        ";
        mysqli_query($db,$query);
        return mysqli_affected_rows($db);
}


function upload_irs(){
    $namaFile = $_FILES["berkas"]["name"];
    $tmp_name = $_FILES["berkas"]["tmp_name"];

    $ekstensiGambarValid = ["jpg","jpeg","pdf","word"];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

  
    move_uploaded_file($tmp_name,'file_upload/irs/' . $namaFile);

    return $namaFile;
}
function upload_khs(){
    $namaFile = $_FILES["berkas"]["name"];
    $tmp_name = $_FILES["berkas"]["tmp_name"];

    $ekstensiGambarValid = ["jpg","jpeg","pdf","word"];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

  
    move_uploaded_file($tmp_name,'file_upload/khs/' . $namaFile);

    return $namaFile;
}
function upload_pkl(){
    $namaFile = $_FILES["berkas"]["name"];
    $tmp_name = $_FILES["berkas"]["tmp_name"];

    $ekstensiGambarValid = ["jpg","jpeg","pdf","word"];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    move_uploaded_file($tmp_name,'file_upload/pkl/' . $namaFile);

    return $namaFile;
}
function upload_skripsi(){
    $namaFile = $_FILES["berkas"]["name"];
    $tmp_name = $_FILES["berkas"]["tmp_name"];

    $ekstensiGambarValid = ["jpg","jpeg","pdf","word"];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

  
    move_uploaded_file($tmp_name,'file_upload/skripsi/' . $namaFile);

    return $namaFile;
}
function ubah_skripsi($data){
    global $db;

    //$email = $_SESSION["email"];
    $status_skripsi = $data["status_skripsi"];
    $nilai_skripsi = $data["nilai_skripsi"];
    $lama_studi = $data["lama_studi"];
    $tanggal_sidang = $data["tanggal_sidang"];
    $id_skripsi =$data["id_skripsi"];

    $file = upload_skripsi();
    global $query;
    $query = "UPDATE skripsi SET 
        status_skripsi = '$status_skripsi',
        nilai_skripsi = '$nilai_skripsi',
        lama_studi = '$lama_studi',
        tanggal_sidang = '$tanggal_sidang',
        berkas_skripsi = '$file'
        WHERE id_skripsi = $id_skripsi
    ";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}
function getUpdateProfile($data){
    global $db;

    //$email = $_SESSION["email"];
    $NIM = $data["NIM"];
    $nama = $data["nama"];
    $alamat =$data["alamat"];
    $provinsi = $data["provinsi"];
    $kabupaten = $data["kabupaten"];
    $status = $data["status"];
    $jalur_masuk = $data["jalur_masuk"];
    $angkatan =$data["angkatan"];

    
    $id_mhs =$data["id_mhs"];
    $no_HP =$data["no_HP"];

    

    global $query;
    $query = "UPDATE mahasiswa,provinsi,kota_kab SET 
        NIM = '$NIM',
        nama = '$nama',
        alamat = '$alamat',
        nama_prov = '$provinsi',
        nama_kota_kab = '$kabupaten',
        status = '$status',
        jalur_masuk = '$jalur_masuk',
        angkatan = '$angkatan',
        no_HP = '$no_HP'
        WHERE id_mhs = $id_mhs 
    ";
    mysqli_query($db,$query);
    return mysqli_affected_rows($db);
}

?>