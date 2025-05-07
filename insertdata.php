<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .formset{padding-top: 5px;}
        .jarak{padding-top: 20px;}
    </style>
</head>
<body>
    <div class="container">
<?php
include_once("header.php");
?>
    <h3>Data Mahasiswa Baru</h3>
    <form action="createdata.php" method="POST">
        <div class="formset">
            <label>NIM</label>
            <input type="text" class="form-control" name="NIM">
        </div>
        <div class="formset">
            <label>NAMA</label>
            <input type="text" class="form-control" name="NAMA">
        </div>
        <div class="formset">
            <label>ALAMAT</label>
            <input type="text" class="form-control" name="ALAMAT">
        </div>
        <div class="formset">
            <label>TGL LAHIR</label>
            <input type="date" class="form-control" name="TGLLAHIR">
        </div>
        <div class="formset">
            <label>Jenis Kelamin</label>
            <select name="JK"class="form-select" >
                <option disabled>Pilih Jenis Kelamin</option>
                <option value="L">Laki-Laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>
        <div class="formset jarak">
            <button type="SUBMIT" class="btn btn-primary" name="SIMPANDATA"> Simpan Data </button>
            <a href="viewdata.php" class="btn btn-secondary">Batal</a>
        </div>
    </form>
</div>
</body>
</html>