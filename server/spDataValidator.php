<?php


if (isset($_POST['dsubmit'])) {
    $delete = "";   
$sid = $_POST['deleteid'];

include_once "db.php";

 $sql = "SELECT * FROM senior_player WHERE state_id = '$sid'";

 $res = $db->query($sql);


 if($res->num_rows == 1) {
   
     //header("Location: ../adminFounderDesk.php?deleteid=$sid");
     $sqlp = "DELETE FROM senior_player WHERE state_id = '$sid'";

     if ($db->query($sqlp)) {
        $delete = "deleted";
     } else {
        $delete = "failed";
     }
header("Location: ../adminFounderDesk.php?result=$delete");



 } else {
    header("Location: ../adminFounderDesk.php?result=null");
 }

} else {
   header("Location: ../");

}
?>