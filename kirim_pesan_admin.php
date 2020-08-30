<html>
<head>
	<title></title>
<!--    	<link rel="stylesheet" type="text/css" href="style.css">-->
    <link rel="stylesheet" href="Style - backdrop.css" type="text/css">
        <link rel="stylesheet" type="text/css" href="skeleton.css">
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
	<?php 
		include 'koneksi.php';
		$id = $_GET ['id'];
		$query = "SELECT id_member, nama FROM member WHERE id_member=$id";
	 	$result = mysql_query($query);
	 	$row = mysql_fetch_assoc($result);
	 ?>

<div class="container tabelin">
    <form method="POST" action="olahpesan.php">
	<table class="editin">
        <tr>
            <td>
              Send to 
            </td>
            <td>
              :
            </td>
            <td>
                <input type="text" name="send" value=<?php echo $row ['nama']; ?>>
            </td>
        </tr>
        <tr>
            <td>
                Isi Pesan
            </td>
            <td>
                :
            </td>
            <td>
                <textarea type="text" name="pesan"></textarea>	
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Submit</button>
                <input type="hidden" name="id" value=<?php echo $row ['id_member']; ?>>
            </td>
            <td>
            </td>
		</tr>		
    </table>
	</form>
    </div>
            <div class="footer">
            <div class="container">
            <img src="logo.png">
            <h3>cBOX</h3>
                <p>Dikelola oleh:-------- Fahrudin Wahabi --------- G.Tulus Hari Ramadhan -------- Afif Nandya S -------- Ednan Fajri -------- &copy; 2015</p>
            </div>
        </div>
</body>
</html>