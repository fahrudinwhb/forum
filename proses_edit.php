<?php 
	session_start();
	include "koneksi.php";
	$id = $_SESSION ['id'];
	$nama = $_POST ['nama'];
	$alamat = $_POST ['alamat'];
	$email = $_POST ['email'];
	$bio = $_POST ['bio'];
	$cp = $_POST ['cp'];
		$target_path = 'uploads/';
		$target_path=$target_path.basename($_FILES ['foto']['name']);
	$foto = $_FILES ['foto']['name'];
	$status = $_POST ['status'];
	$password = md5($_POST ['password']);
	$query = "UPDATE member set nama = '$nama', alamat = '$alamat', email = '$email',bio = '$bio', cp = '$cp',  foto = '$foto', status = '$status', password = '$password' WHERE id_member = '$id'";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:profile.php');
		} else {
    echo "Error";
		}
	move_uploaded_file($_FILES ['foto']['tmp_name'], $target_path);
 ?>