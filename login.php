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
<h1>Login</h1>
<label> Username
<span class="small">Masukkan Username</span></label>
<input type="text" name="nama" class="highlight">
<label> Password
<span class="small">Masukkan Password</span>
</label>
<input type="password" name="alamat" class="highlight">

<button type="submit">Login</button>
<br>
<br>
</form>
</div>
</body>
</html>
