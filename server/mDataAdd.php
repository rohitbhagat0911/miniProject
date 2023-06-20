<?php
  

if(isset($_POST["admsubmit"])){ 

    $status = $statusMsg = ''; 
    include_once 'db.php';
    require_once 'imageCompression.php';

    $stateid = $_REQUEST['stateid'];
    $mname = $_REQUEST['mname'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $assoc = $_REQUEST['assoc'];
    $number = $_REQUEST['number'];
    $bid = $_REQUEST['bid'];
    $achi = $_REQUEST['achi'];
    
    $status = 'error'; 
    if (!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = $_FILES["image"]["tmp_name"];
        $fileType = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            $uploaderMemberImage = new ImageCompressor();
            $uploaderMemberImage->compressImage($fileName);
            $imgContent = addslashes($uploaderMemberImage->imageData);
         
            // Insert image content into database 

        $sql = "INSERT INTO members (`state_id`, `member_name`, `member_photo` ,`date_of_birth`, `gender`, `association`, `phone_no`, `bai_id`, `achivement`) VALUES ('$stateid', '$mname', '$imgContent' ,'$dob', '$gender', '$assoc', '$number', '$bid', '$achi')";

            

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
header("Location: ../adminMemberDetails.php?result=$statusMsg");
} else {
    header("Location: ../");
    
}
 
// Display status message 
// echo $statusMsg; 




?>
