<?php
$privatkey = "publickey";
$publickey = "privatekey";
$n = "n";

$myfile1 = fopen($privatkey.".txt", "w") or die("Unable to open file!");
$myfile2 = fopen($publickey.".txt", "w") or die("Unable to open file!");
$myfile3 = fopen($n.".txt", "w") or die("Unable to open file!");

$txt1 = "ssssssssssssss\n";
$txt2 = "nnnnnnnnnnnnnn\n";
$txt3 = "wwwwwwwwwwwwww\n";


fwrite($myfile1, $txt1);
fwrite($myfile2, $txt2);
fwrite($myfile3, $txt3);				

fclose($myfile1);
fclose($myfile2);
fclose($myfile3);
?>