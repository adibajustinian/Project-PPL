<?php 
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

    function cari($keyword){
        $query = "SELECT NIM,nama,status_irs,status_khs,status_pkl,status_skripsi,persetujuan,nama_doswal
        FROM irs INNER JOIN mahasiswa
        ON irs.id_mhs = mahasiswa.id_mhs INNER JOIN khs
        ON khs.id_mhs = mahasiswa.id_mhs INNER JOIN pkl
        ON pkl.id_mhs = mahasiswa.id_mhs INNER JOIN skripsi
        ON skripsi.id_mhs = mahasiswa.id_mhs WHERE 
                  nama LIKE '%$keyword%' OR
                  NIM LIKE '%$keyword%'";
        return query($query);
    }
//list tidak aktif departemen
    function klik($upload){
        $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status!='AKTIF' AND angkatan LIKE '%$upload%'";
        return query($query1);
    }
    function semua($upload){
        $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status!='AKTIF'";
        return query($query1);
    }
//list aktif departemen
    function klik2($upload){
        $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status='AKTIF' AND angkatan LIKE '%$upload%'";
        return query($query1);
    }
    function semua2($upload){
        $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status='AKTIF'";
        return query($query1);
    }
//list sudah pkl
    function klik3($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
        ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl = 'Sudah PKL' AND angkatan LIKE '%$upload%'";
        return query($query1);
    }
    function semua3($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
        ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl = 'Sudah PKL'";
        return query($query1);
    }
//list sudah pkl departemen
    function klik4($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
        ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl != 'Sudah PKL' AND angkatan LIKE '%$upload%'";
        return query($query1);
    }
    function semua4($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
        ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl != 'Sudah PKL'";
        return query($query1);
    }

//list sudah skripsi
    function klik5($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
        ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi = 'Belum SKRIPSI' AND angkatan LIKE '%$upload%'";
        return query($query1);
    }
    function semua5($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
        ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi = 'Belum SKRIPSI'";
        return query($query1);
    }
//list sudah skripsi departemen
    function klik6($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
        ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi != 'Belum SKRIPSI' AND angkatan LIKE '%$upload%'";
        return query($query1);
    }
    function semua6($upload){
        $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
        ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi != 'Belum SKRIPSI'";
        return query($query1);
    }

//list aktif doswal
    function klik7($upload){
    $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status='AKTIF' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'  AND angkatan LIKE '%$upload%'";
    return query($query1);
    }
    function semua7($upload){
    $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status='AKTIF' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'";
    return query($query1);
    }

//list belum pkl doswal
function klik8($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
    ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl = 'Belum PKL' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T' AND angkatan LIKE '%$upload%'";
    return query($query1);
}
function semua8($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
    ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl = 'Belum PKL' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'";
    return query($query1);
}

//list belum skripsi doswal
function klik9($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
    ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi = 'Belum SKRIPSI' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T' AND angkatan LIKE '%$upload%'";
    return query($query1);
}
function semua9($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
    ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi = 'Belum SKRIPSI' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'";
    return query($query1);
}

//list sudah pkl doswal
function klik10($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
    ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl != 'Belum PKL' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T' AND angkatan LIKE '%$upload%'";
    return query($query1);
}
function semua10($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_pkl FROM pkl INNER JOIN mahasiswa
    ON pkl.id_mhs = mahasiswa.id_mhs WHERE status_pkl != 'Belum PKL' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'";
    return query($query1);
}

//list sudah skripsi doswal
function klik11($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
    ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi != 'Belum SKRIPSI' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T' AND angkatan LIKE '%$upload%'";
    return query($query1);
}
function semua11($upload){
    $query1 = " SELECT mahasiswa.id_mhs,NIM,nama,status_skripsi FROM skripsi INNER JOIN mahasiswa
    ON skripsi.id_mhs = mahasiswa.id_mhs WHERE status_skripsi != 'Belum SKRIPSI' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'";
    return query($query1);
}

//list tidak aktif doswal
function klik12($upload){
    $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status!='AKTIF' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T' AND angkatan LIKE '%$upload%'";
    return query($query1);
}
function semua12($upload){
    $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status!='AKTIF' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'";
    return query($query1);
}

//list aktif departemen
function klik13($upload){
    $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status='AKTIF' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T' AND angkatan LIKE '%$upload%'";
    return query($query1);
}
function semua13($upload){
    $query1 = "SELECT mahasiswa.id_mhs,NIM,nama FROM mahasiswa WHERE status='AKTIF' AND nama_doswal='Dr. Aris Puji Widodo, S.Si, M.T'";
    return query($query1);
}