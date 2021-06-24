<?php 
session_start();
include 'function/downloadmahasiswa.php';?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="style.css">
  <title>Download files</title>
</head>
<body>

<table>
<thead>
    <th>ID</th>
    <th>Jenis Dokumen</th>
    <th>Filename</th>

</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['dokumen_id']; ?></td>
      <td><?php 
      if( $file['jenis_dokumen'] ==1){
          echo "Ijazah";
      }
      else
      {
        echo "Transkrip Nilai";
      }

      ?></td>
      <td><a href="downloadmahasiswa.php?dokumen_id=<?php echo $file['dokumen_id'] ?>"><?php   echo $file['mahasiswa_id']; ?>.pdf</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>