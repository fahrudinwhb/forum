<html>
<head>
	<title></title>
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="Style - backdrop.css" type="text/css">
</head>
<body>
<div class="nav-bar">
            <div class="container">
                <div class="title-bar-left">
                    <img src="logo.png" class="logo">
                    <h3>CBOX</h3>
                    <p>1st Forum Portal<p>
                </div>
                <div class="title-bar-right">
                <h1>Kelola Data Post Anda</h1>
                </div>
            </div>
</div>
	<?php 
		$id = $_GET ['id'];
	?>
	<div class="container">
	<form method="POST" action="proses_post.php">
	<table class="tabelin">
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
			<input type="hidden" name="id" value=<?php echo $id; ?>>	
		</td>
	</tr>
	<tr>
		<td>
			<button type="submit">Submit</button>
		</td>
	</tr>		
	</form>
	</table>
	</div>
	<div class="footer">
            <div class="container">
            <img src="logo.png">
            <h3>cBOX</h3>
                <p>Dikelola oleh:-------- Fahrudin Wahabi --------- G.Tulus Hari Ramadhan -------- Afif Nandya S -------- Ednan Fajri -------- &copy; 2015</p>
            </div>
    </div>
</body>
</html>