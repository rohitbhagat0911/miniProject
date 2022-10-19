<?php

include_once "db.php";

$sql = "SELECT * FROM senior_player ORDER BY player_order ASC";

$resforsenior = $db->query($sql);
$rfs = $db->query($sql);

// if($resforsenior != FALSE && $resforsenior->num_rows > 0) {
//      $row_senior = $resforsenior->fetch_all(MYSQLI_ASSOC);;
     
// }

// if($rfs != FALSE && $rfs->num_rows > 0) 
    //  $row_senData = $rfs->fetch_assoc();


     

    

?>
