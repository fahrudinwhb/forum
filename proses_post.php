<?php 
session_start();
	include "koneksi.php";
	$id_member = $_SESSION['id'];
	$judul = $_POST ['judul'];
	$id = $_POST ['id'];
	$isi = $_POST ['isi'];
	$waktu = date('Y-m-d H:i:s');
	$query = "INSERT INTO post (id_kategori, judul, isi, waktu, id_member) VALUES ($id, '$judul', '$isi', '$waktu', $id_member)";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:post.php');
		} else {
    echo "Error";
		}
 ?>