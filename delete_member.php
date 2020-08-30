<?php 
	include "koneksi.php";
	$id = $_GET ['id'];
	// $id_word = $_POST ['id_word'];
	//$badword = $_POST ['badword'];
	$query = "UPDATE member set status='DISABLE' WHERE id_member= $id";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:member.php');
		} else {
    echo "Error";
		}
 ?>