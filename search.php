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
<link rel="stylesheet" type="text/css" href="font-awesome-4.3.0/css/font-awesome.css">
        <link rel="stylesheet" type="text/css" href="skeleton.css">
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
                    <a href="konten.php?id=<?php echo $row['id_kategori']?>"><li><?php echo $row['nama_kategori']?></li></a>
                    </ul>
                    <?php
                        }
                    ?>
                    <ul>


        </div>
        <div class="right-content columns eleven">
            <h1 class="katagoriwarnasatu">Hasil Pencarian</h1>
            <?php  
        $search = $_POST['search'];
        $query = "SELECT * FROM post WHERE judul LIKE '%$search%' ";
        $result = mysql_query($query);
        while ($row = mysql_fetch_assoc($result)) {
            $a = $row['judul'];
            $id = $row['id_post'];
            echo "<h2><a href='detail.php?id=";
            echo "$id'>".$a."</a></h2>"."<br>";
        }

    ?>
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