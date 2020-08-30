<?php 
	include "koneksi.php";
	$id = $_GET ['id'];
	$query = "UPDATE post set status='DISABLE' WHERE id_post= $id";
	if (mysql_query($query) === TRUE) {
    header('location:profile.php');
		} else {
    echo "Error";
		}
 ?>