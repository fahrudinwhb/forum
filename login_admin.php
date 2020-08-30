<!DOCTYPE html>
<html>
<head>
	<title>
		
	</title>
	<link rel="stylesheet" type="text/css" href="login.css">
        <link rel="stylesheet" type="text/css" href="skeleton.css">
</head>
<body>
<div class="container">
<div>
    <div class="eight columns burunglogo">
        <img src="logo.jpg" class="burunglogo">

        <img src="cbox.png" class="quicksilver">
    </div>
</div>
    <div class="borderlogin">
        <form method="post" action="checklogin_admin.php" class="tabelin">
        <table>
        <tr>
            <td>
                Username
            </td>
            <td>
                :
            </td>
            <td>
                <input type="text" name="username" placeholder="username">
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
                <input type="password" name="password" placeholder="password">
            </td>
        </tr>
        <tr>
            <td>
                <button type="submit">Submit</button>
            </td>
        </tr>
            </form>
        </table>
       </div>
    </div>	
</body>
</html>