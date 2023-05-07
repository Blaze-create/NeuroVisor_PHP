<?php
include "php/database.php";
$item_id = $_GET['id'];

$sql = "UPDATE account SET level='admin' WHERE id='$item_id'";
if ($conn->query($sql)) {
    echo '<script>
    window.location = "admin.php";
</script>';
}
