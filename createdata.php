<?php
    include_once("konfigurasi.php");
    if(!isset($_POST["SIMPANDATA"])){
        die();
    }

    $txNIM = $_POST["NIM"];
    $txNAMA = $_POST["NAMA"];
    $txALAMAT = $_POST["ALAMAT"];
    $txTGL = $_POST["TGLLAHIR"];
    $txJK = $_POST["JK"];

    $sql = "INSERT INTO mhs(NIM, NAMA, ALAMAT, TGL_LAHIR, JENISKEL) 
    VALUES('$txNIM','$txNAMA', '$txALAMAT','$txTGL','$txJK');";

    $res = mysqli_query($koneksi, $sql);
    if(!$res){
        die("Penambahan data gagal");
    }

    echo "Penambahan data sukses";

    mysqli_close($koneksi);
