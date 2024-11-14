<?php
include 'lib/koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5 Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-warning text-white text-center">
  <marquee><h1>Admin Antrian RS</h1></marquee>
  <h2 font-size="29px">Rumah Sakit Sentra Medika</h2>
  <p> Aku Iqbal Admin RS,,,,Welcome my website!!!</p> 
</div>
  
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-4">
      <h3>Daftar</h3>
      <p><img src="img/a.png" width="100px" height="100px"></p>
      <button><a href='daftar_antrian.php'>Daftar</a></button>
    </div>
    <div class="col-sm-4">
      <h3>Daftar</h3>
      <p><img src="img/dft.png"width="100px" height="100px"></p>
      <button><a href='tambah_antrian.php'>Tambah</a></button>
    </div>
    <div class="col-sm-4">
      <h3>Daftar</h3>
      <p><img src="img/h.png" width="100px" height="100px"></p>
      <button><a href='ubah_status.php'>Ubah</a></button>
    </div>
    </div>
</div>

</body>
</html>
