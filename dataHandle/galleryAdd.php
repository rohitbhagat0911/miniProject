<div class="ad-addf">
<h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Add Picture</h2>
<form action="./server/gAdd.php" method="post" enctype="multipart/form-data">
  <!-- <div class="form-group"> -->

    <label for="title">Title</label>
    <input type="text" name="title" class="form-control mb-3 inputcu" id="title" placeholder="Title" required>
    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->

    <label for="image">Image File</label>
    <input type="file" name="image" accept="image/*" class="form-control  mb-3 inputcu" id="image" required>
  
  <input type="submit" class="btn btn-success" value="Submit" name="psubmit">
</form>