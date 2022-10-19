<?php
  

if(isset($_POST["uesubmit"])){ 
    $status = $statusMsg = ''; 

  include_once 'db.php';

    $eventn = $_REQUEST['eventn'];
    $id = $_REQUEST['id'];

    $status = 'error'; 
    if(!empty($_FILES["pdf"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["pdf"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
       
        // Allow certain file formats 
        $allowTypes = array('pdf'); 
        if(in_array($fileType, $allowTypes)){ 
            $pdf = $_FILES['pdf']['tmp_name']; 
            $pdfContent = addslashes(file_get_contents($pdf)); 
         
            // Insert image content into database 

            $sql = "UPDATE events SET `event_level` = '$eventn', `pdf_file` = '$pdfContent' WHERE id = 1";


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
