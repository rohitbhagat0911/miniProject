    <?php
      session_start();

    ?>
         <div>
          <header class="header">
       
        <input class="menu-btn" type="checkbox" id="menu-btn"  />
        <label class="menu-icon" for="menu-btn"><span class="nav-icon"></span></label>
        <ul class="menu">
            <li><a class="menu-link" href="<?php echo $a = (isset($_SESSION['isLoggedIn'])) ? "./adminHome.php" : "./"; ?>">Home</a></li>
            <li><a class="menu-link" href="<?php echo $b = (isset($_SESSION['isLoggedIn'])) ? "./adminFounderDesk.php" : "./founderdesk.php"; ?>">Founders Desk
                    
            
            </a>
         
          </li>
           
            <li><a class="menu-link" href="<?php echo $c = (isset($_SESSION['isLoggedIn'])) ? "./adminMemberDetails.php" : "./memberdetails.php"; ?>">Member Details</a></li>

            <li><a class="menu-link" href="<?php echo $d = (isset($_SESSION['isLoggedIn'])) ? "./adminGallery.php" : "./gallery.php"; ?>">Gallery</a></li>
            <li><a class="menu-link" href="<?php echo $e = (isset($_SESSION['isLoggedIn'])) ? "./adminEvents.php" : "./events.php"; ?>">Events</a></li>
            
            <?php
                if (isset($_SESSION['isLoggedIn'])) {
                     ?>
                      <li><a class="menu-link" href="./adminLogout.php">Logout</a></li>
            
                     <?php
                }
            ?>

        </ul>
    </header>

    </div>