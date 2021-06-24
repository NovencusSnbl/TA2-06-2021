<?php
    $filename1 = "e";
    $filename2 = "n";
    $filename3 = "messagedigest";
    
    $myfile1 = fopen($filename1.".txt", "r") or die("Unable to open file!");

    $myfile2 = fopen($filename2.".txt", "r") or die("Unable to open file!");

    $myfile3 = fopen($filename3.".txt", "w") or die("Unable to open file!");



    $n=fread($myfile2,filesize($filename2.".txt"));
    $e=fread($myfile1,filesize($filename1.".txt"));


    $teks="saya hebat sekali bun!";
    $hasil="";
    //pesan dikodekan menjadi kode ascii, kemudian di enkripsi per karakter
    for($i=0;$i<strlen($teks);++$i){
        //rumus enkripsi <enkripsi>=<pesan>^<e>mod<n>
        $hasil.=gmp_strval(gmp_mod(gmp_pow(ord($teks[$i]),$e),$n));
        //antar tiap karakter dipisahkan dengan "."
        if($i!=strlen($teks)-1){
            $hasil.=".";
        }
    }

    $txtmessage = $hasil;
    fwrite($myfile3, $txtmessage);
    echo $hasil;


    fclose($myfile1);
    fclose($myfile2);
    fclose($myfile3);

?>
