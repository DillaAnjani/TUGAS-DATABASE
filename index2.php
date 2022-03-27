<?php

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

$result = mysqli_query($koneksi,"SELECT * FROM data_mhs");

/* while ($mhs = mysqli_fetch_row($result)) {
    var_dump($mhs);
}
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman</title>
</head>

<body>
    <h1>DAFTAR MAHASISWA</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Email</th>
        </tr>

        <?php $i = 1; ?>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?=$i ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td>
                <img src="img/<?= $row['gambar'] ?>" width="50">
            </td>
            <td><?= $row['nim'] ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['jurusan'] ?></td>
            <td><?= $row['email'] ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>

</body>

</html>