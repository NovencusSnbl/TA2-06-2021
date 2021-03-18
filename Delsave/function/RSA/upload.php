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
$jenis_dokumen=htmlspecialchars($data["jenis_dokumen"]);
$mahasiswa_id=htmlspecialchars($data["mahasiswa_id"]);
$creatby= $_SESSION['username'];
$result = mysqli_query($conn, "SELECT b.baak_id FROM users u INNER JOIN baak b ON u.users_id = b.users_id WHERE u.username = '$creatby'");  
if (mysqli_num_rows($result) === 1) {
    //cek password
    $row = mysqli_fetch_assoc($result);


$baak_id=$row["baak_id"];

$rand1=rand(1000,2000);
$rand2=rand(1000,2000);
// mencari bilangan prima selanjutnya dari $rand1 &rand2
$p = gmp_nextprime($rand1); 
$q = gmp_nextprime($rand2);
	

//menghitung&menampilkan n=p*q
$n=gmp_mul($p,$q);

//menghitung&menampilkan totient/phi=(p-1)(q-1)
$totient=gmp_mul(gmp_sub($p,1),gmp_sub($q,1));

//mencari e, dimana e merupakan coprime dari totient
//e dikatakan coprime dari totient jika gcd/fpb dari e dan totient/phi = 1
for($e=2;$e<100;$e++){  //mencoba perulangan max 100 kali, 
    $gcd = gmp_gcd($e, $totient); 
    if(gmp_strval($gcd)=='1')
        break;
}

//cari d
// d.e mod totient =1
// d.e = totient*x + 1
// d.e = totient*1 + 1
// d = (totient *1 + 1)/e

//menghitung&menampilkan d
$i=1;
do{
    $res = gmp_div_qr(gmp_add(gmp_mul($totient,$i),1), $e);
    
    $i++;
    if($i==10000) //maksimal percobaan 10000
        break;
}while(gmp_strval($res[1])!='0');
$d=$res[0];

$publickey = $jenis_dokumen."_d".$mahasiswa_id;
$privatekey = $jenis_dokumen."_e".$mahasiswa_id;
$pxq = $jenis_dokumen."_n".$mahasiswa_id;
		

$private = fopen($privatekey.".txt", "w") or die("Unable to open file!");
$public = fopen($publickey.".txt", "w") or die("Unable to open file!");
$myfile = fopen($pxq.".txt", "w") or die("Unable to open file!");

$txt1 = $e;
$txt2 = $d;
$txt3 = $n;

fwrite($private, $txt1);
fwrite($public, $txt2);
fwrite($myfile, $txt3);



$filename1 = $jenis_dokumen."_e".$mahasiswa_id;
$filename2 = $jenis_dokumen."_n".$mahasiswa_id;
$filename3 = $jenis_dokumen."_messagedigest".$mahasiswa_id;
$filename4 = $jenis_dokumen."_d".$mahasiswa_id;

$myfile1 = fopen($filename1.".txt", "r") or die("Unable to open file!");

$myfile2 = fopen($filename2.".txt", "r") or die("Unable to open file!");

$myfile3 = fopen($filename3.".txt", "w") or die("Unable to open file!");

$n=fread($myfile2,filesize($filename2.".txt"));
$e=fread($myfile1,filesize($filename1.".txt"));

rename($filename1.".txt", 'enkripsi/'.$filename1.".txt");
rename($filename2.".txt", 'enkripsi/'.$filename2.".txt");
rename($filename4.".txt", 'enkripsi/'.$filename4.".txt");

$gambar = addslashes(upload());

$hasil="";
    //pesan dikodekan menjadi kode ascii, kemudian di enkripsi per karakter
    for($i=0;$i<strlen($gambar);++$i){
        //rumus enkripsi <enkripsi>=<pesan>^<e>mod<n>
        $hasil.=gmp_strval(gmp_mod(gmp_pow(ord($gambar[$i]),$e),$n));
        //antar tiap karakter dipisahkan dengan "."
        if($i!=strlen($gambar)-1){
            $hasil.=".";
        }
    }

    $txtmessage = $hasil;
    fwrite($myfile3, $txtmessage);

 
$filename5 = $jenis_dokumen."_messagedigest".$mahasiswa_id;   
rename($filename5.".txt", 'enkripsi/'.$filename5.".txt");

$creatat = date('Y-m-d H:i:s');;



if (!$gambar){
 	return false;	
}
else{
	$query="INSERT INTO dokumen VALUES('','$jenis_dokumen','$mahasiswa_id','$baak_id','$gambar','$creatby','$creatat','','')";
	mysqli_query($conn,$query);

	return mysqli_affected_rows($conn);
  }
 }

fclose($private);
fclose($public);
fclose($myfile);
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
	$ekstensiGambarValid=['jpg','jpeg','pdf'];
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
	move_uploaded_file($tmpName, 'file/'.$namaFileBaru);
	return $namaFileBaru;
}

?>