<?php 
	include "koneksi.php";
	$id = $_GET ['id'];
	// $id_word = $_POST ['id_word'];
	//$badword = $_POST ['badword'];
	$query = "DELETE FROM kategori WHERE id_kategori = $id";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:kategori.php');
		} else {
    echo "Error";
		}
 ?>