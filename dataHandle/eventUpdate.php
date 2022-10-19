<?php include_once './server/eDataField.php'; ?>


<div class="ad-addf">
        <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Update Event</h2>
            <form action="./server/eUpdate.php" enctype="multipart/form-data" method="post">
                  
            <input type="hidden" name="id" value="<?php echo $_GET['eventid']; ?>" required>

            <label for="eventn">Event Name</label>
            <input type="text" name="eventn" value="<?php echo $row_ED['event_level']; ?>" class="form-control mb-3 inputcu" id="eventn" placeholder="Event Name" required>
                        
            <label for="eventpdf">Event PDF</label>
            <input type="file" name="pdf" accept=".pdf" class="form-control  mb-3 inputcu" id="eventpdf" aria-describedby="eventpdf" placeholder="Event PDF">
                        
            <input type="submit" value="Submit" class="btn btn-success" name="uesubmit">
            </form>
        </div>