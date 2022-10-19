<?php
 

include_once "db.php";

 $sql = "SELECT * FROM founder WHERE `id` = '1'";

 $res = $db->query($sql);

 if($res != FALSE && $res->num_rows > 0) 
    $row_fd= $res->fetch_assoc();

?>