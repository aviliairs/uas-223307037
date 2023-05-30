<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-success-subtle">
    <h1 class="display-6 mt-3 mb-3">Input Data Siswa</h1>
    <div class="container">
        <div class="card">
            <div class="card-body shadow-lg">
                <form action="proses_inputSiswa.php" id="form_siswa" method="post">
                    <div>
                        <label class="form-label" for="no">No :</label>
                        <input class="form-control" type="text" name="no" id="no">
                    </div>
                    <div>
                        <label class="form-label" for="nama">Nama Siswa :</label>
                        <input class="form-control" type="text" name="nama" id="nama">
                    </div>
                    <p>
                        <label class="form-label" for="ttl">TTL :</label>
                        <input class="form-control" type="text" name="ttl" id="ttl">
                    </p>
            
                    <p>
                        <label class="form-label" for="alamat">Alamat :</label>
                        <input class="form-control" type="text" name="alamat" id="alamat">
                        </p>
                    <p>
                        <label class="form-label" for="noHP">No HP :</label>
                        <input class="form-control" type="text" name="noHP" id="noHP" placeholder="contoh : 081348141999">
                        </p>
                        <p>
                            <input class="btn btn-success mt-3" type="submit" name="input" value="simpan">
                        </p>
                </form>

            </div>

        </div>

    </div>
    
</body>
</html>