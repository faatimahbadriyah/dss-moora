<?php

include("../koneksi.php");

if(isset($_POST['submit'])){

    $kode = $_POST['kode'];
    $kriteria = $_POST['kriteria'];
    $jenis = $_POST['jenis'];

    $sql = "INSERT INTO tb_kriteria (kode, kriteria, jenis) VALUE ('$kode', '$kriteria', '$jenis')";
    $query = mysqli_query($koneksi, $sql);
    if( $query ) {
        header('Location: ../halaman_petugas.php?page=master_kriteria');
    } else {
        header('Location: ../halaman_petugas.php?page=master_kriteria');
    }
} else {
    die("Akses dilarang...");
}

?>