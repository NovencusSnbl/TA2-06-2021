<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'ta2');

$sql = "SELECT * FROM dokumen";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['dokumen_id'])) {
    $id = $_GET['dokumen_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM dokumen WHERE dokumen_id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'file/' . $file['gambar'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('file/' . $file['gambar']));
        readfile('file/' . $file['gambar']);

        
        exit;
    }

}

?>

