<?php
  

if(isset($_POST["relation"])){  

    $status = $statusMsg = ''; 

  include_once 'db.php';

    $imageid = $_REQUEST['imageid'];
    $crelation = $_REQUEST['crelation'];
    $imgorder = $_REQUEST['imgorder'];

    
    // if ($imgorder == null) {
    //     $sql = "UPDATE gallery SET `relation` = '$crelation' WHERE `id` = '$imageid'";

    //     if ($db->query($sql)) {
    //          $statusMsg = "upspl";
    //     } else {
    //         $statusMsg = "fupspl";
    //     }
    // }

    

    if (strtolower($crelation) == "yes" && $imgorder != null) {
     $sql = "UPDATE gallery SET `relation` = 'Yes', `img_order` = '$imgorder' WHERE `id` = '$imageid'";

        if ($db->query($sql)) {
             $statusMsg = "upspl";
        } else {
            $statusMsg = "fupspl";
        }
    } else if (strtolower($crelation) == "no") {
        $sql = "UPDATE gallery SET `relation` = 'No', `img_order` = '' WHERE `id` = '$imageid'";

        if ($db->query($sql)) {
             $statusMsg = "upspl";
        } else {
            $statusMsg = "fupspl";
        }
    } else if (strtolower($crelation) == "yes" && $imgorder == null) {
        $statusMsg = "eimo";
} else {
        $statusMsg = "invalid";
  }

    
    
    // $sql = "UPDATE gallery SET `relation` = '$crelation', `img_order` = '$imgorder' WHERE `id` = '$imageid'";

    //     if ($db->query($sql)) {
    //          $statusMsg = "upspl";
    //     } else {
    //         $statusMsg = "fupspl";
    //     }
    
header("Location: ../adminHome.php?result=$statusMsg");
} else {
    header("Location: ../");
}
 
// Display status message 
// echo $statusMsg; 

