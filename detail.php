<?php 
    session_start();
if (!isset($_SESSION['id'])) {
    header("location:login.php");
}
include "koneksi.php"; ?>
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
	<div class="container">
		<div class="left-content">
			<h2 class="katagoriwarna">
				Kategori
			</h2>
				<?php 
                        $query = "SELECT * FROM kategori";
                        $result = mysql_query($query); 
                        while($row = mysql_fetch_assoc($result)){
                    ?>
				    <ul>
					<a class="sembarang" href="konten.php?id=<?php echo $row['id_kategori']?>"><li><?php echo $row['nama_kategori']?></li></a>
					</ul>
                    <?php
                        }
                    ?>
					<ul>
                        
		</div>
		<div class="right-content columns eleven">
            <?php
                $id = $_SESSION['id'];
                $id_post = $_GET['id'];
                $query = "SELECT * FROM member m JOIN post p ON m.id_member = p.id_member WHERE id_post=$id_post";
                $result = mysql_query($query);
                while ($row = mysql_fetch_assoc($result)) {
            ?>
			<div class="katagoriwarnasatu" id="title "><h1><?php echo $row['judul']; ?></h1></div>
            <p>
                <center><img src="uploads/<?php echo $row ['gambar']; ?> " width="500px" height="500px"><br></center>
                <?php echo $row['isi']; ?>
            </p>
            <br><br><br><br>
            <img src="uploads/<?php echo $row ['foto']; ?> " width="100px" height="100px" id="gbr">
            <table id="profile" cellspacing="10px">
                <tr>
                    <td>
                        Nama
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $row['nama'];?>
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
                        <?php echo $row['email'];?>
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
                        <?php echo $row['bio'];?>
                    </td>
                </tr>
            </table>
            <button type="submit" id="profile"><a href="kirim_pesan.php? id=<?php echo $row ['id_member']; ?>">Kirim</a></button>
            <br><br>
                        <?php
                            }
                        ?>
                        
                    <?php 
                        $query = "SELECT * FROM post k WHERE k.id_post = $id_post";
                        $result = mysql_query($query);
                        $row = mysql_fetch_assoc($result);
                    ?>
                        <?php 
                            $query = "SELECT * FROM komentar k JOIN member m ON k.id_member = m.id_member WHERE id_post=$id_post";
                            $result = mysql_query($query);
                        ?>
                        <table id="profile" cellspacing="10px">
                            <?php 
                                while ($row2 = mysql_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row2['nama']; ?>
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <?php echo $row2['komentar']; ?>
                                </td>
                            </tr>
                            <?php }?>
                            <hr>
						<form method="POST" action="proses_komentar.php">
                            <tr>
                                <td>
                                    Komentar
                                </td>
                                <td>
                                    :
                                </td>
                                <td>
                                    <textarea name="komentar" class="eight columns"></textarea>
                                </td>
                            </tr>
                        </table>
				        <input type="hidden" name="id" value=<?php echo $row ['id_post']; ?>> <!-- harusnya gausah -->
                        <button type="submit" id="profile">Beri Komentar</button>
						</form>
			</div>
		</div>
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
