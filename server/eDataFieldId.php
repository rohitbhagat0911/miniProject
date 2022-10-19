<?php
 

include_once "db.php";

 $sql = "SELECT * FROM events";

 $res = $db->query($sql);

//  if($res != FALSE && $res->num_rows > 0) 
//     $row_event = $res->fetch_assoc();

?>