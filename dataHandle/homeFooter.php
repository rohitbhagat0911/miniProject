<?php include_once 'server/footerDataField.php'; ?>


<div class="ad-addf">
<h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Update Content</h2>
<form action="./server/upFooter.php" method="post" enctype="multipart/form-data">
  <!-- <div class="form-group"> -->

    <label for="heading">Footer Heading</label>
    <input type="text" name="heading" value="<?php echo $footer_data['footer_heading']; ?>" class="form-control mb-3 inputcu" id="heading" placeholder="Heading" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

    <label for="emailid">Email ID</label>
    <input type="text" name="emailid" value="<?php echo $footer_data['email_id']; ?>" class="form-control mb-3 inputcu" id="emailid" placeholder="Email ID" required>
    
    <label for="fphoneno">First Phone No</label>
    <input type="text" name="fphoneno" value="<?php echo $footer_data['p_no1']; ?>" class="form-control mb-3 inputcu" id="fphoneno" placeholder="First Phone No" required>
    
    <label for="sphoneno">Second Phone No</label>
    <input type="text" name="sphoneno" value="<?php echo $footer_data['p_no2']; ?>" class="form-control mb-3 inputcu" id="sphoneno" placeholder="Second Phone No" required>
    
    <label for="flink">Facebok Link</label>
    <input type="text" name="flink" value="<?php echo $footer_data['facebook_link']; ?>" class="form-control mb-3 inputcu" id="flink" placeholder="Facebook Link" required>
    
    <label for="ilink">Instagram Link</label>
    <input type="text" name="ilink" value="<?php echo $footer_data['insta_link']; ?>" class="form-control mb-3 inputcu" id="ilink" placeholder="Instagram Link" required>
    
    <label for="glink">Gmail Link</label>
    <input type="text" name="glink" value="<?php echo $footer_data['gmail_id']; ?>" class="form-control mb-3 inputcu" id="glink" placeholder="Gmail Link" required>
    
  <input type="submit" class="btn btn-success" value="Submit" name="ufsubmit">
</form>