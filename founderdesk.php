<?php include_once './components/upperstatement.php'; ?>
<?php include_once 'server/seniorplayerdata.php'; ?>

<?php
        
    if (isset($_GET['name'])) {
     
             if($rfs != FALSE && $rfs->num_rows > 0) {
             while ($row_senData = $rfs->fetch_assoc()) {
                
            if( $_GET['name'] == $row_senData['player_name']) {
                 ?>
               <h2 class="content-align"><?php echo $row_senData['player_name']; ?></h2>
               

                <img loading="lazy" class="pass-photo" src="data:image/png;base64,<?php echo base64_encode($row_senData['player_img']); ?>" />
                
                    
              
                <?php
                echo "State ID: ". $row_senData['state_id']. "<br><br>";
                echo $row_senData['statement']; 
                      
                }     
            }
        }
    } else {
         include_once './Founder/Thendup Tseten Bhutia.php';
    }
    
                   
                     ?>

                    
                   
                     
                     <?php include_once './components/lowerstatement.php'; ?>     