<?php

require_once("db_login.php");

$nim = $_POST['NIM'];
$nama = $_POST['nama'];
$angkatan = $_POST['angkatan'];
$status= $_POST['status'];

$query = "INSERT INTO mahasiswa (NIM,nama,angkatan, status) VALUES ('$nim','$nama','$angkatan','$status')";

$result = $db->query($query);

header("location : dashboard_operator.php");

?>