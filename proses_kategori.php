<?php 
	include "koneksi.php";
	$nama_kategori = $_POST ['nama_kategori'];
	$deskripsi = $_POST ['deskripsi'];
	$query = "INSERT INTO kategori (nama_kategori, deskripsi) VALUES ('$nama_kategori', '$deskripsi')";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:kategori.php');
		} else {
    echo "Error";
		}
 ?>