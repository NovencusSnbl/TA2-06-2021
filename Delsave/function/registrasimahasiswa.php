<?php
$conn=mysqli_connect("localhost","root","","TA2");

function query($query ){
	global $conn;  
	$result = mysqli_query($conn,$query);
	$rows=[];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[]=$row;
	}
	return $rows;
}



function registrasi($data){
	global $conn;

	$username = strtolower(stripslashes( $data["username"]));
	$password = mysqli_real_escape_string($conn,$data["password"]);
	$password2= mysqli_real_escape_string($conn,$data["password2"]);

	//cek usernmae sudah ada 
	$result =mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "
			<script>
				alert('Username sudah terdaftar!');
			</script>
		";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo " 
			<script>
				alert ('konfirmasi password tidak sesuai');
			</script>
		";
		return false;
	}

	//enkripsi password
	$hash = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($conn,"INSERT INTO users VALUES('','3','$username','$hash')");
	return mysqli_affected_rows($conn);
}
?>