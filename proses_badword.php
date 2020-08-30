<?php 
	include "koneksi.php";
	$badword = $_POST ['badword'];
	$query = "INSERT INTO bad_word (kata) VALUES ('$badword')";
	// mysql_query($query);
	if (mysql_query($query) === TRUE) {
    header('location:bad_word.php');
		} else {
    echo "Error";
		}
 ?>