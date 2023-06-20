<?php include_once './components/upperdetails.php'; ?>
<?php include_once 'server/memberData.php'; ?>

<?php
             
             if (isset($_GET['stateid'])) {
     
                if($res_memData != FALSE && $res_memData->num_rows > 0) {
                while ($row_mData = $res_memData->fetch_assoc()) {
                   
               if( $_GET['stateid'] == $row_mData['state_id']) {
                    ?>
                  <h2 class="content-align"><?php echo $row_mData['member_name']; ?></h2>
                  
   
                   <img loading="lazy" class="pass-photo" src="data:image/png;base64,<?php echo base64_encode($row_mData['member_photo']); ?>" />
                      
                   <p><span>Date of Birth: </span>  <span><?php echo $row_mData['date_of_birth']; ?></span> </p>

                    <p><span>Gender: </span>  <span><?php echo $row_mData['gender']; ?></span> </p>

                    <p><span>Association/Club: </span>  <span><?php echo $row_mData['association']; ?></span> </p>

                    <p><span>Phone Number: </span>  <span><?php echo $row_mData['phone_no']; ?></span> </p>

                    <p><span>State ID: </span>  <span><?php echo $row_mData['state_id']; ?></span> </p>

                    <p><span>BAI ID: </span>  <span><?php echo $row_mData['bai_id']; ?></span> </p>
                   

                   <?php
                    if ($row_mData['achivement'] != NULL) {
                         ?>
                            <h4>Achivement</h4>
                        <ul><?php echo $row_mData['achivement']; ?></ul>

                    <?php
                    }  ?> <?php 
                         
                   }     
               }
           }
       } else {
                
        if($res_memData != FALSE && $res_memData->num_rows > 0) {
            while ($row_Data = $res_memData->fetch_assoc()) {
               
           if( $row_Data['id'] == "1") {
                ?>
              <h2 class="content-align"><?php echo $row_Data['member_name']; ?></h2>
              

               <img loading="lazy" class="pass-photo" src="data:image/png;base64,<?php echo base64_encode($row_Data['member_photo']); ?>" />
               
               <p><span>Date of Birth: </span>  <span><?php echo $row_Data['date_of_birth']; ?></span> </p>

                <p><span>Gender: </span>  <span><?php echo $row_Data['gender']; ?></span> </p>

                <p><span>Association/Club: </span>  <span><?php echo $row_Data['association']; ?></span> </p>

                <p><span>Phone Number: </span>  <span><?php echo $row_Data['phone_no']; ?></span> </p>

                <p><span>State ID: </span>  <span><?php echo $row_Data['state_id']; ?></span> </p>

                <p><span>BAI ID: </span>  <span><?php echo $row_Data['bai_id']; ?></span> </p>
             
               <?php
                if ($row_Data['achivement'] != NULL) {
                     ?>
                        <h4>Achivement</h4>
                    <ul><?php echo $row_Data['achivement']; ?></ul>

                <?php
                } 
                     
               }     
           }
       }


       }
       
                   
                        ?>    
                     
                     <?php include_once './components/lowerdetails.php'; ?>     

         
             