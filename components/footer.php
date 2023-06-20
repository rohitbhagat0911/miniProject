


   <footer class="section bg-footer">
        <div class="container">
            <div class="row">
              

                <div class="text-center">
                    <div class="">
                        <h6 class="pos" class="footer-heading">
                            <?php 
                            
                            include_once 'server/footerdata.php';
                                 if(isset($row_f["id"]) == 1 && $row_f["footer_heading"] == "CONTACT US"){
                                     echo $row_f["footer_heading"];
                                    
                               }
                            ?>
                        </h6>
                        <p class="contact-info mt-4">
                               <?php
                                         if(isset($row_f["id"]) == 1 && $row_f["footer_heading"] == "CONTACT US"){
                                            echo $row_f["email_id"];
                                           
                                      }
                               ?>
                        </p>
                        <p class="contact-info">
                        <?php
                                         if(isset($row_f["id"]) == 1 && $row_f["footer_heading"] == "CONTACT US"){

                                            ?>
                                            <a class="menu-link" href="tel:<?php echo $row_f["p_no1"]; ?>"><?php echo $row_f["p_no1"];?></a>
                                            <?php
                                           
                                      }
                               ?>
                        </p>
                        <p class="contact-info">
                        <?php
                                         if(isset($row_f["id"]) == 1 && $row_f["footer_heading"] == "CONTACT US"){
                                            
                                            ?>
                                            <a class="menu-link" href="tel:<?php echo $row_f["p_no2"]; ?>"><?php echo $row_f["p_no2"];?></a>
                                            <?php
                                           
                                      }
                               ?>
                        </p>
                        <div class="mt-5">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="https://www.facebook.com/YOUNGSHUTTLERSOFSIKKIM/" target="_blank"><i class="fab facebook footer-social-icon fa-facebook-f"></i></i></a></li>
                                <li class="list-inline-item"><a href="https://instagram.com/youngshuttlersofsikkim?igshid=YmMyMTA2M2Y=" target="_blank"><i class="fab instagram footer-social-icon fa-instagram "></i></i></a></li>
                                <li class="list-inline-item"><a href="mailto:youngshuttlersofsikkim@gmail.com?subject=subject&cc=youngshuttlersofsikkim@gmail.com" target="_blank"><i class="fab google footer-social-icon fa-google"></i></i></a></li>
                                <!-- <li class="list-inline-item"><a href="#"><i class="fab instagram footer-social-icon fa-insta"></i></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="text-center mt-5">
            <p class="footer-alt mb-0 f-14"><a class="developer-a" href="./developer.php" target="_blank">2022 © All Rights Reserved by Rohit Kr. Bhagat &amp; Shekhar Sharma</a></p>
        </div>
    </footer>