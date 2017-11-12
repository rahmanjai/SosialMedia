<?php
$host = "localhost";//ip host
$user = "root"; //user data base
$pass = ""; // password database
$name = "status"; //nama database

$koneksi = mysql_connect($host, $user, $pass) or die ("Koneksi ke Database gagal");
mysql_select_db($name, $koneksi) or die ("Tidak ada database yang dipilih");
?>