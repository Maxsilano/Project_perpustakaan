<?php
$conn = mysqli_connect("localhost","root","","sekolah");

if($conn){
    echo "koneksi berhasil";
}else{
    echo "koneksi gagal";
}
?>