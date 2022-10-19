<?php

include_once "db.php";

$sql = "SELECT * FROM footer";

$res = $db->query($sql);

if($res != FALSE && $res->num_rows > 0) 
    $row_f = $res->fetch_assoc();

   

?>

