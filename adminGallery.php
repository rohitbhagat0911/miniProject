<?php include_once 'components/upperadmin.php'; 
if ((isset($_SESSION['isLoggedIn']) && $_SESSION['username']) == true):

?>


<div class="class-pos" style="display:block; margin-top:15em;">
    
    <div class="ad-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        
         <ul class="list-unstyled components">
         <div class="ad-btn">
                             <li class="p-2">
                <a class="btn btn-info" href="?name=add" ><i class="fa fa-plus"></i><span> Add</span></a>
            </li>  
                   
            <li class="p-2">
                <a class="btn btn-info"  href="?name=update"><i class="fas fa-edit"></i><span> Update</span></a>
            </li>  

            <li class="p-2">
                <a class="btn btn-info"  href="?name=delete"><i class="fa fa-trash" aria-hidden="true"></i><span> Delete</span></a>
            </li>  
            </div>
        </ul>

       

   
    </nav>

            <?php 
                   
 
            ?>
            

              <?php
                 if (isset($_GET['name'])) {
                    switch ($_GET['name']) {
                        case 'add':
                            include_once 'dataHandle/galleryAdd.php';
                            break;
                        case 'update':
                            include_once 'dataHandle/galleryUpdate.php';
                            break;
              
                        case 'delete':
                            include_once 'dataHandle/galleryDelete.php';
                            break;
                    
                        default:
                        ?>    
                           <h1 class="ad-text">Welcome to the Gallery Panel</h1> 
                        <?php
                            break;

                    }
              } else  if (isset($_GET['imageid'])) {
                     include_once 'dataHandle/galleryUpdateForm.php';  
            } else if (isset($_GET['deleteid'])) {
                include_once 'dataHandle/galleryDeleteId.php';  
       } else if (isset($_GET['result'])) {
                
                    switch ($_GET['result']) {
                        case '0':
                            ?>
                            <h1 class="ad-text">Try Again</h1> 
                            <?php
                            break;
                        case '1':
                            ?>
                            <h1 class="ad-text">Added Successfuly</h1> 
                            <?php
                        break;
                        case 'updated':
                            ?>
                            <h1 class="ad-text">Updated Successfully</h1> 
                            <?php
                            break;
                        case 'fcp':
                            ?>
                            <h1 class="ad-text">Not Updated</h1> 
                            <?php
                            break;
                        case 'deleted':
                            ?>
                            <h1 class="ad-text">Photo Deleted</h1> 
                            <?php
                            break;
                        case 'upspl':
                            ?>
                            <h1 class="ad-text">Data Updated Successfully</h1> 
                            <?php
                            break;
                        case 'fupspl':
                            ?>
                            <h1 class="ad-text">Try Again</h1> 
                            <?php
                            break;
                        
                        
                        default:
                            ?>
                            <h1 class="ad-text">Welcome to the Gallery Panel</h1> 
                            <?php
                            break;
                    }
                
       } else{                
                ?> 
                <h1 class="ad-text">Welcome to the Gallery Panel</h1> 
                <?php
            }
              ?>
                     
                

                    

     </div>
</div>


<?php
else:

    if($pageRefreshed == 1)
        header('Location: ./');
    else
         header("Location: pagenotfound.php");
endif;
include_once 'components/loweradmin.php';
?>
