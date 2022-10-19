<?php

include_once "db.php";

$sql = "SELECT * FROM gallery ORDER BY id DESC";

$res_cimage = $db->query($sql);
// $res_memData = $db->query($sql);

?>