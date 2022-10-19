<?php

include_once "db.php";

$sql = "SELECT * FROM gallery ORDER BY id DESC";

$res_gallery = $db->query($sql);

?>