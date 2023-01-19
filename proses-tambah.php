<?php
include ("koneksi.php");
if (isset($_POST['kirim'])){
    $nama = $_POST ['nama'];
    $kelas = $_POST ['kelas'];
    $jurusan = $_POST ['jurusan'];
    $tahun = $_POST ['tahun'];
    $nominal = $_POST ['nominal'];

    $sql = "INSERT INTO tb_jurusan(nama_jurusan)VALUES ('$jurusan')";
    $query = mysqli_query($conn, $sql);

    $sql = "SELECT max (id_jurusan) AS jurusan FROM tb_jurusan LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $sql = "INSERT INTO tb_spp(tahun, nominal)VALUES ('$tahun', '$nominal')";
    $query = mysqli_query($conn, $sql);

    $sql = "SELECT max(id_jurusan) AS jurusan FROM tb_jurusan LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);
    $jurusan = $data['jurusan'];

    $sql = "SELECT max(id_spp) AS spp FROM tb_spp LIMIT 1";
    $query = mysqli_query($conn, $sql);

    $data = mysqli_fetch_array($query);
    $spp = $data['spp'];

    $sql = "INSERT INTO tb_siswa(nama, kelas, id_jurusan, id_spp)
    VALUES('$nama', '$kelas', '$jurusan', '$spp')";
    $query = mysqli_query($conn, $sql);

    if($query){
      echo "Selamat Anda sudah bisa";
  }else{
      echo "Maaf belum bisa";
  }
    
}
?>