<html>
<head>
	<title></title>
        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="Style - backdrop - dua.css" type="text/css">
	<style type="text/css">
	table{
			border-spacing: 10px;
		}
		td {
		padding: 10px;
		width: auto;
		height: auto;
		}
	</style>
</head>
<body>
<div class="nav-bar">
            <div class="container">
                <div class="title-bar-left">
                <a href="login.php">
                    <img src="logo.png" class="logo">
                  </a>
                    <h3>AFEA</h3>
                    <p>1st Forum Portal<p>
                </div>
            </div>
</div>
	<form method="POST" action="proses_registrasi.php" enctype="multipart/form-data" class="besar">
		<table class="besar">

                <div class="besar garis">
                <h1 class="garis">Kelola Data Member Anda</h1>
                </div>
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
			</tr>
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
	        <div class="footer">
            <div class="container">
            <img src="logo.png">
            <h3>AFEA</h3>
                <p>Dikelola oleh:-------- Fahrudin Wahabi --------- G.Tulus Hari Ramadhan -------- Afif Nandya S -------- Ednan Fajri -------- &copy; 2015</p>
            </div>
        </div>
    </body>
</html>
// <?php 
// 	include "koneksi.php";
// 	$id = $_POST ['id'];
// 	$nama = $_POST ['nama'];
// 	$alamat = $_POST ['alamat'];
// 	$email = $_POST ['email'];
// 	$bio = $_POST ['bio'];
// 	$cp = $_POST ['cp'];
// 	$status = $_POST ['status'];
// 	$password = $_POST ['password'];
// 	$query = "UPDATE member SET nama = '$nama', alamat = '$alamat', email = '$email',bio = '$bio', cp = '$cp', status = '$status', password = '$password' WHERE id_member = '$id'";

// 	mysql_query($query);
// 	if (mysql_query($query) === TRUE) {
//     header('location:.php');
// 		} else {
//     echo "Error";
// 		}
//  ?>