<?php 

$conn = mysqli_connect("localhost","root","","skripsimakanan");

$hapus = $_GET['id'];

	$hapus = mysqli_query($conn, "DELETE FROM supplier WHERE id_supplier ='$hapus'");

	if($hapus)
	{
		?>
		<script type="text/javascript">
			alert('data berhasil dihapus');
			window.location.href="detailsupplier.php";
		</script>
		<?php
	}

	else {
		?>
		<script type="text/javascript">
			alert('data gagal dihapus');
			window.location.href="detailsupplier.php";
		</script>
		<?php
	}
 ?>