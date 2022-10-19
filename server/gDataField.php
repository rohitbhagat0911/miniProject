<?php

include_once "db.php";

$id = $_GET['imageid'];

$sql = "SELECT * FROM gallery WHERE id = '$id'";

$res = $db->query($sql);

$row_idetails = $res->fetch_assoc();

   

?>

