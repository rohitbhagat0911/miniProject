<?php

include_once "db.php";

$sql = "SELECT * FROM events";

$res_event = $db->query($sql);
$res_eveData = $db->query($sql);


?>