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
                <h1>Kelola Data Badword Anda</h1>
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
			<td>id_word</td>
			<td>kata</td>
			<td>action</td>
			</tr>
		<?php 
			include 'koneksi.php';
			$query = "SELECT * FROM bad_word WHERE status='ENABLE'";
			$result = mysql_query($query);
			while ($row = mysql_fetch_assoc($result)) {
		?>
		<tr class="kecilin">
			<td><?php echo $row ['id_word']; ?></td>
			<td><?php echo $row ['kata']; ?></td>
			<td><a href="delete_badword.php? id=<?php echo $row ['id_word']; ?>"><button type="submit"><h3>Delete</h3></button></a>
			</a>
		<?php
			}
		 ?>
	</table>
	<a class="backTOPI" href="isi_bad_word.php? id=<?php echo $row ['id_word']; ?>">
				<button type="submit"><h3>Insert</h3></button>
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