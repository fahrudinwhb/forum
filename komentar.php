<html>
<head>
	<title></title>

        <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="Style - backdrop.css" type="text/css">
	<style type="text/css">
		td {
		padding: 10px;
		width: auto;
		height: auto;
		}
	</style>
<?php 
    session_start();
if (!isset($_SESSION['id'])) {
    header("location:login_admin.php");
}
include 'koneksi.php';
 ?>
</head>
<body>
<div class="nav-bar">
            <div class="container">
                <div class="title-bar-left">
                    <img src="logo.png" class="logo">
                    <h3>AFEA</h3>
                    <p>1st Forum Portal<p>
                </div>
                <div class="title-bar-right">
                <h1>Kelola Data Komentar Anda</h1>
                </div>
            </div>
</div>
	<table border="1px" class="besar">
		<tr class="besarin">
			<td>tanggal</td>
			<td>id_komentar</td>
			<td>id_member</td>
			<td>komentar</td>
			<td>id_post</td>
			<td>action</td>
			</tr>
		<?php 
			include 'koneksi.php';
			$query = "SELECT * FROM komentar";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $row ['tanggal']; ?></td>
			<td><?php echo $row ['id_komentar']; ?></td>
			<td><?php echo $row ['id_member']; ?></td>
			<td><?php echo $row ['komentar']; ?></td>
			<td><?php echo $row ['id_post']; ?></td>
			<td><a href="isi_komentar.php? id=<?php echo $row ['id_komentar']; ?>">
			<button type="submit"><h3>Kirim</h3></button>
			</a></td>
		</tr>
		<?php
			}
		 ?>
	</table><!-- 
	<a class="backTOP" href="update_registrasi_member.php? id=<?php echo $row ['id_member']; ?>">
				<button type="submit"><h3>Update</h3></button>
	</a>
	<a class="backTOPI" href="isi_delete_member.php? id=<?php echo $row ['id_member']; ?>">
				<button type="submit"><h3> Delete </h3></button>
	</a>
 -->
        <div class="footer">
            <div class="container">
            <img src="logo.png">
            <h3>AFEA</h3>
                <p>Dikelola oleh:-------- Fahrudin Wahabi --------- G.Tulus Hari Ramadhan -------- Afif Nandya S -------- Ednan Fajri -------- &copy; 2015</p>
            </div>
        </div>
    </body>
</html>