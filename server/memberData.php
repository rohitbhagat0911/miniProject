<?php

include_once "db.php";

$sql = "SELECT * FROM members";

$res_member = $db->query($sql);
$res_memData = $db->query($sql);


?>