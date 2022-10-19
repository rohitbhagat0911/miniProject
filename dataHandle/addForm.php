<div class="ad-addf">
<h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Senior Player</h2>
<form action="./server/seniorplayerdataadd.php" method="post" enctype="multipart/form-data">
  <!-- <div class="form-group"> -->

    <label for="stateid">State ID</label>
    <input type="text" name="stateid" class="form-control mb-3 inputcu" id="stateid" placeholder="State ID" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

    <label for="playername">Name</label>
    <input type="text" name="plname" class="form-control  mb-3 inputcu" id="playername" aria-describedby="playerName" placeholder="Player Name" required>
  
    <label for="playername">Pictutre</label>
    <input type="file" name="image" accept="image/*" class="form-control  mb-3 inputcu" id="playername" required>
  
    <label for="playerstatement">Statement</label>
    <textarea class="form-control inputcu" name="plst" id="playerstatement" rows="4"></textarea>
  
    <label for="playerorder">Player Order</label>
    <input type="number" min="1" name="plor" class="form-control  mb-3 inputcu" id="playerorder" aria-describedby="playerOrder" placeholder="Player Order" required>
  

  <input type="submit" class="btn btn-success" value="Submit" name="adsubmit">
</form>

<?php

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//   $stateid = $_REQUEST['stateid'];
//   $plname = $_REQUEST['plname'];
//   $image = $_REQUEST['image'];
//   $plst = $_REQUEST['plst'];
//   $plor = $_REQUEST['plor'];

 

//  // include_once 'server/datahandlefd/addinfo.php';
//  include_once '../server/db.php';
//  $sql = "INSERT INTO senior_player (state_id) VALUES ('$stateid')";

// if ($db->query($sql) && isset($_POST['adsubmit'])) {
//     echo "<h1>Successfuly</h1>";
//     header('Location: adminFounderDesk.php?name=add');
// } else {
//   echo "<h1>Failed</h1>";
//   header('Location: adminFounderDesk.php?name=add');
// }

// }
// if(!empty($_FILES["image"]["name"])) { 
   
//   $fileName = basename($_FILES["image"]["name"]); 
//   $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
   
  
//   $allowTypes = array('jpg','png','jpeg','gif'); 
//   if(in_array($fileType, $allowTypes)){ 
//       $image = $_FILES['image']['tmp_name']; 
//       $imgContent = addslashes(file_get_contents($image)); 
   
      
//       $insert = $db->query("INSERT INTO senior_player (`player_img`) VALUES ('$imgContent')"); 
       
//       if($insert){ 
//            $status = 'success'; 
//            $statusMsg = "File uploaded successfully."; 
//       }else{ 
//           $statusMsg = "File upload failed, please try again."; 
//       }  
//   }else{ 
//       $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
//   } 
// }



?>


</div>

<!-- </div> -->



<!-- 
<form action="<?php //echo $_SERVER['PHP_SELF'];?>" method="post" >
  <div class="form-group">

    <label for="stateid"> State ID</label>
    <input type="text" name="stateid" class="form-control mb-3" id="stateid" placeholder="State ID">
    

    <label for="playername">Player Name</label>
    <input type="text" name="plname" class="form-control  mb-3" id="playername" aria-describedby="playerName" placeholder="Player Name">
  
    <label for="playername">Player Pictutre</label>
    <input type="file" name="plpicture" accept="image/*" class="form-control  mb-3" id="playername">
  
    <label for="playerstatement">Player Statement</label>
    <textarea class="form-control" name="plst" id="playerstatement" rows="4"></textarea>
  
    <label for="playerorder">Player Pictutre</label>
    <input type="number" min="1" class="form-control  mb-3" id="playerorder" aria-describedby="playerOrder" placeholder="Player Order">
  

  <button type="submit" class="btn btn-primary" name="adsubmit">Submit</button>
</form> -->
