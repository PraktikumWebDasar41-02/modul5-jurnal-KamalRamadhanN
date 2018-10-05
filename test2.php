
<!DOCTYPE html>
 <html>
 <head>
 	<title>Komentar</title>
 </head>
 <body>
 	<form action="test3.php" method="POST">
 	<h3>Komentar</h3>
 	<tr><td>Komentar: <input type="textarea" name="komentar"><br></td></tr><br>	
 	<input type="submit" name="submit" value="LOGIN"><br>
 </form>
 </body>
 </html>

 <?php 
 $conn = mysqli_connect('localhost','root','','d_modul5');
 if (isset($_POST['submit'])) {
 	$Komentar = $_POST['komentar'];
 	if (str_word_count($nim)<10) {
 		echo "Minimal 10 Digit";
 	}else{
 		echo "Berhasil";
 	}
 	
 $masuk1 = mysqli_connect($conn, "INSERT INTO t_jurnal1('','','','komentar')VALUES('','','','$komentar')");
 if($masuk1)
 	echo "Berhasil";
 }else{
 	echo "Gagal";
 }
?>