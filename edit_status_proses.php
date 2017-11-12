<?php
//mulai proses edit data

//cek dahulu, jika tombol kirim di klik
if(isset($_POST['kirim'])){
  //inlcude atau memasukkan file koneksi ke database
 include('config.php');
  //jika tombol tambah benar di klik maka lanjut prosesnya
 $id   = $_POST['id']; //membuat variabel $id dan datanya dari inputan hidden id
 $nama  = $_POST['nama']; //membuat variabel $nama dan datanya dari inputan Nama Lengkap
 $isi_status   = $_POST['status']; //membuat variabel $isi_status dan datanya dari inputan dropdown is_status
  //melakukan query dengan perintah UPDATE untuk update data ke database dengan kondisi WHERE member_id='$id' <- diambil dari inputan hidden id
 $update = mysql_query("UPDATE tb_status SET nama='$nama', isi_status='$isi_status', waktu=(CURRENT_TIMESTAMP) WHERE id_status='$id'") or die(mysql_error());
  //jika query update sukses
 if($update){
    echo '<p align=center>Catatan berhasil di perbaharui!<br> ';  //Pesan jika proses simpan sukses
  echo '<a href="tulis_status.php?id='.$id.'">Kembali Ke Beranda</a>'; //membuat Link untuk kembali ke halaman edit
   }else{
    echo 'Gagal menyimpan data! ';  //Pesan jika proses simpan gagal
  echo '<a href="tulis_status.php?id='.$id.'">Kembali</a>'; //membuat Link untuk kembali ke halaman edit
   }

}else{ //jika tidak terdeteksi tombol simpan di klik

 //redirect atau dikembalikan ke halaman edit
 echo '<script>window.history.back()</script>';

}
?>