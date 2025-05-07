<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>

<div class="container">
<?php
include_once("header.php");
?>
    <h3>Data Mahasiswa</h3>
    <a href="insertdata.php" class="btn btn-primary">Tambah</a>

    <table class="table table-hover">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th></th>
            </tr>
        </thead>
        
        <tbody>
<?php
$sql = "SELECT NIM,NAMA FROM mhs;";
include_once("konfigurasi.php");
$res = mysqli_query($koneksi,$sql);

$no = 0;
while($row = mysqli_fetch_array($res)){
    $no++;
?>
            <tr>
                <td><?=$no?></td>
                <td><?=$row["NIM"]?></td>
                <td><?=$row["NAMA"]?></td>
                <td>
                <a class="btn btn-warning" href="editdata.php?nim=<?=$row["NIM"]?>">ubah</a>
                <a class="btn btn-danger"  href="deldata.php?nim=<?=$row["NIM"]?>">hapus</a></td>
            </tr>
<?php
}
?>

        </tbody>

    </table>
    
    </div>
</body>
</html>