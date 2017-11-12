<?php
//memanggil config.php
include('config.php');
?>

<!DOCTYPE html>
<html>

<head>
 <title>Catatan Harian Programmer</title>
 <link rel="stylesheet" type="text/css" href="style.css" />
 <link rel="stylesheet" type="text/css" href="style-form-status.css" />
 <link rel="stylesheet" type="text/css" href="style-tampilan-status.css" />
 <link rel="stylesheet" type="text/css" href="style-daftar.css" />
</head>

<body>

<div id="header1">
 Catatan Harian Programmer
  <ul class="tombol">
   <li><a href="index.php">Home</a></li>
   <li><a href="daftar.php">Daftar</a></li>
   <li><a href="login.php">Login</a></li>
</ul>
</div>
<div id="form1" class="form">
<form id="form" name="form" method="post" action="">
<h1>Form Pendaftaran</h1>
<label> Nama
<span class="small">Masukkan Nama</span></label>
<input type="text" name="nama" class="highlight">
<label> Alamat
<span class="small">Masukkan Alamat</span>
</label>
<input type="text" name="alamat" class="highlight">
<label> Jenis Kelamin
<span class="small">Pilih</span>
</label>
<select class="highlight">
  <option name="jk" value="laki">Laki-Laki</option>
  <option name="jk" value="Perempuan">Perempuan</option>
  </select>
<button type="submit">DAFTAR</button>
<br>
<br>
</form>
</div>
</body>
</html>
