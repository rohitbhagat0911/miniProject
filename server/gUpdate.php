<?php
  

if(isset($_POST["iusubmit"])){ 

    $status = $statusMsg = ''; 

  include_once 'db.php';
  require_once 'imageCompression.php';

    $title = $_REQUEST['title'];
    $imageid = $_REQUEST['imageid'];
    


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

            $sql = "UPDATE gallery SET `img_title` = '$title', `img_file` = '$imgContent' WHERE id = '$imageid'";


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
        $sql = "UPDATE gallery SET `img_title` = '$title' WHERE id = '$imageid'";

        if ($db->query($sql)) {
             $statusMsg = "upspl";
        } else {
            $statusMsg = "fupspl";
        }
    } 
header("Location: ../adminGallery.php?result=$statusMsg");

} else {
    header("Location: ../");

}
 
// Display status message 
//  echo $statusMsg; 




?>
