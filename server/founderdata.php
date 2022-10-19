<?php

include_once "db.php";

$sql = "SELECT * FROM founder";

$res = $db->query($sql);

if($res != FALSE && $res->num_rows > 0) 
    $row_founder = $res->fetch_assoc();

?>