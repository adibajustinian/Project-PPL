<?php
require 'db_login';

if (!empty($_POST["kode_prov"])) {
    $kodeprov = $_POST['kode_prov'];
    $query = "SELECT * FROM provinsi WHERE kode_prov = $kodeprov";
    $result = $db->query($query);

    
?>
        <option value="0">Pilih kabupaten</option>
        <?php while ($data = $result->fetch_object()) : ?>
            <option value="<?php echo $data->kode_kota_kab ?>"><?php echo $data->nama_kota_kab ?></option>
<?php
        endwhile;
    
}
