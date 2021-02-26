<?php include 'function/download.php';?>
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
    
    <th></th>
    <th>Filename</th>
    <th>Action</th>
</thead>
<tbody>
  <?php foreach ($files as $file): ?>
    <tr>
      <td><?php echo $file['data_id']; ?></td>
      <td><img src="file/<?php echo $file["file"] ?>" style="width:120px"></td>
      <td><?php echo $file['file']; ?></td>
      <td><a href="downloadtest.php?data_id=<?php echo $file['data_id'] ?>">Download</a></td>
    </tr>
  <?php endforeach;?>

</tbody>
</table>

</body>
</html>