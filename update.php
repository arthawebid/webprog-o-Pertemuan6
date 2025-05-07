<?php
    include("konfigurasi.php");
    if(!isset($_POST["cmdUpdate"])){
        header("location: viewdata.php");
    }
    $nim = $_POST["NIM"];
    $nama = $_POST["NAMA"];
    $alamat = $_POST["ALAMAT"];
    $talag = $_POST["TALAG"];
    $jkel = $_POST["JKEL"];

    $sql = "UPDATE mhs SET NAMA='$nama',ALAMAT='$alamat',TGL_LAHIR='$talag',JENISKEL='$jkel' WHERE NIM='$nim';";
    $res = mysqli_query($koneksi,$sql);
    //echo mysqli_affected_rows($koneksi);
    header("location: viewdata.php");
