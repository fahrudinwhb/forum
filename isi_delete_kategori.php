
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
		include 'koneksi.php';
		// $id = $_GET ['id'];
		// $query = "SELECT id_member, nama FROM bad_word WHERE id_word=$id";
	 // 	$result = mysql_query($query);
	 // 	$row = mysql_fetch_assoc($result);
	 ?>
	 <div class="container">
	<form method="GET" action="delete_post.php">
	<table class="tabelin">
	<tr>
		<td>
			Pilih id
		</td>
		<td>
			:
		</td>
		<td>
			<input name="id" placeholder="masukkan id"></input><br>	
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
            <h3>AFEA</h3>
                <p>Dikelola oleh:-------- Fahrudin Wahabi --------- G.Tulus Hari Ramadhan -------- Afif Nandya S -------- Ednan Fajri -------- &copy; 2015</p>
            </div>
    </div>
</body>
</html>