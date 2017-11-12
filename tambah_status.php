<?php
if(isset($_POST['kirim'])){
  //inlcude configurasi koneksi
 include('config.php');
  //menangkap data dari tambah.php
 $nama  = $_POST['nama'];
 $status = $_POST['status'];
 $tanggal = date('l jS \of F Y h:i:s A');
 
  //qwey menympan datanya
  $simpan="INSERT INTO tb_status SET
        nama='$nama',
        isi_status='$status',
        waktu=(CURRENT_TIMESTAMP)";
$input = mysql_query($simpan); //exekusinya
 //mencek sukses atau tidak
 if($input){
    echo '<p align=center>Tulisan berhasil di tambahkan!</p> ';  //Pesan jika proses tambah sukses
  echo '<a href="tulis_status.php"><p align=center><br>Kembali Ke Beranda</p></a>'; //membuat Link untuk kembali ke halaman tambah
 }else{
    echo 'Gagal menambahkan data! ';  //Pesan jika proses tambah gagal
  echo '<a href="tambah.php">Kembali</a>'; //membuat Link untuk kembali ke halaman tambah
   }

}else{ 

 
 echo '<script>window.history.back()</script>';

}
?>