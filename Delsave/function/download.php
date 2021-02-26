<?php
// connect to database
$conn = mysqli_connect('localhost', 'root', '', 'dokumen');

$sql = "SELECT * FROM data";
$result = mysqli_query($conn, $sql);

$files = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Downloads files
if (isset($_GET['data_id'])) {
    $id = $_GET['data_id'];

    // fetch file to download from database
    $sql = "SELECT * FROM data WHERE data_id=$id";
    $result = mysqli_query($conn, $sql);

    $file = mysqli_fetch_assoc($result);
    $filepath = 'file/' . $file['file'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('file/' . $file['file']));
        readfile('file/' . $file['file']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE data SET downloads=$newCount WHERE data_id=$id";
        mysqli_query($conn, $updateQuery);
        exit;
    }

}

?>

