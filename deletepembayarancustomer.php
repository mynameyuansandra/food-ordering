<?php

$conn = mysqli_connect("localhost","root","","skripsimakanan");

$hapus = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM konf_pembayaran WHERE idkonfir_bayar ='$hapus'");

if ($hapus) {
?>
    <script type="text/javascript">
        alert('data berhasil dihapus');
        window.location.href = "detailpembayarancustomer.php";
    </script>
<?php
} else {
?>
    <script type="text/javascript">
        alert('data gagal dihapus');
        window.location.href = "detailpembayarancustomer.php";
    </script>
<?php
}
?>