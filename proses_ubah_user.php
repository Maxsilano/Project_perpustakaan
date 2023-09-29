<?php
if($_POST){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $level = $_POST['level'];
    
    if(empty($nama)){
        echo "<script>alert('nama user tidak boleh kosong');location.href='ubah_user.php';</script>";
 
    } else {
        include "koneksi.php";
        if(empty($username)){
            $update=mysqli_query($conn,"update user set nama='".$nama."', password='".$password."', level='".$level."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update user');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update user');location.href='ubah_user.php?id=".$id."';</script>";
            }
        } else {
            $update=mysqli_query($conn,"update user set nama='".$nama."',username='".$username."', password='".$password."', level='".$level."' where id = '".$id."'") or die(mysqli_error($conn));
            if($update){
                echo "<script>alert('Sukses update member');location.href='tampil_user.php';</script>";
            } else {
                echo "<script>alert('Gagal update member');location.href='ubah_user.php?id".$id."';</script>";
            }
        }
        
    } 
}