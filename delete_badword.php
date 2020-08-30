<?php 
	include "koneksi.php";
	$id = $_GET ['id'];
	// $id_word = $_POST ['id_word'];
	//$badword = $_POST ['badword'];
	$query = "UPDATE bad_word set status='DISABLE' WHERE id_word= $id";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:bad_word.php');
		} else {
    echo "Error";
		}
 ?>