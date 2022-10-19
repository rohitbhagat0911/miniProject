<?php
  

if(isset($_POST["adsubmit"])){ 
    
$status = $statusMsg = ''; 

include_once 'db.php';

    $stateid = $_REQUEST['stateid'];
    $plname = $_REQUEST['plname'];
    $plst = $_REQUEST['plst'];
    $plor = $_REQUEST['plor'];
    
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

            $sql = "INSERT INTO senior_player (`state_id`, `player_name`, `player_img` ,`statement`, `player_order`) VALUES ('$stateid', '$plname', '$imgContent' ,'$plst', '$plor')";

            

            // if ($db->query($sql) && isset($_POST['adsubmit'])) {
            //     echo "<h1>Successfuly</h1>";
            // } else {
            //     echo "<h1>failed</h1>";
            // }

            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = true; 
                $statusMsg = "1"; 
            }
            else{ 
                $statusMsg = "0"; 
            }  
        }
        else{ 
            $statusMsg = "0"; 
        } 
    }
    else{ 
        
        $statusMsg = "0"; 
        
    } 
header("Location: ../adminFounderDesk.php?result=$statusMsg");

} else {
    header("Location: ../");

}
 
// Display status message 
// echo $statusMsg; 




?>
