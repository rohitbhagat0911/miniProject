<?php
  

if(isset($_POST["upsubmit"])){ 

    $status = $statusMsg = ''; 

  include_once 'db.php';

    $foundername = $_REQUEST['foundername'];
    $fmessgetitle = $_REQUEST['fmessgetitle'];
    $plor = $_REQUEST['fmessage'];


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

            $sql = "UPDATE founder SET `founder_name` = '$foundername', `founder_img` = '$imgContent', `message_title` = '$fmessgetitle', `founder_message` = '$plor' WHERE id = 1";


            // if ($db->query($sql) && isset($_POST['adsubmit'])) {
            //     echo "<h1>Successfuly</h1>";
            // } else {
            //     echo "<h1>failed</h1>";
            // }

            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = true; 
                $statusMsg = "updated"; 
            }
            else{ 
                $statusMsg = "updatedf"; 
            }  
        }
        else{ 
            $statusMsg = "updatedf"; 
        } 
    }
    else{ 
        $sql = "UPDATE founder SET `founder_name` = '$foundername', `message_title` = '$fmessgetitle', `founder_message` = '$plor' WHERE id = 1";

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
//  echo $statusMsg; 




?>
