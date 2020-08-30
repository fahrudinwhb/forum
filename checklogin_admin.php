<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT count(*) AS JUMLAH, id_admin, status FROM admin WHERE nama = '$username' AND password = '$password'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);
if ($row['JUMLAH'] > 0) {
	$_SESSION['id'] = $row['id_admin'];
	$_SESSION['status'] = $row['status'];
	header("location:halamanadmin.php");
} else {
	header("location:gagallogin_admin.php");
}
?>