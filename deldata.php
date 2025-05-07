<?php
if(!isset($_GET["nim"])){
    header("location: viewdata.php");
}
$nim = $_GET["nim"];
include("konfigurasi.php");
$sql = "SELECT NAMA FROM mhs WHERE NIM='$nim';";
$res = mysqli_query($koneksi, $sql);
if(!$res){
    header("location: viewdata.php");
}
$row = mysqli_fetch_array($res);
$nama = $row["NAMA"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Mahasiswa</title>
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
        <h3>Hapus Data Mahasiswa</h3>

        <form method="POST" action="destroy.php">
            <input type="hidden" name="NIM" value="<?=$nim?>">
            <div class="formset">
                <label>NIM</label>
                <input type="text" class="form-control" name="NIMX" value="<?=$nim?>" disabled>
            </div>
            <div class="formset">
                <label>NAMA</label>
                <input type="text" class="form-control" name="NAMA" value="<?=$nama?>" disabled>
            </div>
            <div class="formset jarak">
                <button type="submit" name="cmdHapus" class="btn btn-danger">Hapus Data</button>
                <a href="viewdata.php" class="btn btn-secondary">Batal</a>
            </div>

        </form>

    </div>
    

    
    
    
</body>
</html>