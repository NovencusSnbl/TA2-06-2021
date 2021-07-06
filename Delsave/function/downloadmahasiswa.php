<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ta2');
$username= $_SESSION['username'];
$result = mysqli_query($conn, "SELECT b.mahasiswa_id FROM users u INNER JOIN mahasiswa b ON u.users_id = b.users_id WHERE u.username = '$username'"); 

 
 if (mysqli_num_rows($result) === 1) {
    //cek password
    $row = mysqli_fetch_assoc($result);
    $idmahasiswa = $row['mahasiswa_id'];


$sql = "SELECT * FROM dokumen WHERE mahasiswa_id='$idmahasiswa'";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);



// Downloads files
if (isset($_GET['dokumen_id'])) {
    $id = $_GET['dokumen_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM dokumen WHERE dokumen_id=$id ";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'file/' . $file['file_mahasiswa'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('file/' . $file['file_mahasiswa']));
        readfile('file/' . $file['file_mahasiswa']);

        // // Now update downloads count
        // $newCount = $file['downloads'] + 1;
        // $updateQuery = "UPDATE data SET downloads=$newCount WHERE dokumen_id=$id";
        // mysqli_query($conn, $updateQuery);
        exit;
    }

  }
}


?>

