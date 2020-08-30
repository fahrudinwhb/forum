<?php 
session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
include "koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="skeleton.css">
    <link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css">
</head>
<body>
    <div class="nav-bar">
            <div class="container">
                <div class="title-bar-left column ten">
                    <img src="logo.png" class="logo">

                    <img src="cbox.png" class="logoin">
                </div>
            </div>
    </div> 
    <div class="cat-bar">
            <div class="container">
                <?php  
                    $id = $_SESSION['id'];
                    $query = "SELECT * FROM member WHERE id_member=$id";
                    $result = mysql_query($query); 
                    $row = mysql_fetch_assoc($result);
                ?>
                <a href="index.php" class="a-cat"><i class="fa fa-home"></i> Home</a>
                <a href="all_post.php" class="a-cat"><i class="fa fa-comments"></i> All Post</a>
                <a href="inbox.php" class="a-cat"><i class="fa fa-inbox"></i> Inbox</a>
                <a href="outbox.php" class="a-cat"><i class="fa fa-envelope-o"></i> Outbox</a>
                <form class="a-cat" method="post" action="search.php"><input type="text" name="search" placeholder="cari..." required> <button type="submit">Cari !</button></form>
                <a href="logout.php" class="a-cat kananin"><i class="fa fa-sign-out"></i> Logout</a>
                <a href="profile.php" class="a-cat kananin"><i class="fa fa-user"></i> <?php  echo $row['nama']; ?></a>
            </div>
    </div>
    <div class="container tabelin">
	    <table class="editin">
			<?php
				$id = $_SESSION['id'];
				$query = "SELECT * FROM pesan JOIN member ON id_penerima = id_member WHERE id_pengirim=$id";
				// $query = "SELECT * FROM pesan WHERE id_penerima=$id";
				$result = mysql_query($query);
				while ($row = mysql_fetch_assoc($result)) {
			?>
			<tr>
				<!-- <td><?php echo $row ['id_pesan']; ?></td>
				<td><?php echo $row ['id_penerima']; ?></td>
				<td><?php echo $row ['id_pengirim']; ?></td> -->
				<td><?php echo $row ['pesan']; ?></td>
				<td><?php echo "To ".$row ['nama']; ?></td>
                <td><?php echo $row ['tanggal']; ?></td>
			</tr>
			<?php
				}
			 ?>
		</table>
	</div>
		<div class="foot">
		 <div class="footer">
            <div class="container">
            <img src="logo.png">
            <h3>cBOX</h3>
                <p>Forum Community&copy;</p>
            </div>
        </div>
        </div>
        

	
</body>
</html>
