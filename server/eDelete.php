<?php


if (isset($_POST["devent"])) {
    $delete = "";

    $deleteid =  $_REQUEST['deleteid'];

    if ($deleteid != "1") {
        include_once "db.php";

    $sql = "DELETE FROM events WHERE `id` = '$deleteid'";
    
    $res = $db->query($sql);

    if ($res) {
        $delete = "deleted";
    } else {
        $delete = "failed";
    }
    

    
    } else {
        $delete = "na";
    }

    header("Location: ../adminEvents.php?result=$delete");
} else {
    header("Location: ../");
}




    


?>