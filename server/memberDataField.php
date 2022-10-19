<?php
 
$sid = $_GET['searchid'];

include_once "db.php";

 $sql = "SELECT * FROM senior_player WHERE state_id = '$sid'";

 $res = $db->query($sql);

 if($res != FALSE && $res->num_rows > 0) 
    $sp_data= $res->fetch_assoc();

?>