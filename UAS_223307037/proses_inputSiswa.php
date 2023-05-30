<?php
include "koneksi.php";

if (isset($_POST['input'])) {
    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['noHP'];

    $query = $conn->prepare("INSERT INTO t_siswa VALUES ($no, '$nama', '$ttl', '$alamat', '$nohp')");
    $query->execute();

    header("location:viewSiswa.php");

    return $query;
}
$conn->close();
?>