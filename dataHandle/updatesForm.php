<?php include_once './server/spdatafield.php'; ?>

<div class="ad-addf">
                <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Member Details</h2>
                <form action="./server/upDataField.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">

                        <label for="stateid">State ID</label>
                        <input type="text" name="stateid" value="<?php echo $sp_data['state_id']; ?>" class="form-control mb-3 inputcu" id="stateid" placeholder="State ID" required>
                        
                        <label for="membername">Member Name</label>
                        <input type="text" name="spname" value="<?php echo $sp_data['player_name']; ?>" class="form-control mb-3 inputcu" id="membername" placeholder="Member Name" required>
                        
                        <label for="memberpicture">Member Picture</label>
                        <input type="file" name="image" accept="image/*" class="form-control  mb-3 inputcu" id="memberpicture" aria-describedby="memberPicture" placeholder="Founder Picture">
                    
                        <label for="statement">Statement</label>
                        <textarea name="stmt" class="form-control mb-3 inputcu" id="statement" rows="4"><?php echo $sp_data['statement']; ?>"</textarea>

                        <label for="playerorder">Player Order</label>
                        <input type="number" min="1" name="pordr" value="<?php echo $sp_data['player_order']; ?>" class="form-control  mb-3 inputcu" id="playerorder" aria-describedby="playerOrder" placeholder="Player Order" required>
  
                
                    <input type="submit" value="Submit" class="btn btn-success" name="upsubmit">
                </form>
                </div>



<!-- 
<div class="ad-addf">
                <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Member Details</h2>
                <form>
                    <div class="form-group">

                        <label for="stateid">State ID</label>
                        <input type="text" value="<?php echo $sp_data['state_id']; ?>" class="form-control mb-3" id="stateid" placeholder="State ID">
                        
                        <label for="membername">Member Name</label>
                        <input type="text" value="<?php echo $sp_data['player_name']; ?>" class="form-control mb-3" id="membername" placeholder="Member Name">
                        
                        <label for="memberpicture">Member Picture</label>
                        <input type="file" accept="image/*" class="form-control  mb-3" id="memberpicture" aria-describedby="memberPicture" placeholder="Founder Picture">
                    
                        <label for="dob">Date of Birth</label>
                        <input type="date" value="<?php echo $sp_data['state_id']; ?>" class="form-control  mb-3" id="dob" aria-describedby="dob" placeholder="Date of Birth">
                    
                        <label for="gender">Gender</label>
                        <input type="text" class="form-control  mb-3" id="gender" aria-describedby="gender" placeholder="Gender">

                        <label for="association">Association</label>
                        <input type="text" class="form-control  mb-3" id="association" aria-describedby="association" placeholder="Association">
                        
                        <label for="phoneno">Phone Number</label>
                        <input type="text" class="form-control  mb-3" id="phoneno" aria-describedby="phoneno" placeholder="Phone Number">

                        <label for="baiid">BAI ID</label>
                        <input type="text" class="form-control  mb-3" id="baiid" aria-describedby="baiid" placeholder="BAI ID">

                        <label for="achivement">Achivement</label>
                        <textarea class="form-control mb-3" id="achivement" rows="4"></textarea>
                
                    <button type="submit" class="btn btn-primary" name="upsubmit">Submit</button>
                </form>
                </div> -->