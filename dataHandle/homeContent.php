<?php include_once 'server/contentDataField.php'; ?>


<div class="ad-addf">
<h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Update Content</h2>
<form action="./server/upContent.php" method="post">
  <!-- <div class="form-group"> -->

    <label for="title">Title</label>
    <input type="text" name="title" value="<?php echo $content_data['header_name']; ?>" class="form-control mb-3 inputcu" id="title" placeholder="Title" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

    <label for="message">Body</label>
    <textarea class="form-control mb-4 inputcu" name="body" id="message" rows="6" required><?php echo $content_data['content_txt']; ?></textarea>
  
    
  <input type="submit" class="btn btn-success" value="Submit" name="ucsubmit">
</form>
</div>