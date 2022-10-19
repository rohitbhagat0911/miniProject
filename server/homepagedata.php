<?php

include_once "db.php";

$sql = "SELECT * FROM content";

$res = $db->query($sql);



if($res != FALSE && $res->num_rows > 0) 
    $row = $res->fetch_assoc();

?>