<?php
        
    $time_start = microtime(true);//menghitung waktu awal eksekusi
    $filename1 = "d";
    $filename2 = "n";
    $filename3 = "messagedigest";

    $myfile1 = fopen($filename1.".txt", "r") or die("Unable to open file!");
    $myfile2 = fopen($filename2.".txt", "r") or die("Unable to open file!");
    $myfile3 = fopen($filename3.".txt", "r") or die("Unable to open file!");


    $n=fread($myfile2,filesize($filename2.".txt"));
    $d=fread($myfile1,filesize($filename1.".txt"));
    $messagedigest= fread($myfile3,filesize($filename3.".txt"));

    
    $hasil="";
    //pesan enkripsi dipecah menjadi array dengan batasan "."
    $teks=explode(".",$messagedigest);

    foreach($teks as $nilai){
        //rumus enkripsi <pesan>=<enkripsi>^<d>mod<n>
        $hasil.=chr(gmp_strval(gmp_mod(gmp_pow($nilai,$d),$n)));
    }
    $time_end = microtime(true); //menghitung waktu akhir eksekusi dekripsi
    $time = $time_end - $time_start; //total waktu untuk dekripsi

    echo $hasil;
    fclose($myfile1);
    fclose($myfile2);
    fclose($myfile3);
?>
