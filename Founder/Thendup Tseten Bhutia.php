<?php include_once 'server/founderdata.php'; ?>    
          
      <div>


                
<div class="content-align">

<h2>
    <?php
        if(isset($row_founder["id"]) == 1){
          echo $row_founder["message_title"]; 
        }
      ?>
</h2>

<div class="content-body">

<?php 
  if(isset($row_founder["id"]) == 1){
    ?>
    <img loading="lazy" class="pass-photo" src="data:image/png;base64,<?php echo base64_encode($row_founder['founder_img']); ?>" />
    <?php
  }
?>

<?php
        if(isset($row_founder["id"]) == 1){
          echo $row_founder["founder_message"]; 
        }
      ?>
</div>

</div>


          </div>

     
    
    
