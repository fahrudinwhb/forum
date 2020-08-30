<html>
<head>
	<title></title>
    	<link rel="stylesheet" type="text/css" href="style.css">
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

	<?php 
		include 'koneksi.php';
		$id = $_GET ['id'];
		$query = "SELECT id_member, nama FROM member WHERE id_member=$id";
	 	$result = mysql_query($query);
	 	$row = mysql_fetch_assoc($result);
	 ?>

<div class="container tabelin">
    <form method="POST" action="olahpesan_1.php">
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
</body>
</html>