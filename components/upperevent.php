<?php include_once 'upperindex.php'; ?>
<?php include_once 'server/eventData.php'?>

          
<div class="content-pos" style="display:block; margin-top: 12em;">
         
         <!--  -->
         <div class="wrapper">
                 <!-- Sidebar  -->
                 <nav id="sidebar">



                     


                     <div  class="sidebar-header">
                         <h3>Events</h3>
                     </div>
         
                     <ul class="list-unstyled components">
                      
                     <?php //include_once 'membersList.php'; 
                
                if($res_event != FALSE && $res_event->num_rows > 0) {
                    while ($row_eve = $res_event->fetch_assoc()) {
                        ?>
                        <li>
                <a class="menu-link"  href="?event=<?php echo $row_eve['id']; ?>"><?php echo $row_eve['event_level']; ?></a>
            </li>  
                        <?php
                    }
                }
                
                ?> 


                     <!-- <li>
    <a class="menu-link"  href="?event=state">State Calendar</a>
</li>  
<li>
    <a class="menu-link"  href="?event=national">National Calendar</a>
</li>   -->

                    
                                                 

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
                                 <span>Calendar</span>
                             </button>
                           
                           
                            
         
                             
                         </div>
                     </nav>