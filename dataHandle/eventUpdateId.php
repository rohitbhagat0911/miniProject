<?php include_once './server/eDataFieldId.php'; ?>

        <div style="margin-bottom:2.5em; padding-bottom:2em;">
<?php

if($res != FALSE && $res->num_rows > 0) {
    while ($row_event = $res->fetch_assoc()) {

?>

<div class="ad-addf">


<input class="form-control" type="text" placeholder="<?php echo $row_event['event_level']; ?>" readonly>

 <a class="btn btn-outline-success mt-4" href="?eventid=<?php echo $row_event['id']?>">Update</a>

</div>
<?php
    }
}

?>

</div>