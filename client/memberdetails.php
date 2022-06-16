<?php include_once './components/upperdetails.php'; ?>


<?php
                    
                    //  if (isset($_GET['name']) == "Mr. Binod Pradhan") {
                    //         include_once './StatementData/Mr. Binod Pradhan.php';
                           
                    //  } 
                    //  elseif (isset($_GET['name']) == "Miss Prasanna Pradhan") {
                    //     include_once './StatementData/Miss Prasanna Pradhan.php';
                    //  }
                        
                            # code...

                            if (isset($_GET['id']) && $_GET['id'] > 37) {
                                echo "<h1>Sorry, Inoformation is not present. Check the URL</h1>";
                            }
                            

                        elseif (isset($_GET['id'])) {
                                
                            
                        
                    switch ($_GET['id']) {
                        case '1':
                            include_once './MemberDetails/Tamchey Dolma Sherpa.php';
                            break;
                        case '2':
                            include_once './MemberDetails/Tashi Choden Gurung .php';
                            break;
                        case '3':
                            include_once './MemberDetails/Wangyal Lepcha.php';
                            break;
                        case '4':
                            include_once './MemberDetails/Kunzang S Sherpa.php';
                            break;
                        case '5':
                            include_once './MemberDetails/Rewas Rai.php';
                            break;
                        case '6':
                            include_once './MemberDetails/Elvision Thapa.php';
                            break;
                        case '7':
                            include_once './MemberDetails/Umesh Gurung.php';
                            break;
                        case '8':
                            include_once './MemberDetails/Biplow Thapa.php';
                            break;
                        case '9':
                            include_once './MemberDetails/Nayan Rai.php';
                            break;
                        case '10':
                            include_once './MemberDetails/Chozang Lepcha.php';
                            break;
                        case '11':
                            include_once './MemberDetails/Namoot Hang Subba.php';
                            break;
                        case '12':
                            include_once './MemberDetails/Sourav Hazarika.php';
                            break;
                        case '13':
                            include_once './MemberDetails/Semon Limboo.php';
                            break;
                        case '14':
                            include_once './MemberDetails/Lakpa T Sherpa.php';
                            break;
                        case '15':
                            include_once './MemberDetails/Tshering Pintso Sherpa.php';
                            break;
                        case '16':
                            include_once './MemberDetails/Ashish Rai.php';
                            break;
                        case '17':
                            include_once './MemberDetails/Mirak Subba.php';
                            break;
                        case '18':
                            include_once './MemberDetails/Nishan Rai.php';
                            break;
                        case '19':
                            include_once './MemberDetails/Jigmee Dorjee Sherpa.php';
                            break;
                        case '20':
                            include_once './MemberDetails/Ugen Dorjee Lepcha.php';
                            break;
                        case '21':
                            include_once './MemberDetails/Ezra Lepcha.php';
                            break;
                        case '22':
                            include_once './MemberDetails/Pintu Prasad.php';
                            break;
                        case '23':
                            include_once './MemberDetails/Ritez Chettri.php';
                            break;
                        case '24':
                            include_once './MemberDetails/Rinzing Dorjee Lepcha.php';
                            break;
                        case '25':
                            include_once './MemberDetails/Prassana Pradhan.php';
                            break;
                        case '26':
                            include_once './MemberDetails/Tenzing Norzom Bhutia.php'; 
                            break;
                        case '27':
                            include_once './MemberDetails/Pema K Lachungpa.php';
                            break;
                        case '28':
                            include_once './MemberDetails/Daniel Lepcha.php';
                            break;
                        case '29':
                            include_once './MemberDetails/Issac Rai.php';
                            break;
                        case '30':
                            include_once './MemberDetails/Lakshman Prasad.php';
                            break;
                        case '31':
                            include_once './MemberDetails/Bhadur Rai.php';
                            break;
                        case '32':
                            include_once './MemberDetails/Sukanta Das.php';
                            break;
                        case '33':
                            include_once './MemberDetails/Ravi Rai.php';
                            break;
                        case '34':
                            include_once './MemberDetails/Stutie Mandal.php';
                            break;
                        case '35':
                            include_once './MemberDetails/Dawa Ongmu Lepcha.php';
                            break;
                        case '36':
                            include_once './MemberDetails/Tapas Mandal.php';
                            break;
                        case '37':
                            include_once './MemberDetails/Thendup Testen Bhutia.php';
                            break;    
                            
                       
                    
                }
            }
                else {
                    include_once './MemberDetails/Tamchey Dolma Sherpa.php';
                
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

                    
                   
                     
                     <?php include_once './components/lowerdetails.php'; ?>     

         
             