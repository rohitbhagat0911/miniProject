<?php
  

if(isset($_POST["ucsubmit"])){
    $statusMsg = ''; 

  include_once 'db.php';
 

    $title = $_REQUEST['title'];
    $body = $_REQUEST['body'];
    
    $sql = "UPDATE content SET `header_name` = '$title', `content_txt` = '$body' WHERE `id` = '1'";

            // $insert = $db->query($sql); 
             
            if($db->query($sql)){ 
                 
                $statusMsg = "cp"; 
            }
            else{ 
                $statusMsg = "fcp"; 
            }
header("Location: ../adminHome.php?result=$statusMsg");

} else {
    header("Location: ../");
}
 
// Display status message 
// echo $statusMsg; 




?>
