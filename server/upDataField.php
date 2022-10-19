<?php
  

if(isset($_POST["upsubmit"])){ 

    $status = $statusMsg = ''; 

  include_once 'db.php';

    $stateid = $_REQUEST['stateid'];
    $spname = $_REQUEST['spname'];
    $pordr = $_REQUEST['pordr'];
    $stmt = $_REQUEST['stmt'];
    
    $status = 'error'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
       
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
         
            // Insert image content into database 

            $sql = "UPDATE senior_player SET `player_name` = '$spname', `player_img` = '$imgContent', `statement` = '$stmt', `player_order` = '$pordr' WHERE `state_id` = '$stateid'";

            // if ($db->query($sql) && isset($_POST['adsubmit'])) {
            //     echo "<h1>Successfuly</h1>";
            // } else {
            //     echo "<h1>failed</h1>";
            // }

            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = true; 
                $statusMsg = "upspl"; 
            }
            else{ 
                $statusMsg = "fupspl"; 
            }  
        }
        else{ 
            $statusMsg = "fupspl"; 
        } 
    }
    else{ 
        
        $sql = "UPDATE senior_player SET `player_name` = '$spname', `statement` = '$stmt', `player_order` = '$pordr' WHERE `state_id` = '$stateid'";

        if ($db->query($sql)) {
             $statusMsg = "upspl";
        } else {
            $statusMsg = "fupspl";
        }
        
    } 
header("Location: ../adminFounderDesk.php?result=$statusMsg");

} else {
    header("Location: ../");

}
 
// Display status message 
// echo $statusMsg; 




?>
