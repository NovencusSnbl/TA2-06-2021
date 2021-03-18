<?php

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

$publickey = "d";
$privatekey = "e";
$pxq = "n";

$private = fopen($privatekey.".txt", "w") or die("Unable to open file!");
$public = fopen($publickey.".txt", "w") or die("Unable to open file!");
$myfile = fopen($pxq.".txt", "w") or die("Unable to open file!");

$txt1 = $e;
$txt2 = $d;
$txt3 = $n;


fwrite($private, $txt1);
fwrite($public, $txt2);
fwrite($myfile, $txt3);				
 
fclose($private);
fclose($public);
fclose($myfile);
// echo "Hexadesimal :\n";
// echo "n =".gmp_strval($n,16)."\n";
// echo "e =".gmp_strval($e,16)."\n";
// echo "d =".gmp_strval($d,16)."\n";

// echo "Biner :\n";
// echo "n =".gmp_strval($n,2)."\n";
// echo "e =".gmp_strval($e,2)."\n";
// echo "d =".gmp_strval($d,2)."\n";

// echo "Basis 36 :\n";
// echo "n =".gmp_strval($n,36)."\n";
// echo "e =".gmp_strval($e,36)."\n";
// echo "d =".gmp_strval($d,36)."\n";
?> 
