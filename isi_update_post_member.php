<html>
<head>
	<title></title>
    	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="skeleton.css">
        <link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css">
</head>
<body>
	<?php 
		include 'koneksi.php';
		$id = $_GET ['id'];
		$query = "SELECT * FROM post WHERE id_post=$id";
		$result = mysql_query($query); 
		$row = mysql_fetch_assoc($result);
	?>
    <div class="nav-bar">
            <div class="container">
                <div class="title-bar-left column ten">
                    <img src="logo.png" class="logo">

                    <img src="cbox.png" class="logoin">
                </div>
            </div>
    </div> 
<div class="container tabelin">
	<table class="editin">
	<form method="POST" action="update_post_member.php">
	<tr>
		<td>
			Judul
		</td>
		<td>
			:
		</td>
		<td>
			<input type="text" name="judul" value="<?php echo $row['judul']; ?>"><br>
		</td>
	</tr>
	<tr>
		<td>
			Isi
		</td>
		<td>
			:
		</td>
		<td>
			<textarea name="isi">
                <?php echo $row['isi']; ?>
            </textarea><br>	
		</td>
	</tr>
	<tr>
		<td>
			<input type="hidden" name="id" value=<?php echo $id; ?>>
		<button type="submit">Submit</button>	
		</td>
		<td>
			
		</td>
<!--			<td><button type="submit"><a href="profile.php">batalkan</a></button></td>-->
	</tr>
		
	</form>	
	</table>
</div>
</body>
</html>