<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "skripsimakanan";

$koneksi = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (mysqli_connect_error()) {
	echo 'Gagal melakukan koneksi ke Database : ' . mysqli_connect_error();
}
date_default_timezone_set('Asia/Jakarta');
//fungsi format rupiah 
/**function format_rupiah($rp) {
	$hasil = "Rp." . number_format($rp, 0, "", ".") . ",00";
	return $hasil;
    }**/
//fungsi pinjaman buku terlambat    
/**function terlambat($tgl_dateline, $tgl_kembali) {

$tgl_dateline_pcs = explode ("-", $tgl_dateline);
$tgl_dateline_pcs = $tgl_dateline_pcs[2]."-".$tgl_dateline_pcs[1]."-".$tgl_dateline_pcs[0];

$tgl_kembali_pcs = explode ("-", $tgl_kembali);
$tgl_kembali_pcs = $tgl_kembali_pcs[2]."-".$tgl_kembali_pcs[1]."-".$tgl_kembali_pcs[0];

$selisih = strtotime ($tgl_kembali_pcs) - strtotime ($tgl_dateline_pcs);

$selisih = $selisih / 86400;

if ($selisih>=1) {
	$hasil_tgl = floor($selisih);
}
else {
	$hasil_tgl = 0;
}
return $hasil_tgl;
}**/

// login

// include("conn.php");
// date_default_timezone_set('Asia/Jakarta');

// session_start();

// $username = $_POST['username'];
// $password1 = $_POST['password'];
// $password = sha1($password1);

// //$username = mysqli_real_escape_string($username);
// //$password = mysqli_real_escape_string($password);

// // if (empty($username) && empty($password)) {
// //   header('location:nasigorengcustomer.php');
// // } else if (empty($username)) {
// //   header('location:nasigorengcustomer.php');
// // } else if (empty($password)) {
// //   header('location:nasigorengcustomer.php');
// // }

// // $q = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// // $row = mysqli_fetch_array($q);

// // if (mysqli_num_rows($q) == 1) {
// //   $_SESSION['user_id'] = $row['id_login'];
// //   $_SESSION['username'] = $username;
// //   $_SESSION['fullname'] = $row['username'];
// //   $_SESSION['alamat'] = $row['alamat'];

// //   header('location:nasigorengcustomer.php');
// // } else {
// //   header('location:logincustomer.php');
// }