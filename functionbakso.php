<?php
    $conn = mysqli_connect("localhost","root","","skripsimakanan");
    
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

    
function baksoaja($data)
{
	global $conn;
	$id_customer = htmlspecialchars($data['id_customer']);
	$nama_pelanggan = htmlspecialchars($data['nama_pelanggan']);
	
	$alamat = htmlspecialchars($data['alamat']);
	
	$jumlah = htmlspecialchars($data['jumlah']);
	$harga = htmlspecialchars($data['harga']);

	$query = "INSERT INTO order VALUES ('','$id_customer','$nama_pelanggan','$alamat','$jumlah','$harga')";
	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);

}
    
