<?php

$conn = mysqli_connect("localhost", "root", "", "skripsimakanan");

$hapus = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM user WHERE id_login ='$hapus'");

if ($hapus) {
?>
	<script type="text/javascript">
		alert('data berhasil dihapus');
		window.location.href = "detailcustomer.php";
	</script>
<?php
} else {
?>
	<script type="text/javascript">
		alert('data gagal dihapus');
		window.location.href = "detailcustomer.php";
	</script>
<?php
}
?>