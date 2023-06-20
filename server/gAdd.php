<?php
  

if(isset($_POST["psubmit"])){ 

    $status = $statusMsg = ''; 

  include_once 'db.php';
  require_once 'imageCompression.php';

    $title = $_REQUEST['title'];
    
    $status = 'error'; 
    if (!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = $_FILES["image"]["tmp_name"];
        $fileType = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            $uploaderSeniorPlayerImage = new ImageCompressor();
            $uploaderSeniorPlayerImage->compressImage($fileName);
            $imgContent = addslashes($uploaderSeniorPlayerImage->imageData);
         
            // Insert image content into database 

        $sql = "INSERT INTO gallery (`img_title`, `img_file`) VALUES ('$title', '$imgContent')";

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
header("Location: ../adminGallery.php?result=$statusMsg");

} else {
    header("Location: ../");

}
 
// Display status message 
// echo $statusMsg; 




?>
