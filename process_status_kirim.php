<?php

require_once "functionmakan.php";

if (isset($_POST['status']) && isset($_POST['id'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];

    if (ubahStatusKirim($id, $status)) {
?>
        <script>
            alert('Status telah diubah')
        </script>
    <?php
    } else {
    ?>
        <script>
            alert('Status tidak berubah')
        </script>
    <?php
    }

    ?>
    <script>
        window.location = "detailpengiriman.php"
    </script>
<?php

}
