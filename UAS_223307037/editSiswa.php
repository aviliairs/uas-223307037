<?php
include 'OOP.php';

$ctl = new database();

if (isset($_GET['no'])){
    $no = ($_GET['no']);

    $query = $ctl->koneksi->prepare("SELECT * FROM t_siswa WHERE no = '$no'");
    $query->execute();
    $result = $query->get_result();

    $data = mysqli_fetch_assoc($result);
    $no = $data["no"];
    $nama = $data["nama"];
    $ttl = $data["ttl"];
    $alamat = $data["alamat"];
    $noHP = $data["noHP"];
} else {
    header ("location:viewSiswa.php");
}
?>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-success-subtle">
    <h1 class="display-6 mt-3 mb-3">Edit Data Siswa</h1>
    <div class="container">
        <div class="card">
            <div class="card-body shadow-lg">
                <form action="proses_editSiswa.php" id="form_siswa" method="post">
                    <div>
                        <label class="form-label" for="no">No :</label>
                        <input class="form-control" type="text" name="no" id="no" value="<?php echo $no; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="nama">Nama :</label>
                        <input class="form-control" type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="ttl">TTL :</label>
                        <input class="form-control" type="text" name="ttl" id="ttl" value="<?php echo $ttl; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="alamat">Alamat :</label>
                        <input class="form-control" type="text" name="alamat" id="alamat" value="<?php echo $alamat; ?>">
                    </div>
                    <div>
                        <label class="form-label" for="noHP">No HP :</label>
                        <input class="form-control" type="text" name="noHP" id="noHP" value="<?php echo $noHP; ?>">
                    </div>
                    <p>
                        <input type="submit" class="btn btn-success mt-3" name="edit" value="Update Data">
                    </p>
                </form>


            </div>
        </div>
    </div>
</body>