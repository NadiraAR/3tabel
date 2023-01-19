<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>join tabel</title>
</head>
<body>
<h3> <a href=form-tambah.php>Form tambah</a></h3>   
<table border = "1">
    <tr>
        <th>Id </th>
        <th>Nama </th>
        <th>Kelas </th>
        <th>Jurusan </th>
        <th>Tahun </th>
        <th>Nominal </th>
        <th>Aksi</th>
    </tr>

<?php
include("koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM tb_siswa INNER JOIN
tb_jurusan ON tb_siswa.id_jurusan = tb_jurusan.id_jurusan INNER JOIN
tb_spp ON tb_siswa.id_spp = tb_spp.id_spp");
$no = 1;
foreach ($query as $row) :
?>

<tr>
    <td><?= $no++; ?></td>
    <td><?= $row['nama']; ?></td>
    <td><?= $row['kelas']; ?></td>
    <td><?= $row['nama_jurusan']; ?></td>
    <td><?= $row['tahun']; ?></td>
    <td><?= $row['nominal']; ?></td>
    <td><a href="edit.php?id=<?php= $row['id'];?>">Edit</a>|
    <a href="hapus.php?id=<?php=$row['id'];?>">Hapus</a></td>
</tr>


<?php endforeach; ?>
</table>
</body>
</html>