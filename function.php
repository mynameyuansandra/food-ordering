<?php
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
	$conn = mysqli_connect("localhost","root","","ckblogisticsnew");

	function query($query)
	{	
		global $conn;
		$result = mysqli_query($conn, $query);
		$rows = [];
		while($row = mysqli_fetch_assoc($result))
		{
			$rows[] = $row;
		}

		return $rows;
	}

	function administrasi($data)
	{
		global $conn;
		$nama = htmlspecialchars($data['nama']);
		$posisi = htmlspecialchars($data['posisi']);
		$images = upload();

		if(!$images)
		{
			return false;
		}

		$posisi = htmlspecialchars($data['posisi']);

		$query = "INSERT INTO adminis VALUES ('','$nama','$posisi','$images')";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}

	function upload()
	{
		$name = $_FILES['images']['name'];
		$size = $_FILES['images']['size'];
		$error = $_FILES['images']['error'];
		$tmp_name = $_FILES['images']['tmp_name'];

		if($error === 4)
		{
			echo "<script>
				alert('Masukkan gambar terlebih dahulu');
			</script>";

			return false;
		}

		$ekstensiGambarvalid = ['jpg','png','jpeg'];
		$ambilEkstensigambar = explode('.', $name);
		$ekstensiGambar = strtolower(end($ambilEkstensigambar));
		if(!in_array($ekstensiGambar, $ekstensiGambarvalid))
		{
			echo "<script>
				alert('Yang anda upload bukan gambar');
			</script>";

			return false;
		}

		if($size >5000000)
		{
			echo "<script>
				alert('Ukuran gambar terlalu besar');
			</script>";

			return false;
		}

		$filebaru = uniqid();
		$filebaru .= '.';
		$filebaru .= $ekstensiGambar;
		move_uploaded_file($tmp_name, 'img/'.$filebaru);
		return $filebaru;
	}

	function pesananya($data)
	{
		global $conn;
		$idpegawai = htmlspecialchars($data['idpegawai']);
		$order = htmlspecialchars($data['order']);
		$qty = htmlspecialchars($data['qty']);
		$partnumber = htmlspecialchars($data['partnumber']);
		$mfr = htmlspecialchars($data['mfr']);
		$namapemesan = htmlspecialchars($data['namapemesan']);	

		$query = "INSERT INTO pesanan VALUES('','$idpegawai','$order','$qty','$partnumber','$mfr','$namapemesan')";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);

	}

	function loc($lokasi)
	{	
		global $conn;
		$storagebin = htmlspecialchars($lokasi['storagebin']);
		$images = uploadkdua();

		if(!$images)
		{
			return false;
		}

		$query = "INSERT INTO lokasi VALUES ('','$storagebin','$images')";
		mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
	}
		function uploadkdua()
		{
			$name = $_FILES['images']['name'];
			$size = $_FILES['images']['size'];
			$error = $_FILES['images']['error'];
			$tmp_name = $_FILES['images']['tmp_name'];

			if($error === 4)
			{
				echo "<script>
					alert('Masukkan gambar terlebih dahulu !');
				</script>";

				return false;
			}

			$ekstensiGambarvalid = ['jpg','png','jpeg'];
			$ambilEkstensigambar = explode('.', $name);
			$ekstensiGambar = strtolower(end($ambilEkstensigambar));
			if(!in_array($ekstensiGambar, $ekstensiGambarvalid))
			{
				echo "<script>
				 alert('Yang anda upload bukan gambar !');
				</script>";

				return false;
			}

			if($size > 5000000)
			{
				echo "<script>
					alert('Ukuran gambar terlalu besar !');
				</script>";

				return false;
			}

			$imagenew = uniqid();
			$imagenew .= '.';
			$imagenew .= $ekstensiGambar;
			move_uploaded_file($tmp_name,'img/'. $imagenew);
			return $imagenew;
		}

		function formcheck($check)
		{
			global $conn;
			$idadmin = htmlspecialchars($check['idadmin']);
			$idpesanan = htmlspecialchars($check['idpesanan']);
			$idbarang = htmlspecialchars($check['idbarang']);
			$idlokasi = htmlspecialchars($check['idlokasi']);
			$nama = htmlspecialchars($check['nama']);
			$partnumber = htmlspecialchars($check['partnumber']);
			$storagebin = htmlspecialchars($check['storagebin']);
			$qty = htmlspecialchars($check['qty']);

			$query = "INSERT INTO form_check VALUES('','$idadmin', '$idpesanan', '$idbarang', '$idlokasi', '$nama', '$partnumber','$storagebin','$qty')";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);

		}


		function registrasi($data)
		{	
			global $conn;
			$username = strtolower(stripcslashes($data['username']));
			$password = mysqli_real_escape_string($conn, $data['password']);
			$password2 = mysqli_real_escape_string($conn, $data['password2']);

			$result = mysqli_query($conn,"SELECT username FROM user WHERE username ='$username'");

			if(mysqli_fetch_assoc($result))
			{
				echo "<script>
				alert('username sudah terdaftar');
				</script>";

				return false;
			}

			if($password !== $password2)
			{
				echo "<script>alert('Password tidak sesuai');</script>";
				return false;
			}

			$password = password_hash($password, PASSWORD_BCRYPT);
			mysqli_query($conn,"INSERT INTO user(username, `password`) VALUES ($username', '$password')");
			return mysqli_affected_rows($conn);
		}

		function hapusan($hapus)
		{
			global $conn;
			$id = $_GET['id'];
			mysqli_query($conn,"DELETE FROM pegawai WHERE id_pegawai = $id");
			return mysqli_affected_rows($conn);
		}

		function update($update)
		{
			global $conn;
			$id = $_GET['id'];
			$nama = htmlspecialchars($update['nama']);
			$ubahimages = htmlspecialchars($update['ubahimages']);
			
			if($_FILES['images']['error'] === 4)
			{
				$images = $ubahimages;
			}

			else {
				$images = upload();
			}
			
			$posisi = htmlspecialchars($update['posisi']);
			$tanggal = htmlspecialchars($update['tanggal']);

			$query = "UPDATE pegawai SET nama = '$nama', images = '$images', posisi = '$posisi', tanggal = '$tanggal' WHERE
			 id_pegawai = $id";
			 mysqli_query($conn, $query);
			 return mysqli_affected_rows($conn);

		}

		function pesanan($data)
		{
			global $conn;
			$id = $_GET['id'];
			$orders = htmlspecialchars($data['orders']);
			$qty = htmlspecialchars($data['qty']);
			$part_number =  htmlspecialchars($data['partnumber']);
			$mfr = htmlspecialchars($data['mfr']);
			$namapemesan = htmlspecialchars($data['namapemesanan']);
			
			$query = "UPDATE pesanan SET orders = '$orders', qty = '$qty', part_number = '$part_number', mfr = '$mfr', nama_pemesanan = '$namapemesan' 
			where id_pesanan = $id";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}

		function lokasi($data)
		{
			global $conn;
			$id = $_GET['id'];
			$storagebin = htmlspecialchars($data['storagebin']);
			$gambarubah = htmlspecialchars($data['gambarubah']);

			if($_FILES['images']['error'] === 4)
			{
				$images = $gambarubah;
			}

			else {
				$images = upload();
			}

			$query = "UPDATE lokasi SET storagebin = '$storagebin', images = '$images' where id_lokasi = $id";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}

		function formcheckupdate($data)
		{
			global $conn;
			$id = $_GET['id'];
			$namapesan = htmlspecialchars($data['namapesan']);
			$partnumber = htmlspecialchars($data['partnumber']);
			$storagebin = htmlspecialchars($data['storagebin']);
			$qty = htmlspecialchars($data['qty']);

			$query = "UPDATE form_check SET nama_barang = '$namapesan', part_number ='$partnumber', storagebin = '$storagebin', qty = '$qty' where id_form = $id";
			mysqli_query($conn, $query);
			return mysqli_affected_rows($conn);
		}

		function cari($search)
		{
			global $conn;
			$query = "SELECT * FROM pegawai WHERE nama LIKE '%$search%'";
			return query($query);
		}

		function caripesanan($search)
		{
			global $conn;
			$query = "SELECT * FROM pesanan WHERE nama_pemesanan LIKE '%$search%'";
			return query($query);
		}

		function carilokasi($search)
		{
			global $conn;
			$query = "SELECT * FROM lokasi WHERE storagebin LIKE '%$search%'";
			return query($query);
		}

		function cariform($search)
		{
			global $conn;
			$query = "SELECT * FROM form_check WHERE part_number LIKE '%$search%' OR nama_barang LIKE '%$search%' ";
			return query($query);
		}

		function cariindex($search)
		{
			global $conn;
			$query = "SELECT * FROM pesanan WHERE nama_pemesanan LIKE '%$search%'";
			return query($query);
		}
