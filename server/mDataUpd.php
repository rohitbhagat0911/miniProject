<?php
  

if(isset($_POST["admsubmit"])){ 

    $status = $statusMsg = ''; 

  include_once 'db.php';

    $reId = $_REQUEST['reID'];
    $stateid = $_REQUEST['stateid'];
    $mname = $_REQUEST['mname'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $assoc = $_REQUEST['assoc'];
    $number = $_REQUEST['number'];
    $baid = $_REQUEST['baid'];
    $achi = $_REQUEST['achi'];
    
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

            $sql = "UPDATE members SET `state_id` = '$stateid', `member_name` = '$mname', `member_photo` = '$imgContent', `date_of_birth` = '$dob', `gender` = '$gender', `association` = '$assoc', `phone_no` = '$number', `bai_id`= '$baid', `achivement` = '$achi' WHERE `id` = '$reId'";

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
            $statusMsg = "nfupspl"; 
        } 
    }
    else{ 
        
        $sql = "UPDATE members SET `state_id` = '$stateid',  `member_name` = '$mname', `date_of_birth` = '$dob', `gender` = '$gender', `association` = '$assoc', `phone_no` = '$number', `bai_id`= '$baid', `achivement` = '$achi' WHERE `id` = '$reId'";

        if ($db->query($sql)) {
             $statusMsg = "upspl";
        } else {
            $statusMsg = "fupspl";
        }

        //$statusMsg = "ns";
        
    } 
    header("Location: ../adminMemberDetails.php?result=$statusMsg");

} else {
    header("Location: ../");
}
 
// Display status message 
// echo $statusMsg; 




?>
