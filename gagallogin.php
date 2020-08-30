<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="login.css">

        <link rel="stylesheet" type="text/css" href="skeleton.css">
</head>
<body>
<div class="container">
<div>
	<div class="eight columns burunglogo">
		<img src="logo.jpg" class="burunglogo">

		<img src="cbox.png" class="quicksilver">
	</div>
</div>
	<div class="borderlogin">
        <form method="post" action="checklogin.php" class="tabelin">
        <table>
        	<tr>
        		<td>
					<h3>Masuk</h3>
				</td>
			</tr>
			<tr>
				<td>
            		Nama
            	</td>
            	<td>
            		:
            	</td>
            	<td>
            		<input type="text" name="username" placeholder="username">
            	</td>
            </tr>
            <tr>
            	<td>
            		Password
            	</td>
            	<td>
            		:
            	</td>
            	<td>
            		<input type="text" name="password" placeholder="password">
            	</td>
            </tr>
            <tr>
                <td></td>
                <td></td>
            	<td>GAGAL MASUK</td>
            </tr>
            <tr>
            	<td>
            		<button type="submit">Kirim!</button>
            	</td>
            </tr>
		</table>
		</form>	
		<form method="POST" action="proses_registrasi.php" enctype="multipart/form-data" class="besar">
		<table class="tabelin">
			 <tr>
				 <td>
				 	<h3>Buat akun</h3>

			 	</td>
			 </tr>
			 <hr>
			<tr>
				<td>
					Nama
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="nama">
				</td>
			</tr><br>
			<tr>
				<td>
					Alamat
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="alamat">
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
					<input type="email" name="email">
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
					<input type="text" name="bio">
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
					<input type="text" name="cp">
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
					<input type="file" name="foto">
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
					<input type="text" name="status">
				</td>
			</tr>
			<tr>
				<td>
					Password
				</td>
				<td>
					:
				</td>
				<td>
					<input type="text" name="password">
				</td>

			</tr>
			<tr>
				<td>
				<button type="submit">Kirim!</button>
				</td>
			</tr>
		</table>
		</form>
	</div>
	</div>
</body>
</html>