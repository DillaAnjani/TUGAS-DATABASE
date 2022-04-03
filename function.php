<?php

$koneksi = mysqli_connect("localhost", "root", "", "mahasiswa");

function query ($query)
{
    global $koneksi;
    $result = mysqli_query($koneksi,$query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $koneksi;
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $email = htmlspecialchars($data["email"]);

    $query = "INSERT INTO data_mhs
                VALUES
                ('','$nim','$nama','$jurusan','$email')
                ";

    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id){
    global $koneksi;
    mysqli_query($koneksi, "DELETE FROM data_mhs WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}