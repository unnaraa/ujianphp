<?php

include 'koneksi.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Bimbel</title>
</head>
<body>
    <h1 style="text-align: center; color: brown; font-weight: 600; text-shadow: 2px 2px 5px black; ">Data Penerimaan</h1>

    <a href="form.php">Tambah Data Peserta Bimbel</a>
    <table border="1">
        <tr style="background-color: aquamarine; color: black; font-weight: 700; font-family: Verdana, Geneva, Tahoma, sans-serif;">
            <th width="5%">No.</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Telp</th>
            <th>Alamat</th>
            <th>Tanggal Lahir</th>
            <th>Action</th>
        </tr>

      <?php
      $data = mysqli_query($koneksi, 'SELECT * FROM user');
      while ($bimbel = mysqli_fetch_array($data)) {
        ?>
    <tr>
        <td> <?php print $bimbel['id']?> </td>
        <td> <?php print $bimbel['nama']?> </td>
        <td> <?php print $bimbel['email']?> </td>
        <td> <?php print $bimbel['telp']?> </td>
        <td> <?php print $bimbel['alamat']?> </td>
        <td> <?php print $bimbel['tanggal_lahir']?> </td>
        <td>
            <a href="formEdit.php?id=<?php print $bimbel['id']?>">Edit</a>
            <a href="hapus.php?id=<?php print $bimbel['id']?>" onclick="return confirm('YAKIN MAU HAPUS DATA?')">Hapus</a>    
        </td>
    </tr>
    <?php
    }?>
    </table>
</body>
</html>