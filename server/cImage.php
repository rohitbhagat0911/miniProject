<?php

include_once "db.php";

$sql = "SELECT * FROM gallery WHERE `relation` = 'Yes' ORDER BY img_order ASC";

$res_imgC = $db->query($sql);
// $res_imgf = $db->query($sql);
$row_cnt = $res_imgC->num_rows;

// if($res_imgf != FALSE && $res_imgf->num_rows > 0) { 
//     $row_imgorder = $res_imgf->fetch_assoc()
// }
    //echo $row_cnt;
?>
