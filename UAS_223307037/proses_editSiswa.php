<?php

if (isset($_POST['edit'])) {
include "OOP.php";

$ctl = new database();


    $no = $_POST['no'];
    $nama = $_POST['nama'];
    $ttl = $_POST['ttl'];
    $alamat = $_POST['alamat'];
    $nohp = $_POST['noHP'];

    $query = $ctl->koneksi->prepare("UPDATE t_siswa set no = '$no', nama = '$nama', ttl = '$ttl', alamat = '$alamat', noHP = '$noHP' WHERE no ='$no'");
    $query->execute();

    header("location:viewSiswa.php");

    return $query;
}
$ctl->Koneksi->close();
?>