<?php include_once './server/eDataFieldId.php'; ?>

        <div style="margin-bottom:2.5em; padding-bottom:2em;">
<?php

if($res != FALSE && $res->num_rows > 0) {
    while ($row_event = $res->fetch_assoc()) {

?>
 
<div class="ad-addf">

<form action="./server/eDelete.php" method="post">
   
<input type="hidden" name="deleteid" value="<?php echo $row_event['id']; ?>">

 <input class="form-control inputcu" type="text" placeholder="<?php echo $row_event['event_level']; ?>" readonly>
<input type="submit" name="devent" class="btn btn-outline-success mt-4 inputcu" value="Delete">
</form>
</div>
<?php
    }
}

?>

</div>