<?php 
session_start();
	include "koneksi.php";
	$id_member = $_SESSION['id'];
	$judul = $_POST ['judul'];
	$id = $_POST ['id'];
	$isi = $_POST ['isi'];
	$waktu = date('Y-m-d H:i:s');
		$target_path = 'uploads/';
		$target_path=$target_path.basename($_FILES ['gambar']['name']);
	$gambar = $_FILES ['gambar']['name'];
	$query = "INSERT INTO post (id_kategori, judul, isi, waktu, id_member, gambar) VALUES ($id, '$judul', '$isi', '$waktu', $id_member, '$gambar')";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:index.php');
		} else {
    echo "Error";
		}
	move_uploaded_file($_FILES ['gambar']['tmp_name'], $target_path);
 ?>