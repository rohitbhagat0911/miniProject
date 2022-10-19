<?php



if (isset($_POST["dsubmit"])) {
    $delete = "";
    $deleteid =  $_REQUEST['deleteid'];

    include_once "db.php";

    $sql = "DELETE FROM senior_player WHERE state_id = '$deleteid'";
    
    $res = $db->query($sql);

    if ($res) {
        $delete = "deleted";
    } else {
        $deleted = "failed";
    }

    header("Location: ../adminFounderDesk.php?result=$delete");
   
} else {
    header("Location: ../");
}



    


?>