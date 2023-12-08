<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $jumlah=$_POST['jumlah'];
    $nama=$_POST['nama'];
    $tenggat=$_POST['tenggat'];

    $sql="insert into list (jumlah,nama,tenggat)
    values('$jumlah', '$nama', '$tenggat')";
    $result=mysqli_query($con,$sql);
    if($result){
        //echo "Data Berhasil Dimasukan";
        header('location:index.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tambah Penghutang</title>
  </head>
  <body>
    <div class="container my-5">
    <form method="post">
<div class="form-group">
    <label>Nama</label>
    <input type="text" class="form-control" placeholder="Masukkan Nama" name="nama">
</div>

  <div class="form-group">
    <label>Jumlah Hutang</label>
    <input type="number" class="form-control" placeholder="Masukkan Jumlah Hutang" name="jumlah">
</div>

<div class="form-group">
    <label>Tenggat Bayar</label>
    <input type="text" class="form-control" placeholder="Masukkan Tenggat Bayar" name="tenggat">
</div>
   
  <button type="submit" class="btn btn-primary my-5" name="submit">Submit</button>
</form>
    </div>
  </body>
</html>