<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$conn = mysqli_connect("localhost", "root", "", "skripsimakanan");

function query($query)
{
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}

function registrasi($data)
{

	global $conn;
	$username = strtolower(stripcslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);
	$alamat = htmlspecialchars($data['alamat']);


	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('Username sudah terdaftar');
		</script>";

		return false;
	}

	if ($password !== $password2) {
		echo "<script>alert('Password tidak sesuai');<script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_BCRYPT);
	mysqli_query($conn, "INSERT INTO user(username, `password`, alamat) VALUES ('$username','$password','$alamat')");
	return mysqli_affected_rows($conn);
}

function registrasiadmin($data)
{

	global $conn;
	$username = strtolower(stripcslashes($data['username']));
	$password = mysqli_real_escape_string($conn, $data['password']);
	$password2 = mysqli_real_escape_string($conn, $data['password2']);


	$result = mysqli_query($conn, "SELECT username FROM user_admin WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>
			alert('Username sudah terdaftar');
		</script>";

		return false;
	}

	if ($password !== $password2) {
		echo "<script>alert('Password tidak sesuai');<script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_BCRYPT);
	mysqli_query($conn, "INSERT INTO user_admin(username, `password`) VALUES ('$username','$password')");
	return mysqli_affected_rows($conn);
}

function supplier($data)
{
	global $conn;
	$namaperusahaan = htmlspecialchars($data['namaperusahaan']);
	$alamat = htmlspecialchars($data['alamat']);
	$namamakanan = htmlspecialchars($data['namamakanan']);
	$jumlah = htmlspecialchars($data['jumlah']);

	$query = "INSERT INTO supplier(nama_perusahaan, alamat, nama_makanan, jumlah) VALUES ('$namaperusahaan','$alamat','$namamakanan','$jumlah')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function stokmakanan($data)
{
	global $conn;
	$namaMakanan = htmlspecialchars($data['nama_makanan']);
	$harga = htmlspecialchars($data['harga']);
	$modal = htmlspecialchars($data['modal']);
	$gambar = upload();

	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO stok_makanan_masuk(nama_makanan, harga, modal, gambar) VALUES ('$namaMakanan',$harga,$modal,'$gambar');";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function upload()
{
	$name = $_FILES['gambar']['name'];
	$size = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmp_name = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>
			alert('Masukkan gambar terlebih dahulu');
		</script>";

		return false;
	}

	$ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ambilEkstensiGambar = explode('.', $name);
	$ekstensiGambar = strtolower(end($ambilEkstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('yang anda upload bukan gambar');
		</script>";

		return false;
	}

	if ($size > 1000000) {
		echo "<script>
			alert('Ukuran gambar terlalu besar');
		</script>";

		return false;
	}

	$filebaru = uniqid();
	$filebaru .= '.';
	$filebaru .= $ekstensiGambar;
	move_uploaded_file($tmp_name, 'img/' . $filebaru);
	return $filebaru;
}

function menumakan($data)
{
	global $conn;
	$idmenumakan = htmlspecialchars($data['idmenumakanan']);
	$menumakanan = htmlspecialchars($data['menumakanan']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO menu_makan(id_stok_makanan, menu_makanan, harga) VALUES ('$idmenumakan','$menumakanan','$harga')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function pesan($data)
{
	global $conn;
	$id_customer = htmlspecialchars($data['id_customer']);
	$namamakanan = htmlspecialchars($data['namamakanan']);
	$nama_pelanggan = htmlspecialchars($data['nama_pelanggan']);

	$alamat = htmlspecialchars($data['alamat']);

	$jumlah = htmlspecialchars($data['jumlah']);
	$harga = htmlspecialchars($data['harga']);
	$date = htmlspecialchars($data['tanggal']);
	$gambar = htmlspecialchars($data['gambar']);
	$idStokMakanan = htmlspecialchars($data['id_stok_makanan']);

	$query = "INSERT INTO pemesanan(id_customer, nama_pelanggan, id_stok_makanan, nama_makanan, alamat, jumlah_pesan, harga, tanggal, gambar) VALUES ('$id_customer','$nama_pelanggan','$idStokMakanan','$namamakanan','$alamat','$jumlah','$harga','$date','$gambar')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function updatesupplier($data)
{
	global $conn;
	$id = $_GET['id'];
	$namaperusahaan = htmlspecialchars($data['namaperusahaan']);
	$alamat = htmlspecialchars($data['alamat']);
	$namamakan = htmlspecialchars($data['namamakanan']);
	$jumlah = htmlspecialchars($data['jumlah']);

	$query = "UPDATE supplier SET nama_perusahaan = '$namaperusahaan', alamat = '$alamat', nama_makanan = '$namamakan', jumlah = '$jumlah' WHERE id_supplier = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function updatestokmakanan($data)
{
	global $conn;
	$id = $_GET['id'];
	$namaMakanan = htmlspecialchars($data['nama_makanan']);
	$harga = htmlspecialchars($data['harga']);
	$modal = htmlspecialchars($data['modal']);
	$gambarubah = htmlspecialchars($data['gambarubah']);

	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarubah;
	} else {
		$gambar = upload();
	}

	$query = "UPDATE stok_makanan_masuk SET nama_makanan = '$namaMakanan', harga = '$harga', modal = '$modal', gambar = '$gambar' WHERE id_stok_makanan = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function updatemenumakan($data)
{
	global $conn;
	$id = $_GET['id'];
	$idmenumakan = htmlspecialchars($data['idmenumakan']);
	$menumakanan = htmlspecialchars($data['menumakanan']);
	$harga = htmlspecialchars($data['harga']);

	$query = "UPDATE menu_makan SET id_stok_makanan = '$idmenumakan', menu_makanan = '$menumakanan' harga = '$harga' WHERE id_menu = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

// function updateorder($data)
// {
// 	global $conn;
// 	$id = $_GET['id'];

// }

function konfirmasipembayaran($data)
{
	global $conn;
	$id_order = htmlspecialchars($data['id_order']);
	$namapenyetor = htmlspecialchars($data['namapenyetor']);
	$bank = htmlspecialchars($data['bank']);
	$harga = htmlspecialchars($data['harga']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$gambar = uploadan();

	if (!$gambar) {
		return false;
	}

	$query = "INSERT INTO konf_pembayaran(id_order, nama, bank, total_harga, tanggal, bukti) VALUES ('$id_order','$namapenyetor','$bank','$harga','$tanggal','$gambar')";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function uploadan()
{
	$name = $_FILES['gambar']['name'];
	$size = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmp_name = $_FILES['gambar']['tmp_name'];

	if ($error === 4) {
		echo "<script>
			alert('Masukkan gambar terlebih dahulu');
		</script>";

		return false;
	}

	$ekstensiGambarValid = ['jpg', 'png', 'jpeg'];
	$ambilEkstensiGambar = explode('.', $name);
	$ekstensiGambar = strtolower(end($ambilEkstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "<script>
			alert('yang anda upload bukan gambar');
		</script>";

		return false;
	}

	if ($size > 1000000) {
		echo "<script>
			alert('Ukuran gambar terlalu besar');
		</script>";

		return false;
	}

	$filebaru = uniqid();
	$filebaru .= '.';
	$filebaru .= $ekstensiGambar;
	move_uploaded_file($tmp_name, 'img/' . $filebaru);
	return $filebaru;
}


function updatekonfirmasipembayaran($data)
{
	global $conn;
	$id = $_GET['id'];
	$id_order = htmlspecialchars($data['id_order']);
	$namapenyetor = htmlspecialchars($data['namapenyetor']);
	$bank = htmlspecialchars($data['bank']);
	$harga = htmlspecialchars($data['harga']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$gambarubah = htmlspecialchars($data['gambarubah']);


	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarubah;
	} else {
		$gambar = uploadan();
	}

	$query = "UPDATE konf_pembayaran SET id_order = '$id_order', nama = '$namapenyetor', bank = '$bank', total_harga = '$harga', tanggal = '$tanggal', bukti = '$gambar' WHERE idkonfir_bayar = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function pengiriman($data)
{
	global $conn;
	$idorder = htmlspecialchars($data['idorder']);
	$namapelanggan = htmlspecialchars($data['namapelanggan']);
	$alamat = htmlspecialchars($data['alamat']);
	$jumlah_pesan = htmlspecialchars($data['jumlah_pesan']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO konf_pengiriman(id_order, nama_pelanggan, jumlah_pesan, harga, alamat) VALUES ('$idorder','$namapelanggan','$jumlah_pesan','$harga','$alamat')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function updatepengiriman($data)
{
	global $conn;
	$id = $_GET['id'];
	$idorder = htmlspecialchars($data['idorder']);
	$namapelanggan = htmlspecialchars($data['namapelanggan']);
	$alamat = htmlspecialchars($data['alamat']);
	$jumlah_pesan = htmlspecialchars($data['jumlah_pesan']);
	$harga = htmlspecialchars($data['harga']);


	$query = "UPDATE konf_pengiriman SET id_order = '$idorder', nama_pelanggan = '$namapelanggan', jumlah_pesan = '$jumlah_pesan', harga = '$harga', alamat = '$alamat' WHERE id_konf = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function updatecustomer($data)
{
	global $conn;
	$id = $_GET['id'];
	$namapelanggan = htmlspecialchars($data['namapelanggan']);
	$alamat = htmlspecialchars($data['alamat']);


	$query = "UPDATE user SET username = '$namapelanggan', alamat = '$alamat' WHERE id_login = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}


function updateorder($data)
{
	global $conn;
	$id = $_GET['id'];
	$namapelanggan = htmlspecialchars($data['namapelanggan']);
	$alamat = htmlspecialchars($data['alamat']);
	$jumlahpesan = htmlspecialchars($data['jumlahpesan']);
	$harga = htmlspecialchars($data['harga']);
	$tanggal = htmlspecialchars($data['tanggal']);
	$gambarubah = htmlspecialchars($data['gambarubah']);
	if ($_FILES['gambar']['error'] === 4) {
		$gambar = $gambarubah;
	} else {
		$gambar = uploadan();
	}

	$query = "UPDATE pemesanan SET nama_pelanggan = '$namapelanggan', alamat = '$alamat', jumlah_pesan = '$jumlahpesan', harga = '$harga', tanggal = '$tanggal', gambar = '$gambar' WHERE id_order = $id";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function customer($data)
{
	global $conn;
	$namapelanggan = htmlspecialchars($data['namapelanggan']);
	$alamat = htmlspecialchars($data['alamat']);
	$hp = htmlspecialchars($data['hp']);

	$query = "INSERT customer(nama_pelanggan, alamat, hp) VALUES ('$namapelanggan','$alamat','$hp')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function cari($search)
{
	$query = "SELECT * FROM supplier WHERE nama_makanan LIKE '%$search%' OR alamat LIKE '%$search%'";
	return query($query);
}

function caridetailmakanmasuk($search)
{
	$query = "SELECT * FROM stok_makanan_masuk WHERE stok_menu_makanan LIKE '%$search%'";
	return query($query);
}

function caridetailmenumakanan($search)
{
	$query = "SELECT * FROM menu_makan WHERE menu_makanan LIKE '%$search%'";
	return query($query);
}

function caripesanan($search)
{
	$query = "SELECT * FROM pemesanan WHERE nama_pelanggan LIKE '%$search%' OR alamat LIKE '%$search%'";
	return query($query);
}

function caricustomer($search)
{
	$query = "SELECT * FROM customer WHERE nama_pelanggan LIKE '%$search%'";
	return query($query);
}

function cariorder($search)
{
	$query = "SELECT * FROM detail_order WHERE menu LIKE '%$search%'";
	return query($query);
}

function caripengiriman($search)
{
	$query = "SELECT * FROM konf_pengiriman WHERE nama_pelanggan LIKE '%$search%'";
	return query($query);
}

function caripembayaran($search)
{
	$query = "SELECT * FROM konf_pembayaran WHERE nama LIKE '%$search%'";
	return query($query);
}

function ubahStatus($id, $status)
{
	global $conn;
	$query = $conn->query("UPDATE pemesanan SET `status` = '$status' WHERE id_order = $id");

	if ($conn->affected_rows > 0) {
		return true;
	}

	return false;
}

function ubahStatusKirim($id, $status)
{
	global $conn;
	$query = $conn->query("UPDATE konf_pengiriman SET `status` = '$status' WHERE id_konf = $id");

	if ($conn->affected_rows > 0) {
		return true;
	}

	return false;
}
