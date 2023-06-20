<?php include_once './server/cImage.php'; ?>

<div class="">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol style="z-index: 1 !important;" class="carousel-indicators" >

  <li data-target="#carouselExampleIndicators"  data-slide-to="0" class="active"></li>
<?php for ($i=1; $i < $row_cnt; $i++) { ?>
  <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>"></li>
<?php
} ?>

    
    
   
  
  </ol>

  
  <div  class="carousel-inner" >

  <div class="carousel-item active">
             <?php if($res_imgC != FALSE && $res_imgC->num_rows > 0) { 
              $row_imgik = $res_imgC->fetch_assoc();
              } ?>
                  
        
          <img class="img-size" class="d-block w-100" src="data:image/png;base64,<?php echo base64_encode($row_imgik['img_file']); ?>" loading="lazy">
   
      
      </div>

  <?php 
                
                if($res_imgC != FALSE && $res_imgC->num_rows > 0) {
                    while ($row_imgi = $res_imgC->fetch_assoc()) {
                        ?>
                       <div class="carousel-item">
                       <img class="img-size" class="d-block w-100" src="data:image/png;base64,<?php echo base64_encode($row_imgi['img_file']); ?>" loading="lazy">
   
    </div>
                        <?php
                    }
                }
                
                ?> 

    
  
  </div>
  <a style="z-index: 0; color: #36da51;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <!-- <span  class="carousel-control-prev-icon" aria-hidden="true"></span> -->
    <span class="fa fa-chevron-left fa-lg" style="color:#62C464;"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a style="z-index: 0;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
    <span class="fa fa-chevron-right fa-lg" style="color:#62C464;"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
