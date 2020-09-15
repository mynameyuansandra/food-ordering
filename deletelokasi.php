<?php

$conn = mysqli_connect("localhost","root","","skripsimakanan");
$idlokasi = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM lokasi WHERE id_lokasi = '$idlokasi'");

if($hapus)
{
    ?>
    <script>
        alert("Data berhasil dihapus");
        window.location.href="detaillokasi.php";
    </script>
    <?php
}

else {
    ?>
    <script>
        alert("Data gagal dihapus");
        window.location.href="detaillokasi.php";
    </script>
    <?php
}

?>