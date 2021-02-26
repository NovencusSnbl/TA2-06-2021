<?php
$conn=mysqli_connect("localhost","root","","TA2");

function query($query ){
	global $conn;  
	$result = mysqli_query($conn,$query);
	$rows=[];
	while 	($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}

function tambahdata($data){
	//ambil data dari tiap elemen
	global $conn;	

 date_default_timezone_set('Asia/Jakarta');
  // Hasil: 20-01-2017 05:32:15
 $nama=htmlspecialchars($data["nama"]);
 $ciri=htmlspecialchars($data["ciri"]);
 $idloker=htmlspecialchars($data["idloker"]);
 $gambar = addslashes(upload());
 $status=$data["status"];
 $waktuS=date('Y-m-d H:i:s');		


 if (!$gambar){
 	return false;	
 }
 else{
	$query="INSERT INTO barang VALUES('','$nama','$ciri','$idloker','$gambar','$status','$waktuS','')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
 }
}

function upload(){
	$namaFile = $_FILES['gambar']['name'];
	$ukuranFile= $_FILES['gambar']['size'];
	$error=$_FILES['gambar']['error'];
	$tmpName = $_FILES['gambar']['tmp_name'];


	//cek apakah tidak ada gmabar di upload

	if ($error === 4) {
		echo "<script>
			alert('pilih gambar terlebih dahulu!');
		</script>";
 		return false;
	}
//cek apakah yang di upload memang gambar
	$ekstensiGambarValid=['jpg','jpeg','png','gif','jfif'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar =strtolower(end($ekstensiGambar));

	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			 	alert('Yang anda upload bukan gambar!');
			 </script>";
		return false;
	} 

	//cek jika tapi ukurannya terlalu besar
	if ($ukuranFile > 4000000 ) {
		echo "<script>
			alert('ukuran gambar terlalu besar!');
		</script>";
		return false;
	}
	//lolos pengecekan,siap upload

	$namaFileBaru = uniqid();
	
	$namaFileBaru .= '.';
	$namaFileBaru .= $ekstensiGambar;
	move_uploaded_file($tmpName, 'img/'.$namaFileBaru);
	return $namaFileBaru;
}

?>