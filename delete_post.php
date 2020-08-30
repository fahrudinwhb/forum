<?php 
	include "koneksi.php";
	$id = $_GET ['id'];
	// $id_word = $_POST ['id_word'];
	//$badword = $_POST ['badword'];
	$query = "UPDATE post set status='DISABLE' WHERE id_post= $id";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:post.php');
		} else {
    echo "Error";
		}
 ?>