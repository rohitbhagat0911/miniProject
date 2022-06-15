<?php include_once 'upperstatement.php'; ?>


<?php
                    
                    
                            if (isset($_GET['name'])) {
                                
                            
                        
                    switch ($_GET['name']) {
                        case 'Thendup Tseten Bhutia':
                            include_once './Founder/Thendup Tseten Bhutia.php';
                            break;
                        case 'Mr. Binod Pradhan':
                            include_once './StatementData/Mr. Binod Pradhan.php';
                            break;
                        case 'Ms. Prasanna Pradhan':
                            include_once './StatementData/Ms. Prasanna Pradhan.php';
                            break;
                        case 'Mr. Tshering Samdup Bhutia':
                            include_once './StatementData/Mr. Tshering Samdup Bhutia.php';
                            break;
                        case 'Mr. Ravi Rai':
                            include_once './StatementData/Mr. Ravi Rai.php';
                            break;
                        case 'Ms. Tashi Choden Gurung':
                            include_once './StatementData/Ms. Tashi Choden Gurung.php';
                            break;
                        
                       
                    
                }
            }
                else {
                    include_once './Founder/Thendup Tseten Bhutia.php';
                
            }
                   
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

                    
                   
                     
                     <?php include_once 'lowerstatement.php'; ?>     