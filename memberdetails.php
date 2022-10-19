<?php include_once './components/upperdetails.php'; ?>
<?php include_once 'server/memberData.php'; ?>

<?php
             
             if (isset($_GET['stateid'])) {
     
                if($res_memData != FALSE && $res_memData->num_rows > 0) {
                while ($row_mData = $res_memData->fetch_assoc()) {
                   
               if( $_GET['stateid'] == $row_mData['state_id']) {
                    ?>
                  <h2 class="content-align"><?php echo $row_mData['member_name']; ?></h2>
                  
   
                   <img class="pass-photo" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_mData['member_photo']); ?>" />
                      
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
              

               <img class="pass-photo" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row_Data['member_photo']); ?>" />
               
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
   

                   
<?php
            //                 if (isset($_GET['id']) && $_GET['id'] > 37) {
            //                     echo "<h1>Sorry, Inoformation is not present. Check the URL</h1>";
            //                 }
                            

            //             elseif (isset($_GET['id'])) {
                                
                            
                        
            //         switch ($_GET['id']) {
            //             case '1':
            //                 include_once './MemberDetails/Tamchey Dolma Sherpa.php';
            //                 break;
            //             case '2':
            //                 include_once './MemberDetails/Tashi Choden Gurung .php';
            //                 break;
            //             case '3':
            //                 include_once './MemberDetails/Wangyal Lepcha.php';
            //                 break;
            //             case '4':
            //                 include_once './MemberDetails/Kunzang S Sherpa.php';
            //                 break;
            //             case '5':
            //                 include_once './MemberDetails/Rewas Rai.php';
            //                 break;
            //             case '6':
            //                 include_once './MemberDetails/Elvision Thapa.php';
            //                 break;
            //             case '7':
            //                 include_once './MemberDetails/Umesh Gurung.php';
            //                 break;
            //             case '8':
            //                 include_once './MemberDetails/Biplow Thapa.php';
            //                 break;
            //             case '9':
            //                 include_once './MemberDetails/Nayan Rai.php';
            //                 break;
            //             case '10':
            //                 include_once './MemberDetails/Chozang Lepcha.php';
            //                 break;
            //             case '11':
            //                 include_once './MemberDetails/Namoot Hang Subba.php';
            //                 break;
            //             case '12':
            //                 include_once './MemberDetails/Sourav Hazarika.php';
            //                 break;
            //             case '13':
            //                 include_once './MemberDetails/Semon Limboo.php';
            //                 break;
            //             case '14':
            //                 include_once './MemberDetails/Lakpa T Sherpa.php';
            //                 break;
            //             case '15':
            //                 include_once './MemberDetails/Tshering Pintso Sherpa.php';
            //                 break;
            //             case '16':
            //                 include_once './MemberDetails/Ashish Rai.php';
            //                 break;
            //             case '17':
            //                 include_once './MemberDetails/Mirak Subba.php';
            //                 break;
            //             case '18':
            //                 include_once './MemberDetails/Nishan Rai.php';
            //                 break;
            //             case '19':
            //                 include_once './MemberDetails/Jigmee Dorjee Sherpa.php';
            //                 break;
            //             case '20':
            //                 include_once './MemberDetails/Ugen Dorjee Lepcha.php';
            //                 break;
            //             case '21':
            //                 include_once './MemberDetails/Ezra Lepcha.php';
            //                 break;
            //             case '22':
            //                 include_once './MemberDetails/Pintu Prasad.php';
            //                 break;
            //             case '23':
            //                 include_once './MemberDetails/Ritez Chettri.php';
            //                 break;
            //             case '24':
            //                 include_once './MemberDetails/Rinzing Dorjee Lepcha.php';
            //                 break;
            //             case '25':
            //                 include_once './MemberDetails/Prassana Pradhan.php';
            //                 break;
            //             case '26':
            //                 include_once './MemberDetails/Tenzing Norzom Bhutia.php'; 
            //                 break;
            //             case '27':
            //                 include_once './MemberDetails/Pema K Lachungpa.php';
            //                 break;
            //             case '28':
            //                 include_once './MemberDetails/Daniel Lepcha.php';
            //                 break;
            //             case '29':
            //                 include_once './MemberDetails/Issac Rai.php';
            //                 break;
            //             case '30':
            //                 include_once './MemberDetails/Lakshman Prasad.php';
            //                 break;
            //             case '31':
            //                 include_once './MemberDetails/Bhadur Rai.php';
            //                 break;
            //             case '32':
            //                 include_once './MemberDetails/Sukanta Das.php';
            //                 break;
            //             case '33':
            //                 include_once './MemberDetails/Ravi Rai.php';
            //                 break;
            //             case '34':
            //                 include_once './MemberDetails/Stutie Mandal.php';
            //                 break;
            //             case '35':
            //                 include_once './MemberDetails/Dawa Ongmu Lepcha.php';
            //                 break;
            //             case '36':
            //                 include_once './MemberDetails/Tapas Mandal.php';
            //                 break;
            //             case '37':
            //                 include_once './MemberDetails/Thendup Testen Bhutia.php';
            //                 break;    
                            
                       
                    
            //     }
            // }
            //     else {
            //         include_once './MemberDetails/Tamchey Dolma Sherpa.php';
                
            // }
        
                   
                    // if ($_SERVER['REQUEST_URI'] == '1'){
                    //      include 'page1.php';
                    // }
                    // if ($link == '2'){
                    //     include 'page2.php';
                    // }
                    // if ($link == '3'){
                    //     include 'page3.php';
                    // }
                    // if ($link == '4'){
                    //     include 'page4.php';
                    // }
                     ?>
       
                     
                     <?php include_once './components/lowerdetails.php'; ?>     

         
             