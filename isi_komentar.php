<html>
<head>
	<title></title>
</head>
<body>
	<?php 
		include 'koneksi.php';
		$id = $_GET ['id'];
		$query = "SELECT id_komentar, komentar FROM komentar WHERE id_komentar=$id";
	 	$result = mysql_query($query);
	 	$row = mysql_fetch_assoc($result);
	 ?>
	<form method="POST" action="proses_komentar.php">
		Komentar <textarea name="komentar"></textarea><br>
		<input type="hidden" name="id" value=<?php echo $row ['id_komentar']; ?>>
		<button type="submit">Submit</button>
	</form>

</body>
</html>