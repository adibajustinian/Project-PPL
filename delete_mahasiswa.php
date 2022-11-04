<?php
    
    $id = $_GET["id"];
    $db = mysqli_connect("localhost","root","","db_mahasiswa");
    $query = " DELETE FROM mahasiswa WHERE id_mhs = $id";
    mysqli_query($db,$query);
    if(mysqli_affected_rows($db)>0){
        echo 
        "<script>
            alert('Data berhasil dihapus');
            document.location.href = 'dashboard_operator.php';
        </script>
        ";
    }else{
        "<script>
            alert('Data gagal ditambahkan');
            document.location.href = 'dashboard_operator.php';
        </script>
        ";
        echo mysqli_error($db);
    }
