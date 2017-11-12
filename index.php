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

<script type="text/javascript">
 window.onload = function() { jam(); }

 function jam() {
  var e = document.getElementById('jam'),
  d = new Date(), h, m, s;
  h = d.getHours();
  m = set(d.getMinutes());
  s = set(d.getSeconds());

  e.innerHTML = h +':'+ m +':'+ s;

  setTimeout('jam()', 1000);
 }

 function set(e) {
  e = e < 10 ? '0'+ e : e;
  return e;
 }
</script>

</head>

<body>

<div id="header1">
	Catatan Harian Programmer
  <ul class="tombol">
		
		<li><a href="daftar.php">Daftar</a></li>
		<li><a href="login.php">Login</a></li>
		<li><a href="index.php">Home</a></li>
</ul>
</div>

<div id="programmer">

  Jam
	 <h1 style="font-size: 25px; font-family: verdana; text-align: center;" id="jam"></h1> 

  <?php
  echo date("Y-m-d");
  date_default_timezone_set("Asia/Jakarta");
  ?>
</div>


    <div id="form1" class="form">
    <form id="form" name="form" action="tambah_status.php" method="post">

    <label>Masukan Nama</label>
    <input type="text" name="nama" class="highlight">

    <textarea cols="52" rows="5" name="status" placeholder="Apa yang anda pikirkan?" required></textarea>
    <button type="submit" name="kirim">Kirim</button>
    <br>
    <br>

    </form>
    </div>


 <!-- Tampilan status yang sudah di Update -->
    <?php
	//SELECT data dari database
  $query = mysql_query("SELECT * FROM tb_status ORDER BY waktu DESC") or die(mysql_error());
    //melihat apakah ada database
  if(mysql_num_rows($query) == 0){ //jika belum ada data
   echo 'Tidak ada data!';
     }else{
      //jika data tidak kosong
   $no = 1; //membuat nomor
   while($data = mysql_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database

   //menampilkan row dengan data di database
    echo '<div id="kotak">';
    echo '<div id="nama">'
    .$data['nama'].'</div>';
    echo '<div id="waktu">'.$data['waktu'].'</div>';
    echo '<br><hr>';
    echo '<div id="status">'.$data['isi_status'].'</div>';

     //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=member_id
    echo '<ul class="edit">';
	  echo '<li><a href="edit_status.php?id='.$data['id_status'].'">Edit</a></li>';
    echo '<li><a href="hapus.php?id='.$data['id_status'].'" onclick="return confirm(\'Yakin?\')">Hapus</a></li>';
    echo '</ul>';
    echo '</div>';

       }
     }
  ?>
  
 <div id="fotter">
  Copyright &copy; Rahman Jailani <br> 2016
 </div>



</body>
</html>
