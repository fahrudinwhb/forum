<?php 
	session_start();
	include 'koneksi.php';
	$send = $_POST ['send'];
	$pesan = $_POST ['pesan'];
	$id = $_POST ['id'];
	$id_pengirim = $_SESSION ['id'];
	$tanggal = date('Y-m-d H:i:s');
	$query = "INSERT INTO pesan (id_penerima, id_pengirim, pesan, tanggal) VALUES ($id, $id_pengirim, '$pesan', '$tanggal')";
 	// mysql_query($query);
 	if (mysql_query($query) === TRUE) {
    header('location:outbox.php');
		} else {
    echo "Error";
		}
 ?>