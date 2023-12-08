<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Penghutang</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style='background-image: url("./img/bg.jpg")' >
<header>
        <nav class="navbar navbar-light" style="background-color: #b8f0fc;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    Buku Hutang
                </a>
            </div>
        </nav>
    </header>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Tambahkan Data</a></button>
        <table class="table table-dark table-hover">
  <thead>
    <tr>
      <th scope="col" style="color: white">No</th>
      <th scope="col" style="color: white">NAMA</th>
      <th scope="col" style="color: white">JUMLAH HUTANG</th>
      <th scope="col" style="color: white">TENGGAT WAKTU</th>
      <th scope="col" style="color: white"></th>
      
    </tr>
  </thead>
  <tbody>

  <?php

$sql="select * from list";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id=$row['id'];
        $nama=$row['nama'];
        $jumlah=$row['jumlah'];
        $tenggat=$row['tenggat'];
        echo '<tr>
        <th scope="row" style="color: white">'.$id.'</th>
        <td style="color: white">'.$nama.'</td>
        <td style="color: white">'.$jumlah.'</td>
        <td style="color: white">'.$tenggat.'</td>
        <td style="color: white">
        <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
    </td>
      </tr>';
    }
}

?>
  </tbody>
</table>
    </div>
</body>

</html>