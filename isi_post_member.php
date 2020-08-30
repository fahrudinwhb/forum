<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="skeleton.css">
</head>
<body>

	<?php 
		$id = $_GET ['id'];
	?>
    <div class="nav-bar">
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
	<form method="POST" action="proses_post_member.php" enctype="multipart/form-data">
		<tr>
			<td>
				Judul		
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="judul"><br>	
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
				<textarea name="isi"></textarea><br>
			</td>
		</tr>
		<tr>
			<td>
				Gambar
			</td>
			<td>
				:
			</td>
			<td>
				<input type="file" name="gambar">
			</td>
		</tr>

		<tr>
			<td>	
				<input type="hidden" name="id" value=<?php echo $id; ?>>
				<button type="submit">Submit</button>
			</td>
			<td></td>
		</tr>
	</form>
	</table>
	</div>
</body>
</html>