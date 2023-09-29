<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($conn, "DELETE FROM user WHERE id='$id'");

if($query){
    echo"<script>alert('Sukses Menghapus User');location.href='tampil_user.php';</script>";
}else{
    echo"<script>alert('Gagal Menghapus User');location.href='tampil_user.php';</script>";
}
?>
