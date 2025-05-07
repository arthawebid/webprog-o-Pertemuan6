<?php
    include("konfigurasi.php");
    if(!isset($_POST["cmdHapus"])){
        header("location: viewdata.php");
    }
    $nim = $_POST["NIM"];

    $sql = "DELETE FROM mhs WHERE NIM='$nim';";
    $res = mysqli_query($koneksi,$sql);
    //echo mysqli_affected_rows($koneksi);
    header("location: viewdata.php");