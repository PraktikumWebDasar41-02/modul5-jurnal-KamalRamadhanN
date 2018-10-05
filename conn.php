<?php 

 $conn = mysqli_connect('localhost','root','','d_modul5');
 if(mysqli_connect_errno()){
 	echo "koneksi gagal:".mysqli_connect_error();
 }else{
 	echo "berhasil";
 }
?>