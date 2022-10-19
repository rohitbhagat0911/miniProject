<?php

include_once "db.php";

$sql = "SELECT * FROM admin_login WHERE email_id='$user' AND password='$pass'";

$res = $db->query($sql);

$row_count = $res->num_rows;



?>