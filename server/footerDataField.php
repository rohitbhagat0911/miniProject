<?php
 

include_once "db.php";

 $sql = "SELECT * FROM footer WHERE `id` = '1'";

 $res = $db->query($sql);

 if($res != FALSE && $res->num_rows > 0) 
    $footer_data= $res->fetch_assoc();

?>