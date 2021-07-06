<?php
// $row = $result->fetch(PDO::FETCH_ASSOC); // read from database result
// // $enc_name = base64_decode($row['Name']);
// // $enc_name = hex2bin($row['Name']);
// $enc_name = $row['Name'];
// // $iv = base64_decode($row['IV']);
// // $iv = hex2bin($row['IV']);
// $iv = $row['IV'];

// $name = pkcs7_unpad(openssl_decrypt(
//     $enc_name,
//     'AES-256-CBC',
//     $encryption_key,
//     0,
//     $iv
// ));

// echo $name;
	function generateRandomString($length = 25) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}$myRandomString = generateRandomString(12);

    $data="OG+NwnLi5MyDnVS+";

    echo "Data sebelum dienkripsi = $data <br/><br/>";

    $method="AES-256-CTR";

    $key ="Sipinter123@#@";

    $option=0;

    //asal saja hehehe

    //namun pajangnya sesuiai method cipher

    //cek dengan openssl_cipher_iv_length($method);

    $iv="1251632135716362";

    $dataTerenkripsi=openssl_encrypt($data, $method, $key, $option, $iv);

    echo "Data setelah dienkripsi = $dataTerenkripsi<br/><br/>";

 

    $dataDecrypt=openssl_decrypt($data, $method, $key, $option, $iv);

    echo "Data terenkripsi ketika di decrypt = $dataDecrypt";

 


?>
?>