<!DOCTYPE html>
<html>

<head>
 <title>Catatan Harian Programmer</title>
</head>
<body>
 <h2 align="center">Catatan Harian Programmer</h2>
  <h3 align="center">Tulis Catatan</h3>
  
  <?php
 //proses mengambil data ke database untuk ditampilkan di form edit berdasarkan member_id yg didapatkan dari GET id -> edit.php?id=member_id
  //include atau memasukkan file koneksi ke database
 include('config.php');
  //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=member_id
 $id = $_GET['id'];
  //melakukan query ke database dg SELECT table member dengan kondisi WHERE member_id = '$id'
 $show = mysql_query("SELECT * FROM tb_status WHERE id_status='$id'");
  //cek apakah data dari hasil query ada atau tidak
 if(mysql_num_rows($show) == 0){
    //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
  echo '<script>window.history.back()</script>';
   }else{
   //jika data ditemukan, maka membuat variabel $data
  $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
  }
 ?>
 
   <form action="edit_status_proses.php" method="post">
   <input type="hidden" name="id" value="<?php echo $id; ?>"> <!-- membuat inputan hidden dan nilainya adalah id_status -->
  <table cellpadding="3" cellspacing="0" align="center" width="">
   <tr>
    <td>Masukan nama Anda!</td>
   </tr>
   <tr>
    <td><input cols="20" type="text" name="nama" size="30" value="<?php echo $data['nama']; ?>" required></td>
   </tr>
   <tr>
    <td> Tulis</td>
   </tr>
   <tr>
    <td><textarea cols="48" rows="5" name="status" value="" required><?php echo $data['isi_status']; ?></textarea></td>
   </tr>
   <tr>
    <td align="center"><button type="submit" name="kirim" >Kirim</button>
    </td>
   </tr>
  </table>
 </form>
 </body>
</html>