<?php


if (isset($_POST['idsubmit'])) {
    
$sid = $_POST['searchid'];

include_once "db.php";

 $sql = "SELECT * FROM senior_player WHERE state_id = '$sid'";

 $res = $db->query($sql);

 if($res->num_rows == 1) {
   
     header("Location: ../adminFounderDesk.php?searchid=$sid");
 } else {
    header("Location: ../adminFounderDesk.php?result=null");
 }

} else {
    header("Location: ../");

}
?>