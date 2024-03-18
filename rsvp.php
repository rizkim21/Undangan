<?php
$koneksi = mysqli_connect("localhost", "root", "", "andi&ina");

if (isset($_POST['submit'])) {

    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];
    $status = $_POST['status'];
    $sql = "INSERT INTO rsvp VALUES('$nama', '$pesan', '$status')";

    $simpan = mysqli_query($koneksi, $sql);

    if ($simpan > 0) {
        echo "<script>
        alert('Konfirmasi Berhasil');
        document.location.href='index.php';
        </script>";
    } else {
        echo "<script>
        alert('Konfirmasi Belum Berhasil');
        document.location.href='index.php';
        </script>";
    }
}
