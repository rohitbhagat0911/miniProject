<?php include_once './server/gDataField.php'; ?>

<div class="ad-addf">
     <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Update Gallery</h2>
     <form action="./server/gUpdate.php" method="post" enctype="multipart/form-data">

     <input type="hidden" name="imageid" value="<?php echo $_GET['imageid']; ?>">

             <label for="title">Title</label>
            <input type="text" name="title" value="<?php echo $row_idetails['img_title']; ?>" class="form-control mb-3 inputcu" id="title" placeholder="Title" required>

            <label for="image">Image File</label>
            <input type="file" name="image" accept="image/*" class="form-control  mb-3 inputcu" id="image">
                
                
            <input type="submit" value="Submit" class="btn btn-success" name="iusubmit">
            </form>
           </div>