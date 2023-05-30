<?php
include "OOP.php";
$ctl =  new database();

if (isset($_GET['no'])){
    $no = $_GET['no'];

    $query = $ctl->koneksi->prepare("DELETE FROM t_siswa WHERE no='$no'");
    $query->execute();

    header("location:viewSiswa.php");
}

$ctl->koneksi->close();
?>