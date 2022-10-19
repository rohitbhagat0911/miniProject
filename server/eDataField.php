<?php
 

include_once "db.php";

$id = $_GET['eventid'];

$sql = "SELECT * FROM events";

$rese = $db->query($sql);




 if($rese != FALSE && $rese->num_rows > 0) 
     $row_ED = $rese->fetch_assoc();

?>