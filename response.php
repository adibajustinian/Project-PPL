<?php
include_once("db.php");
if (!empty($_POST["id"])) {
    $id = $_POST['id'];
    $query = "select * from kabupaten where id_provinsi=$id";
    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        echo '<option value="">Select kabupaten</option>';
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<option value="' . $row['id'] . '">' . $row['nama_kab'] . '</option>';
        }
    }
} 