<?php include_once 'upperindex.php'; ?>
<?php include_once 'server/memberData.php'?>
          
          <div class="content-pos" style="display:block; margin-top: 12em;">
         
<!--  -->
<div class="wrapper">
        <!-- Sidebar height: 140vh;  -->
        <nav class="left-navpr" id="sidebar">
            <div class="sidebar-header">
                <h3>Members</h3>
            </div>

            <ul class="list-unstyled components">
                <?php //include_once 'membersList.php'; 
                
                if($res_member != FALSE && $res_member->num_rows > 0) {
                    while ($row_mem = $res_member->fetch_assoc()) {
                        ?>
                        <li>
                <a class="menu-link"  href="?stateid=<?php echo $row_mem['state_id']; ?>"><?php echo $row_mem['member_name']; ?></a>
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
                        <span>Member Details</span>
                    </button>
                  
                  
                   

                    
                </div>
            </nav>