<?php

$conn = mysqli_connect("localhost","root","","skripsimakanan");
$idlokasi = $_GET['id'];

$hapus = mysqli_query($conn, "DELETE FROM form_check WHERE id_form = '$idlokasi'");

if($hapus)
{
    ?>
    <script>
        alert("Data berhasil dihapus");
        window.location.href="detailformcheck.php";
    </script>
    <?php
}

else {
    ?>
    <script>
        alert("Data gagal dihapus");
        window.location.href="detailformcheck.php";
    </script>
    <?php
}

?>