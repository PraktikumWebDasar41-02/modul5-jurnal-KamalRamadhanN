<!DOCTYPE html>
 <html>
 <head>
 	<title>Login</title>
 </head>
 <body>
 	<form action="test2.php" method="POST">
 	<h3>Login</h3>
 	<tr><td>Nim 	: <input type="text" name="nim"><br></td></tr><br>	
 	<tr><td>Name 	: <input type="text" name="nama"><br></td></tr><br>
 	<tr><td>Email 	: <input type="text" name="email"><br></td></tr><br>
 	<input type="submit" name="submit" value="LOGIN"><br>
 </form>
 </body>
 </html>

 <?php 
 $conn = mysqli_connect('localhost','root','','d_modul5');

 if(isset($_POST['submit'])){
 	$nimm=$_POST['nim'];
 	$user=$_POST['nama'];
 	$emaill=$_POST['email'];
 
 if(strlen($nimm)<10){
 			echo " Berhasil<br> ";
 		}else{
 			echo" Nim Tidak Boleh Lebih Dari 10<br> ";
 		}

 if(strlen($user)<20){
 			echo" Berhasil<br> ";
 		}else{
 			echo" Kata Tidak Boleh Lebih Dari 20<br> ";
 		}

 if(strpos($emaill,'@')||strpos($emaill, '.')){
 			echo" Berhasil<br> ";
 		}else{
 			echo" Harus Mengandung @ Dan .<br> ";
 		}
 	}
 	
 	$masuk = mysqli_query($conn,"INSERT INTO t_jurnal1() VALUES('$nimm','$user','$emaill','')");
 	if ($masuk) {
 		echo "Berhasil";
 	}else{
 		echo "Gagal";
 	}
  ?>




