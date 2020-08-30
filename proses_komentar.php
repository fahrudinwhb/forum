<?php 
session_start();
	include "koneksi.php";
	$id_member = $_SESSION['id'];
	$id_post = $_POST['id'];
	$komentar = $_POST ['komentar'];
	$query = "SELECT * FROM bad_word";
	$result = mysql_query($query);
	while ($row = mysql_fetch_assoc($result)) {
		$kata = strtolower($row['kata']);
		$komentar = strtolower($komentar);
		$komentar = str_replace($kata, "***", $komentar);
		$komentar = str_replace(":)", "<img src=\"emoticon/smile.gif\">", $komentar);
		$komentar = str_replace("-_-", "<img src=\"emoticon/flat.gif\">", $komentar);
		$komentar = str_replace(":*", "<img src=\"emoticon/love.gif\">", $komentar);
		$komentar = str_replace(":D", "<img src=\"emoticon/laugh.gif\">", $komentar);
		$komentar = str_replace(":'(", "<img src=\"emoticon/cry.gif\">", $komentar);
		$komentar = str_replace(":p", "<img src=\"emoticon/tongue.gif\">", $komentar);
	}

	$tanggal = date('Y-m-d H:i:s');
	$query = "INSERT INTO komentar (komentar, tanggal, id_member, id_post) VALUES ('$komentar', '$tanggal', $id_member, $id_post)";
	mysql_query($query) or die (mysql_error());
	header("location:detail.php?id=$id_post");
	// if (mysql_query($query) === TRUE) {
 //    header('location:komentar.php');
	// 	} else {
 //    echo "Error";
	// 	}
 ?>