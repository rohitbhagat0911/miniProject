<?php include_once './components/upperindex.php'; ?>
<?php include_once 'server/gallerydata.php'?>

<div class="content-pos gallery-pos" style="">
   

    <?php 
                if($res_gallery != FALSE && $res_gallery->num_rows > 0) {
                    while ($row_galData = $res_gallery->fetch_assoc()) {
                        ?>
                         <div class="gallery-border">
                        <img loading="lazy" class="pass-gal" src="data:image/png;base64,<?php echo base64_encode($row_galData['img_file']); ?>" />
                    <?php

                    if ($row_galData['img_title'] != null) {
                        ?>
                        <div class="overlay-gallery"><?php echo $row_galData['img_title']; ?></div>
                        <?php
                    }

                    ?>

                          </div>
                         <?php
                    }
                }
                
                ?> 
        

        






   
</div>

<?php include_once './components/lowerindex.php'; ?>
