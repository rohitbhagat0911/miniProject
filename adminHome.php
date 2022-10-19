<?php include_once 'components/upperadmin.php'; 
if ((isset($_SESSION['isLoggedIn']) && $_SESSION['username']) == true):
?>


<div class="class-pos" style="display:block; margin-top:15em;">
    
    <div class="ad-container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        
         <ul class="list-unstyled components">
         <div class="ad-btn">
                             <li class="p-2">
                <a class="btn btn-info" href="?name=carousel" ><span> Carousel</span></a>
            </li>  
                   
            <li class="p-2">
                <a class="btn btn-info"  href="?name=content"><span> Content</span></a>
            </li>  

            <li class="p-2">
                <a class="btn btn-info"  href="?name=footer"></i><span> Footer</span></a>
            </li>  
            </div>
        </ul>

        <!-- <form action="<?php //echo $_SERVER['PHP_SELF'];?>" method="post">
    
       
        <input type="submit" value="ADD" name="add" id="sidebarCollapse" class="btn btn-info">
        <input type="submit" value="Update" name="upd" id="sidebarCollapse" class="btn btn-info">
                        
                        
                    
    
    </form> -->

   
    </nav>

            <?php 
                   
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $_SESSION['add'] = $_REQUEST['add'];
//     $_SESSION['update'] = $_REQUEST['upd'];
//     if ($_SESSION['add']) {
//         include_once 'dataHandle/addForm.php';
//     } elseif ($_SESSION['update']) {
//         include_once 'dataHandle/updateForm.php';
//     }
// } 
            ?>
            

              <?php
                 if (isset($_GET['name'])) {
                    switch ($_GET['name']) {
                        case 'carousel':
                            include_once 'dataHandle/homeCarousel.php';
                            break;
                        case 'content':
                            include_once 'dataHandle/homeContent.php';
                            break;
                        // case 'update':
                        //     include_once 'dataHandle/updateMember.php';
                        //     break;
                        // case 'updates':
                        //     include_once 'dataHandle/updateForm.php';
                        //     break;                            
                        // case 'member':
                        //     include_once 'dataHandle/updateForm.php';
                        //     break;
                        // case 'founder':
                        //     include_once 'dataHandle/updateForm.php';
                        //     break;
                        case 'footer':
                            include_once 'dataHandle/homeFooter.php';
                            break;
                    
                        default:
                        ?>    
                           <h1 class="ad-text">Welcome to the Admin Panel</h1> 
                        <?php
                            break;

                    }
              } else  if (isset($_GET['imageid'])) {
                     include_once 'dataHandle/carouselAdder.php';  
            } else if (isset($_GET['deleteid'])) {
                include_once 'dataHandle/DeleteMember.php';  
       } else if (isset($_GET['result'])) {
                
                    switch ($_GET['result']) {
                        case 'eimo':
                            ?>
                            <h1 class="ad-text">Enter Image Order</h1> 
                            <?php
                            break;
                        case 'cp':
                            ?>
                            <h1 class="ad-text">Content Updated</h1> 
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
                        case 'fu':
                            ?>
                            <h1 class="ad-text">Footer Updated</h1> 
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
                        case 'invalid':
                            ?>
                            <h1 class="ad-text">Answer should ne in Yes or No</h1> 
                            <?php
                            break;
                        
                        default:
                            ?>
                            <h1 class="ad-text">Welcome to the Admin Panel</h1> 
                            <?php
                            break;
                    }
                
       } else{                
                ?> 
                <h1 class="ad-text">Welcome to the Admin Panel</h1> 
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
