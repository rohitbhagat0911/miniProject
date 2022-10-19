<?php include_once 'upperindex.php';
     ?>
     <?php include_once 'server/seniorplayerdata.php';
     include_once 'server/founderdata.php'; ?>

          
<div class="content-pos" style="display:block; margin-top: 12em;">
         
         <!--  -->
         <div class="wrapper">
                 <!-- Sidebar  -->
                 <nav class="left-navpr" id="sidebar">

                 <div  class="sidebar-header">
                         <h3>Founder</h3>
                     </div>

                     <ul class="list-unstyled components">
                      
                     <li>
    <a class="menu-link"  href="./founderdesk.php"><?php echo $row_founder['founder_name']; ?></a>
</li> 

                    
                                                 

                     </ul>


                     <div  class="sidebar-header">
                         <h3>Senoir Player Statement</h3>
                     </div>
         
                     <ul class="list-unstyled components">
                      
                     <?php //include_once 'seniorPlayerList.php'; 
                     
                     if($resforsenior != FALSE && $resforsenior->num_rows > 0) {
                        while ($row_senior = $resforsenior->fetch_assoc()) {
                            ?>
                            <li>
                    <a class="menu-link"  href="?name=<?php echo $row_senior['player_name']; ?>"><?php echo $row_senior['player_name']; ?></a>
                </li>  
                            <?php
                        }
                    } 
                     
                     ?>

                     
                                                 

                     </ul>
         
                     <ul class="list-unstyled CTAs">
                         <li></li>
                     </ul>
                 </nav>
         
                 <!-- Page Content  -->
                 <div id="content">
         
                     <nav class="navbar navbar-expand-lg navbar-light bg-light">
                         <div class="container-fluid">
         
                             <button type="button" id="sidebarCollapse" class="btn btn-info">
                                 <i class="fas fa-align-left"></i>
                                 <span>Statements</span>
                             </button>
                           
                           
                            
         
                             
                         </div>
                     </nav>
                     



         