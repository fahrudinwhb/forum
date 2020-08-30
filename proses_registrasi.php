<?php 
	include "koneksi.php";
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$email = $_POST ['email'];
	$bio = $_POST ['bio'];
	$cp = $_POST ['cp'];
		$target_path = 'uploads/';
		$target_path=$target_path.basename($_FILES ['foto']['name']);
	$foto = $_FILES ['foto']['name'];
	$password = md5($_POST ['password']);
	$query = "INSERT INTO member (nama, alamat, email, bio, cp, foto, password) VALUES ('$nama', '$alamat', '$email', '$bio', '$cp', '$foto', '$password')";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:login.php');
		} else {
    echo "Error";
		}
	move_uploaded_file($_FILES ['foto']['tmp_name'], $target_path);
 ?>