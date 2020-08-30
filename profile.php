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
                    <a href="konten.php?id=<?php echo $row['id_kategori']?>"><li><?php echo $row['nama_kategori']?></li></a>
                    </ul>
                    <?php
                        }
                    ?>
                    <ul>


		</div>
		<div class="right-content columns eleven">
			<div id="title"><h1 class="katagoriwarnasatu">My Profile</h1></div>
                   
                        <?php
                            $id = $_SESSION['id'];
                            $query = "SELECT * FROM member WHERE id_member=$id";
                            $result = mysql_query($query);
                            while ($row = mysql_fetch_assoc($result)) {
                        ?>
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
                        Alamat
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $row['alamat'];?>
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
                <tr>
                    <td>
                        CP
                    </td>
                    <td>
                        :
                    </td>
                    <td>
                        <?php echo $row['cp'];?>
                    </td>
                </tr>
                <tr>
                    <td>
                        
                    </td>
                    <td>
                        
                    </td>
                    <td>
                    </td>
                </tr>
            </table>
            <button type="submit" id="gbr"><a href="edit.php">Edit</a></button>
            <?php
                            }
                        ?>
					<br><br>
                    <h1 id="myPost">My Post</h1>
                        <?php
                        // $id = $_GET['id'];
                        $query = "SELECT * FROM post k JOIN member a ON k.id_member = a.id_member WHERE k.id_member =$id AND K.status='ENABLE'";
                        $result = mysql_query($query);
                        while ($row = mysql_fetch_assoc($result)){
                    ?>
                    <div class="myPost">
                        <a href="detail.php?id=<?php echo $row['id_post']; ?>"><h2><?php echo $row['judul'] ?></h2></a>
                        <?php echo substr($row['isi'], 0, 150)."..." ?>
                        <div>
                            <a href="isi_update_post_member.php? id=<?php echo $row ['id_post']; ?>">
                                <button type="submit">Edit threat</button>
                            </a>    
                            <a href="delete_post_member.php? id=<?php echo $row ['id_post']; ?>">
                                <button type="submit">Delete threat</button>
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                    
			</div>
				<div class="pesan">
				,
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
