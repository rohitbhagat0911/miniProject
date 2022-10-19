<?php 

$db = new mysqli("localhost", "root", "", "yss");

if ($db->connect_error) {
  
  echo "<h1>ERROR 505</h1>";
}


// $sql = "SELECT * FROM content";

// $res = $db->query($sql);


?>