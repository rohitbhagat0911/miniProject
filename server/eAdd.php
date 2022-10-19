<?php
  

if(isset($_POST["esubmit"])){ 

    $status = $statusMsg = ''; 

  include_once 'db.php';

    $eventn = $_REQUEST['eventn'];
    
    

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
               
            $sql = "INSERT INTO events (`event_level`, `pdf_file`) VALUES ('$eventn', '$pdfContent')";



            // if ($db->query($sql) && isset($_POST['adsubmit'])) {
            //     echo "<h1>Successfuly</h1>";
            // } else {
            //     echo "<h1>failed</h1>";
            // }

            $insert = $db->query($sql); 
             
            if($insert){ 
                $status = true; 
                $statusMsg = "added"; 
            }
            else{ 
                $statusMsg = "addedf"; 
            }  
        }
        else{ 
            $statusMsg = "addedf"; 
        } 
    }
    else{ 
        $statusMsg = "addedf"; 
        
    }
    
    header("Location: ../adminEvents.php?result=$statusMsg");
} else {
    header("Location: ../");
}
 
// Display status message 
// echo $statusMsg; 





?>
