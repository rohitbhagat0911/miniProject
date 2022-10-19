<?php include_once './components/upperevent.php'; ?>
<?php include_once 'server/eventData.php'?>


<?php


if (isset($_GET['event'])) {
     
    if($res_eveData != FALSE && $res_eveData->num_rows > 0) {
    while ($row_eData = $res_eveData->fetch_assoc()) {
       
   if( $_GET['event'] == $row_eData['id']) {
   
    ?>

    <div style="display:block; z-index:0; height: 100%;" >
    <iframe
        src = "data:application/pdf;base64,<?php echo base64_encode($row_eData['pdf_file']); ?>"
        frameBorder="0"
        scrolling="auto"
        height="80%"
        width="100%"
        aria-hidden="true"
    ></iframe>
    </div>

     <?php
             
       }     
   }
}
} else  {
        
    if($res_eveData != FALSE && $res_eveData->num_rows > 0) {
        while ($row_Data = $res_eveData->fetch_assoc()) {
           
       if($row_Data['id'] == "1") {
       
        ?>
    
        <div style="display:block; z-index:0; height: 100%;">
        <iframe
        src = "data:application/pdf;base64,<?php echo base64_encode($row_Data['pdf_file']); ?>"
        frameBorder="0"
        scrolling="auto"
        height="80%"
        width="100%"
        aria-hidden="true"
        ></iframe>
        </div>

         <?php

}


        }
    }
    
}

                    
            //                 if (isset($_GET['event'])) {
                                
                            
                        
            //         switch ($_GET['event']) {
            //             case 'state':
            //                 include_once './Event/state.php';
            //                 break;
            //             case 'national':
            //                 include_once './Event/national.php';
            //                 break;
                       
                        
                       
                    
            //     }
            // }
            //     else {
            //         include_once './Event/state.php';
                
            // }

            ?>
                   


<?php include_once './components/lowerevent.php'; ?>