 <?php
session_start();
if (!isset($_SESSION["masuk"])) {
  header("Location: login.php");
  exit;
}
require'function/RSA/upload.php';


 if(isset($_POST["submit"])) {

 //cek apakah data berhasil dikirm atau tidak
 if(tambahdata($_POST)>0) {
 	echo "
 	<script>
 	alert('Data Berhasil ditambahkan');
 	document.location.href = 'baak.php'
 	</script>
 	";
 }
 else{
 	echo "
 	<script>
 	alert('Data Gagal ditambahkan');
 	document.location.href = 'uploadtest.php'
 	</script>
 	";
 }
 }

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Dokumen</title>
</head>

<center>
<body>
	<br><br><br><br>
	<form action="" method="post" enctype="multipart/form-data">
		<h1>Upload Dokumen Mahasiswa</h1>
		<table>			
			<div class="container">
			    
			    <label><b>Jenis Dokumen</b></label><br>
			   		 <select name="jenis_dokumen" >
			            <option value="1">Ijazah</option>
			            <option value="2">Transkrip Nilai</option>
			          </select><br>
			    <br><label><b>NIM</b></label>
			    <input type="text" placeholder="masukkan sesuai nim mahasiswa" name="mahasiswa_id" required>
			    <br><br>
			    <label><b>Attacth File Here!</b></label><br><br>
			    <input type="file" name="gambar" required">
			    <br><br><br><br>
			       
	  		</div>
		</table>
		<br>
		<button type="submit" name="submit">Upload data</button>
	</form>
</body>
</center>
</html>