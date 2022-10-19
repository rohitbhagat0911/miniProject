<?php if (isset($_GET['name']) && $_GET['name'] == "memid") { ?>

<div class="ad-addf">
    
    <form class="form-inline" action="./server/memberDV.php" method="post">
                 
      <input type="text" class="form-control mr-sm-2 inputcu" name="searchid" placeholder="State ID" aria-label="Search" required>
      <input type="submit" value="Submit" name="idsubmit" class="btn btn-outline-success my-2 my-sm-0">
      
    </form>
                  
  
      </div>


<?php } ?>