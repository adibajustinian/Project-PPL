<?php

require_once('db_login.php');

if (isset($_GET['id'])) {
    $kode_kota_kab = $_GET['id'];
    $result = $db->query("select * from kota_kab where kode_kota_kab='$kode_kota_kab'");
    ?>
    <option value="0">Pilih kabupaten</option>
    <?php while ($data = $result->fetch_object()): ?>
        <option value="<?php echo $data->kode_kota_kab ?>"><?php echo $data->nama_kota_kab ?></option>
    <?php
    endwhile;
}