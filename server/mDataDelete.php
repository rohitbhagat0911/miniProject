<?php

if (isset($_POST["dsubmit"])) {
    $delete = "";
   
    $deleteid =  $_REQUEST['deleteid'];
    include_once "db.php";
    $sql_validator = "SELECT * FROM members WHERE state_id = '$deleteid'";
    $res_validator = $db->query($sql_validator);
    if($res_validator != FALSE && $res_validator->num_rows > 0) 
    $rowMainUSer = $res_validator->fetch_assoc();


    if ($rowMainUSer['id'] != "1") {
        
    if ($res_validator->num_rows == 1) {
        $sql = "DELETE FROM members WHERE state_id = '$deleteid'";
    
        $res = $db->query($sql);

        if ($res) {
            $delete = "deleted";
        } else {
            $delete = "failed";
        }
        
    } else {
        $delete = "null";
    }
} else {
    $delete = "na";
}
    
header("Location: ../adminMemberDetails.php?result=$delete"); 
} else {
    header("Location: ../");
}


