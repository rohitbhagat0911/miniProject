<?php
 

include_once "db.php";

 $sql = "SELECT * FROM content WHERE `id` = '1'";

 $res = $db->query($sql);

 if($res != FALSE && $res->num_rows > 0) 
    $content_data= $res->fetch_assoc();

?>