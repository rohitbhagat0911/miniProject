<div class="ad-addf">
                <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Member Details</h2>
                <form action="./server/mDataAdd.php" method="post" enctype="multipart/form-data">
    
                        <label for="stateid">State ID</label>
                        <input type="text" name="stateid" class="form-control mb-3 inputcu" id="stateid" placeholder="State ID" required>
                        
                        <label for="membername">Member Name</label>
                        <input type="text" name="mname" class="form-control mb-3 inputcu" id="membername" placeholder="Member Name" required>
                        
                        <label for="memberpicture">Member Picture</label>
                        <input type="file" accept="image/*" name="image" class="form-control  mb-3 inputcu" id="memberpicture" aria-describedby="memberPicture" placeholder="Member Picture" required>
                    
                        <label for="dob">Date of Birth</label>
                        <input type="text" name="dob" class="form-control  mb-3 inputcu" id="dob" aria-describedby="dob" placeholder="Date of Birth" required>
                    
                        <label for="gender">Gender</label>
                        <input type="text" name="gender" class="form-control  mb-3 inputcu" id="gender" aria-describedby="gender" placeholder="Gender" required>

                        <label for="association">Association</label>
                        <input type="text" name="assoc" class="form-control  mb-3 inputcu" id="association" aria-describedby="association" placeholder="Association" required>
                        
                        <label for="phoneno">Phone Number</label>
                        <input type="text" name="number" class="form-control  mb-3 inputcu" id="phoneno" aria-describedby="phoneno" placeholder="Phone Number" required>

                        <label for="baiid">BAI ID</label>
                        <input type="text" name="bid" class="form-control  mb-3 inputcu" id="baiid" aria-describedby="baiid" placeholder="BAI ID" required>

                        <label for="achivement">Achivement</label>
                        <textarea class="form-control mb-3 inputcu" name="achi" id="achivement" rows="4"></textarea>
                
                    <input type="submit" value="Submit" class="btn btn-success" name="admsubmit">
                </form>
                </div>