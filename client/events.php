<?php include_once './components/upperevent.php'; ?>



<?php
                    
                    
                            if (isset($_GET['event'])) {
                                
                            
                        
                    switch ($_GET['event']) {
                        case 'state':
                            include_once './Event/state.php';
                            break;
                        case 'national':
                            include_once './Event/national.php';
                            break;
                       
                        
                       
                    
                }
            }
                else {
                    include_once './Event/state.php';
                
            }

            ?>
                   


<?php include_once './components/lowerevent.php'; ?>