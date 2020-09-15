<?php
include("conn.php");

date_default_timezone_set('Asia/Jakarta');

session_start();

$username = $_POST['username'];
$password1 = $_POST['password'];
$password = sha1($password1);

//$username = mysqli_real_escape_string($username);
//$password = mysqli_real_escape_string($password);

if (empty($username) && empty($password)) {
	header('location:indexcustomer.php?error=1');
} else if (empty($username)) {
	header('location:indexcustomer?error=2');
} else if (empty($password)) {
	header('location:indexcustomer?error=3');
}

$q = mysqli_query($conn, "select * from user where username='$username' and password='$password'");
$row = mysqli_fetch_array($q);

if (mysqli_num_rows($q) == 1) {
	$_SESSION['user_id'] = $row['id_login'];
	$_SESSION['fullname'] = $row['nama'];
	$_SESSION['alamat'] = $row['alamat'];
	$_SESSION['username'] = $username;

	header('location:indexcustomer.php');
} else {
	header('location:indexcustomer.php?error=4');
}
