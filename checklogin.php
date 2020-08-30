<?php
session_start();
include 'koneksi.php';
$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT count(*) AS JUMLAH, id_member FROM member WHERE nama = '$username' AND password = '$password'";
$result = mysql_query($query) or die(mysql_error());
$row = mysql_fetch_assoc($result);
if ($row['JUMLAH'] > 0) {
	$_SESSION['id'] = $row['id_member'];
	header("location:index.php");
} else {
	header("location:gagallogin.php");
}
?>