<?php
     include_once "./server/memdatafield.php";
?>

<div class="ad-addf">
                <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Update Member Details</h2>
                <form action="./server/mDataUpd.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="reID" value="<?php echo $mem_data['id']; ?>">
                        <label for="stateid">State ID</label>
                        <input type="text" name="stateid" value="<?php echo $mem_data['state_id']; ?>" class="form-control mb-3 inputcu" id="stateid" placeholder="State ID" required>
                        
                        <label for="membername">Member Name</label>
                        <input type="text" name="mname" value="<?php echo $mem_data['member_name']; ?>" class="form-control mb-3 inputcu" id="membername" placeholder="Member Name" required>
                        
                        <label for="memberpicture">Member Picture</label>
                        <input type="file" accept="image/*" name="image" class="form-control  mb-3 inputcu" id="memberpicture" aria-describedby="memberPicture" placeholder="Founder Picture">
                    
                        <label for="dob">Date of Birth</label>
                        <input type="text" name="dob" value="<?php echo $mem_data['date_of_birth']; ?>" class="form-control  mb-3 inputcu" id="dob" aria-describedby="dob" placeholder="Date of Birth" required>
                    
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" value="<?php echo $mem_data['gender']; ?>" class="form-control  mb-3 inputcu" id="gender" aria-describedby="gender" placeholder="Gender" required>

                        <label for="association">Association</label>
                        <input type="text" name="assoc" value="<?php echo $mem_data['association']; ?>" class="form-control  mb-3 inputcu" id="association" aria-describedby="association" placeholder="Association" required>
                        
                        <label for="phoneno">Phone Number</label>
                        <input type="text" name="number" value="<?php echo $mem_data['phone_no']; ?>" class="form-control  mb-3 inputcu" id="phoneno" aria-describedby="phoneno" placeholder="Phone Number" required>

                        <label for="baiid">BAI ID</label>
                        <input type="text" name="baid" value="<?php echo $mem_data['bai_id']; ?>" class="form-control  mb-3 inputcu" id="baiid" aria-describedby="baiid" placeholder="BAI ID" required>

                        <label for="achivement">Achivement</label>
                        <textarea class="form-control mb-3 inputcu" name="achi" id="achivement" rows="4"><?php echo $mem_data['achivement']; ?></textarea>
                
                    <input type="submit" value="Submit" class="btn btn-success" name="admsubmit">
                </form>
                </div>
