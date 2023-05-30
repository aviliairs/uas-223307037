<?php
include 'OOP.php';
$ctl = new database();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="style.css">
</head>
<body class="bg-success-subtle">
    <div class="container">
        <div class="row align-items-baseline">
            <div class="mt-3 col d-flex justify-content-start">
                <h1 class="display-6">TABLE SISWA</h1>
            </div>
            <div class="mb-3 col d-flex justify-content-end">
                <a href="createSiswa.php" class="btn btn-success btn-md">Input data</a>
            </div>
        </div>
        <?php 
        if(isset($_GET['cari'])){
            $cari = $_GET['cari'];
        }
        ?>
        <form action="viewSiswa.php">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Cari.." name="cari" id="cari">
                <button class="btn btn-primary btn-sm" type="submit" value="cari">Cari</button> &nbsp;
                <a href="viewSiswa.php" class="btn btn-primary btn-sm pt-2">Reset</a>
            </div>
        </form>
        <table class="table table-success table-striped mt-4">
            <tr>
                <th>No</th>
                <th>Nama Siswa</th>
                <th>TTL</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
<?php 
    if(isset($_GET['cari'])){
        $cari = $_GET['cari'];
        foreach ($ctl-> cariData($cari) as $data){
            echo "<tr>";
            echo "<td>$data[no]</td>";
            echo "<td>$data[nama]</td>";
            echo "<td>$data[ttl]</td>";
            echo "<td>$data[alamat]</td>";
            echo "<td>$data[noHP]</td>";
            echo '<td>
            <a class="btn btn-warning btn-sm" href="editSiswa.php?no='.$data['no'].'">Edit</a>
            <a class="btn btn-danger btn-sm" href="hapusSiswa.php?no='.$data['no'].'"onclick=" return confirm(\'anda 
            yakin ingin hapus data ini?\')">Hapus</a>
            </td>';
            echo "</tr>";
        }
    } else {
        foreach ($ctl->tampilData() as $data) {
            echo "<tr>";
            echo "<td>$data[no]</td>";
            echo "<td>$data[nama]</td>";
            echo "<td>$data[ttl]</td>";
            echo "<td>$data[alamat]</td>";
            echo "<td>$data[noHP]</td>";
            echo '<td>
            <a class="btn btn-warning btn-sm" href="editSiswa.php?no='.$data['no'].'">Edit</a>
            <a class="btn btn-danger btn-sm" href="hapusSiswa.php?no='.$data['no'].'"onclick=" return confirm(\'anda 
            yakin ingin hapus data ini?\')">Hapus</a>
            </td>';
            echo "</tr>";
        }
    }
?>
        </table>
    </div>
    
</body>
</html>