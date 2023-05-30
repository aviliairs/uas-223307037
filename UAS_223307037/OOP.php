<?php
class database{
    var $host = "localhost";
    var $username = "root";
    var $pass = "";
    var $db = "db_uas";
    var $koneksi = "";
    function __construct(){
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->pass, $this->db);
        if(!$this->koneksi){
            echo "Koneksi database gagal";
        }
    }
    function tampilData(){
        $statement = $this->koneksi->prepare("SELECT * FROM t_siswa ORDER BY no ASC");
        $statement->execute();
        $hasil = $statement->get_result();
        while($baris = mysqli_fetch_array($hasil)){
            $tampilan[] = $baris;
        }
    return $tampilan;
    }
    function cariData($cari){
      $perintah = $this->koneksi->prepare("SELECT * FROM t_siswa WHERE nama='$cari'");
      $perintah->execute();
      $hasil = $perintah->get_result();
    return $hasil;  
    }
    function editData($data){
        $statement = $this->koneksi->prepare("SELECT * FROM t_siswa WHERE nomor='$data'");
        $statement->execute();
        $hasil=$statement->get_result();
        return $hasil;
    }
}
?>