<?php


include_once '../db.php';
$sql = "INSERT INTO senior_player (`state_id`, `player_name`, `statement`, `player_order`) VALUES ('$state_id', '$plname', '$plst', '$plor')";

if ($db->query($sql)) {
    echo "<h1>Successfuly</h1>";
}

// 
// if(!empty($_FILES["image"]["name"])) { 
    
//     $fileName = basename($_FILES["image"]["name"]); 
//     $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
     
     
//     $allowTypes = array('jpg','png','jpeg','gif'); 
//     if(in_array($fileType, $allowTypes)){ 
//         $image = $_FILES['image']['tmp_name']; 
//         $imgContent = addslashes(file_get_contents($image)); 
     
         
//         $insert = $db->query("INSERT INTO senior_player (`player_img`) VALUES ('$imgContent')"); 
         
//         if($insert){ 
//             $status = 'success'; 
//             $statusMsg = "File uploaded successfully."; 
//         }else{ 
//             $statusMsg = "File upload failed, please try again."; 
//         }  
//     }else{ 
//         $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
//     } 
// }



?>

<!-- `state_id`, `player_name`, `player_img`, `statement`, `player_order` -->