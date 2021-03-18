<?php
$filename1 = "publickey";
$filename2 = "privatekey";
$filename3 = "n";

$myfile1 = fopen($filename1.".txt", "r") or die("Unable to open file!");
echo fread($myfile1,filesize($filename1.".txt"));

$myfile2 = fopen($filename2.".txt", "r") or die("Unable to open file!");
echo fread($myfile2,filesize($filename2.".txt"));

$myfile3 = fopen($filename3.".txt", "r") or die("Unable to open file!");
echo fread($myfile3,filesize($filename3.".txt"));

fclose($myfile1);
fclose($myfile2);
fclose($myfile3);
?>