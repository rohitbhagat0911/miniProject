<?php
  

if(isset($_POST["ufsubmit"])){ 

    $statusMsg = ''; 

  include_once 'db.php';


    $heading = $_REQUEST['heading'];
    $emailid = $_REQUEST['emailid'];
    $fphoneno = $_REQUEST['fphoneno'];
    $sphoneno = $_REQUEST['sphoneno'];
    $flink = $_REQUEST['flink'];
    $ilink = $_REQUEST['ilink'];
    $glink = $_REQUEST['glink'];


    $sql = "UPDATE footer SET `footer_heading` = '$heading', `email_id` = '$emailid', `p_no1` = '$fphoneno', `p_no2` = '$sphoneno', `facebook_link` =  '$flink', `insta_link` = '$ilink' , `gmail_id` = '$glink' WHERE `id` = '1'";

            // $insert = $db->query($sql); 
             
            if($db->query($sql)){ 
                 
                $statusMsg = "fu"; 
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
