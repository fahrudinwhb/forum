<?php 
	include "koneksi.php";
	$id = $_POST ['id'];
	$judul = $_POST ['judul'];
	$isi = $_POST ['isi'];
	$query = "UPDATE post SET judul = '$judul', isi = '$isi' WHERE id_post = '$id'";

//	mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:profile.php');
		} else {
    echo "Error";
		}
	move_uploaded_file($_FILES ['foto']['tmp_name'], $target_path);
 ?>