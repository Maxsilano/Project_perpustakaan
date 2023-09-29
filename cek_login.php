<?php 
	session_start();
	include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password'])	;

	if(empty($username)){
		echo "<script>alert('Username tidak boleh kosong');location.href='formlogin.php';</script>";
	} elseif(empty($password)){
		echo "<script>alert('Password tidak boleh kosong');location.href='formlogin.php';</script>";
	} 
	$login = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username' AND password = '$password'");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if($data['level']=="admin"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "admin";
			header("location:halaman_admin.php");
		}else if($data['level']=="siswa"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "siswa";
			header("location:halaman_siswa.php");
		}else if($data['level']=="petugas"){
			$_SESSION['username'] = $username;
			$_SESSION['level'] = "petugas";
			header("location:halaman_petugas.php");
		}else{
			header("location:formlogin.php?pesan=gagal");
		}
	}else{
	    echo "<script>alert('Username dan Password tidak benar');location.href='formlogin.php';</script>";
	}
?>