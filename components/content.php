<div class="content-pos" >



<div style="display:block; margin-top: 12em !important; margin-bottom: 4em" class="content-align">

  <?php include_once "carousel.php"; ?>

</div>


<div class="content-align">
    <h2><?php 
    if($row["id"] == 1){
            echo $row["header_name"];
            
    }
        ?>
    </h2>

    <div class="content-body" style="padding-bottom: 4em;">
      <p><?php 
    if($row["id"] == 1){        
            echo $row["content_txt"];
    }
        ?>
      </p>
        </div>
</div>

</div>