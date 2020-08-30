<?php 
    session_start();
if (!isset($_SESSION['id'])) {
    header("location:login_admin.php");
}
include 'koneksi.php';
 ?>
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
                <h1>Kelola Data Member Anda</h1>
                </div>
            </div>
</div>
<div class="adminberisi">
<div class="">
                <?php  
                    $id = $_SESSION['id'];
                    $query = "SELECT * FROM admin WHERE id_admin=$id";
                    $result = mysql_query($query); 
                    $row = mysql_fetch_assoc($result);
                ?>
<form class="adminrata" action="post.php">	
	<button type="submit">Post</button>
</form>

<form class="adminrata" action="member.php">
	<button type="submit">Member</button>
</form>

<form class="adminrata" action="kategori.php">
	<button type="submit">Kategori</button>
</form>

<form class="adminrata" action="bad_word.php">
	<button type="submit">badword</button>
</form>

<form class="adminrata" action="member_pesan.php">
	<button type="submit">Kirim Pesan</button>
</form>
<form class="adminrata" action="halamanadmin.php">
    <button type="submit"><?php  echo $row['nama']; ?></button>
</form>
<form class="adminrata" action="logout_admin.php">
    <button type="submit">Logout</button>
</form>
</div>
</div>
	<table border="1px" class="besar">
		<tr class="besarin">
			<td>id_member</td>
			<td>nama</td>
			<td>alamat</td>
			<td>email</td>
			<td>bio</td>
			<td>cp</td>
			<td>foto</td>
			<td>password</td>
		</tr>

		<?php 
			include 'koneksi.php';
			$query = "SELECT * FROM member WHERE status='ENABLE'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
		?>
		<tr class="kecilin">
			<td><?php echo $row ['id_member']; ?></td>
			<td><?php echo $row ['nama']; ?></td>
			<td><?php echo $row ['alamat']; ?></td>
			<td><?php echo $row ['email']; ?></td>
			<td><?php echo $row ['bio']; ?></td>
			<td><?php echo $row ['cp']; ?></td>
			<td><img class="adem" src="uploads/<?php echo $row ['foto']; ?>"></td>
			<td><?php echo $row ['password']; ?></td>
		</tr>
		<?php
			}
		?>
	</table>
	<a class="backTOP" href="update_registrasi_member.php? id=<?php echo $row ['id_member']; ?>">
				<button type="submit"><h3>Update</h3></button>
	</a>
	<a class="backTOPI" href="isi_delete_member.php? id=<?php echo $row ['id_member']; ?>">
				<button type="submit"><h3> Delete </h3></button>
	</a>

        <div class="footer">
            <div class="container">
            <img src="logo.png">
            <h3>cBOX</h3>
                <p>Dikelola oleh:-------- Fahrudin Wahabi --------- G.Tulus Hari Ramadhan -------- Afif Nandya S -------- Ednan Fajri -------- &copy; 2015</p>
            </div>
        </div>
    </body>
</html>