<?php
    include_once("konfigurasi.php");

    $sql = "INSERT INTO mhs(NIM, NAMA, ALAMAT, TGL_LAHIR, JENISKEL) VALUES('1122331122','Yuanita', 'Jl. Seroja 34','2003-03-15','P');";

    $res = mysqli_query($koneksi, $sql);
    if(!$res){
        die("Penambahan data gagal");
    }

    echo "Penambahan data sukses";

    mysqli_close($koneksi);
