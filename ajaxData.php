<?php
require 'db_login.php';

$id = $_POST['provinsiID'];

$query = mysqli_query($db,"SELECT * FROM kota_kab WHERE kode_prov='$id'");
echo '<option>Kabupaten</option> ';
while ($data = mysqli_fetch_array($query)){
    echo '<option value= " '.$data['kode_kota_kab']. '">'.$data['nama_kota_kab'].' </option> ';
}
 


?>