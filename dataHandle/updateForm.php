<?php


if (isset($_GET['name']) && $_GET['name'] == "update") {
     
    
     
     ?>

    <ul class="list-unstyled components">
         <div class="ad-upbtn" >
            <li>
                <a class="btn btn-info"  href="?name=founder">Update Founder Details</a>
            </li>  
            <li>
                <a class="btn btn-info"  href="?name=member">Update Senior Player Details</a>
            </li>  
                   
              
            </div>
    </ul>

    <?php
} 
if (isset($_GET['name']) && $_GET['name'] == "founder") {
    include_once './server/fdDataField.php';
        ?>
                <div class="ad-addf">
                <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Founder Details</h2>
                <form action="./server/founderupdate.php" enctype="multipart/form-data" method="post">
                    

                        <label for="foundername">Founder Name</label>
                        <input type="text" name="foundername" value="<?php echo $row_fd['founder_name']; ?>" class="form-control mb-3 inputcu" id="foundername" placeholder="Founder Name" required>
                        
                        <label for="founderpicture">Founder Picture</label>
                        <input type="file" name="image" accept="image/*" class="form-control  mb-3 inputcu" id="founderpicture" aria-describedby="founderPicture" placeholder="Founder Picture">
                    
                        <label for="title">Content Title</label>
                        <input type="text" value="<?php echo $row_fd['message_title']; ?>" name="fmessgetitle" class="form-control  mb-3 inputcu" id="title" aria-describedby="title" placeholder="Content Title" required>
                    
                        <label for="message">Content</label>
                        <textarea name="fmessage" class="form-control mb-3 inputcu" id="message" rows="4" required><?php echo $row_fd['founder_message']; ?></textarea>
                
                    <button type="submit" class="btn btn-success" name="upsubmit">Submit</button>
                </form>
                </div>
        <?php
}

if (isset($_GET['name']) && $_GET['name'] == "member") {
    ?>

        <div class="ad-addf">
        
  <form class="form-inline" action="./server/mDataValidator.php" method="post">
               
    <input type="text" class="form-control mr-sm-2 inputcu" name="searchid" placeholder="State ID" aria-label="Search" required>
    <input type="submit" value="Submit" name="idsubmit" class="btn btn-outline-success my-2 my-sm-0">
    </form>
                

    </div>
        

    <?php
    
    
}








?>
