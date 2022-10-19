<?php


if (isset($_POST['idsubmit'])) {
    
$sid = $_POST['searchid'];

include_once "db.php";

 $sql = "SELECT * FROM members WHERE state_id = '$sid'";

 $res = $db->query($sql);

 if($res->num_rows == 1) {
   
     header("Location: ../adminMemberDetails.php?searchid=$sid");
 } else {
    header("Location: ../adminMemberDetails.php?result=null");
 }

} else {
    header("Location: ../");
}
?>