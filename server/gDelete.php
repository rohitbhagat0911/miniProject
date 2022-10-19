<?php


if (isset($_POST["dimage"])) {
    $delete = "";

    $iid =  $_REQUEST['iid'];

    include_once "db.php";

    $sql = "DELETE FROM gallery WHERE id = '$iid'";
    
    $res = $db->query($sql);

    if ($res) {
        $delete = "deleted";
    } else {
        $deleted = "fupspl";
    }

header("Location: ../adminGallery.php?result=$delete");
    
} else {
    header("Location: ../");
    
}


