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
                <a class="btn btn-info"  href="?name=update"><i class="fas fa-edit"></i> <span> Update</span></a>
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
                            include_once 'dataHandle/addForm.php';
                            break;
                        case 'update':
                            include_once 'dataHandle/updateForm.php';
                            break;
                        case 'updates':
                            include_once 'dataHandle/updateForm.php';
                            break;                            
                        case 'member':
                            include_once 'dataHandle/updateForm.php';
                            break;
                        case 'founder':
                            include_once 'dataHandle/updateForm.php';
                            break;
                        case 'delete':
                            include_once 'dataHandle/deleteForm.php';
                            break;
                    
                        default:
                        ?>    
                           <h1 class="ad-text">Welcome to the Founder Desk</h1> 
                        <?php
                            break;

                    }
              } else  if (isset($_GET['searchid'])) {
                     include_once 'dataHandle/updatesForm.php';  
            } else if (isset($_GET['deleteid'])) {
                include_once 'dataHandle/DeleteMember.php';  
       } else if (isset($_GET['result'])) {
                
                    switch ($_GET['result']) {
                        case '0':
                            ?>
                            <h1 class="ad-text">505 Server Error</h1> 
                            <?php
                            break;
                        case '1':
                            ?>
                            <h1 class="ad-text">Added Successfully</h1> 
                            <?php
                        break;
                        case 'updated':
                            ?>
                            <h1 class="ad-text">Updated Successfully</h1> 
                            <?php
                            break;
                        case 'updatedf':
                            ?>
                            <h1 class="ad-text">505 Server Error</h1> 
                            <?php
                            break;
                        case 'null':
                            ?>
                            <h1 class="ad-text">State Id is not exist</h1> 
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
                        case 'deleted':
                            ?>
                            <h1 class="ad-text">Deleted Successfuly</h1> 
                            <?php
                            break;
                        
                        default:
                            ?>
                            <h1 class="ad-text">Welcome to the Founder Desk</h1> 
                            <?php
                            break;
                    }
                
       } else{                
                ?> 
                <h1 class="ad-text">Welcome to the Founder Desk</h1> 
                <?php
            }
              ?>
                     
                

                    

     </div>
</div>

<?php
else :
    if($pageRefreshed == 1)
        header('Location: ./');
    else
         header("Location: pagenotfound.php");
endif;
include_once 'components/loweradmin.php';
?>