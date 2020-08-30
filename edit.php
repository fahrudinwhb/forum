
	<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="skeleton.css">
</head>
<body>
	<?php 	
		session_start(); 
		include "koneksi.php";
		$id = $_SESSION['id'];
		$query = "SELECT * FROM member WHERE id_member=$id";
		$result = mysql_query($query); 
		$row = mysql_fetch_assoc($result);
	?>
	<div class="nav-bar">
            <div class="container">
                <div class="title-bar-left">
                    <img src="logo.png" class="logo">
                        <p class="quicksilver">quicksilver</p>
                </div>
                
            </div>
    </div>
    <div class="container tabelin">
    <table class="editin">
      <form action="proses_edit.php" method="POST" enctype="multipart/form-data">
      <tr>
      	<td>
      		Nama	
      	</td>
      	<td>
      		:
      	</td>
      	<td>
      		<input type="text" name="nama" value="<?php echo $row['nama']; ?>"	><br>	
      	</td>
      </tr>
		 <tr>
		 	<td>
				Alamat 		
		 	</td>
		 	<td>
		 		:
		 	</td>
		 	<td>
				<input type="text" name="alamat" value="<?php echo $row ['alamat']; ?>"><br> 		
		 	</td>
		 </tr>
		<tr>
			<td>
				Email 
			</td>
			<td>
				:
			</td>
			<td>
				<input type="email" name="email" value="<?php echo $row ['email']; ?>"><br>
			</td>
		</tr>
		<tr>
			<td>
				CP
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="cp" value="<?php echo $row ['cp']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				Foto
			</td>
			<td>
				:
			</td>
			<td>
				<input type="file" name="foto" value="<?php echo $row ['foto']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				Bio 
			</td>
			<td>
				:
			</td>
			<td>
				<input type="text" name="bio" value="<?php echo $row ['bio']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				Status
			</td>
			<td>
				:
			</td>
			<td>
				 <input type="text" name="status" value="<?php echo $row ['status']; ?>">
			</td>
		</tr>
		<tr>
			<td>
				<button type="submit">Submit</button>
			</td>
			<td><button type="submit"><a href="index.php">batalkan</a></button></td>
		</tr>
	</form>
	</table>

	</div>	
</body>
</html>
