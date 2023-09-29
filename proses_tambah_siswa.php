<?php
if ($_POST) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $kelas = $_POST['kelas'];
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $password = $_POST['password'];
    $angkatan = $_POST['angkatan'];

    if (empty($nama)) {
        echo "<script>alert('Nama tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($username)) {
        echo "<script>alert('Username tidak boleh kosong');location.href='tambah_user.php';</script>";
    } elseif (empty($password)) {
        echo "<script>alert('Password tidak boleh kosong');location.href='tambah_user.php';</script>";
    }
    if (empty($level)) {
        echo "<script>alert('level harus diisi');location.href='tambah_user.php';</script>";
    } else {
        include "koneksi.php";
        $Insert = mysqli_query($conn, "insert into user(nama,username,password,level) value ('" . $nama . "','" . $username . "','" . $password . "','" . $level . "')") or die(mysqli_error($conn));

        if ($conn) {
            echo "<script>alert('Sukses menambahkan member');location.href='tampil_user.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan member');location.href='tambah_user.php';</script>";
        }
    }
}
