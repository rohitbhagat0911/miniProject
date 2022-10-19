<?php
 
$sid = $_GET['searchid'];

include_once "db.php";

 $sql = "SELECT * FROM members WHERE state_id = '$sid'";

 $res = $db->query($sql);

 if($res != FALSE && $res->num_rows > 0) 
    $mem_data= $res->fetch_assoc();

?>