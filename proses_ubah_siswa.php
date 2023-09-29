<?php
if($_POST)
$nama=$_POST['nama'];
$username=$_POST['username'];
$nisn=$_POST['nisn'];
$nis=$_POST['nis'];
$kelas=$_POST['kelas'];
$alamat=$_POST['alamat'];
$telepon=$_POST['telepon'];
    
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
