<?php include_once './server/carouselImage.php'; ?>

           <div style="margin-bottom:2.5em; padding-bottom:2em;">
<?php

if($res_cimage != FALSE && $res_cimage->num_rows > 0) {
    while ($row_image = $res_cimage->fetch_assoc()) {

?>

<div class="text-center">
    
<img class="a-photo img-fluid" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_image['img_file']); ?>" />

<a class="btn btn-outline-success" href="?imageid=<?php echo $row_image['id']?>">Update</a>

</div>
<?php
    }
}

?>

</div>