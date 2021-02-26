 <?php
// require 'function/conn.php';
// session_start();
// if (!isset($_SESSION["login"])) {
//   header("Location: login.php");
//   exit;
// }
 require'function/testupload.php';

 if(isset($_POST["upload"])) {

 //cek apakah data berhasil dikirm atau tidak
 if(uploaddata($_POST)>0) {
 	echo "
 	<script>
 	alert('Data Berhasil ditambahkan');
 	document.location.href = 'index.php'
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
	<title>Upload Data Mahasiswa</title>
</head>
<center>
<body style="background-image:url(image/loker2.jpg);background-size: cover;">
	<br>
	<br>
	<br>
	<br>

	<form action="" method="post" enctype="multipart/form-data">
		<h1>Upload Data</h1>
		<table>			
			
			<div class="container">
	   
	    <label><b>File</b></label><br>
	    <fieldset style="background-color: white">
	    <input type="file" name="gambar" required style="color: black;padding-top: 6px;padding-bottom: 6px;">
	    </fieldset>

	        
	    <input type="hidden" name="status">
  </div>
		</table>
		<br>
		<button type="submit" name="upload" style="width: 93%">Upload data</button>
	</form>
</body>
</center>
</html>