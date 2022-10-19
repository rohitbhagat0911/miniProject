<div class="ad-addf">
                <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Add Event</h2>
                <form action="./server/eAdd.php" enctype="multipart/form-data" method="post">
                    
                    <label for="eventn">Name</label>
                    <input type="text" name="eventn" class="form-control mb-3 inputcu" id="eventn" placeholder="Event Name" required>
                    
                    <label for="eventpdf">Event PDF</label>
                    <input type="file" name="pdf" accept=".pdf" class="form-control  mb-3 inputcu" id="eventpdf" aria-describedby="eventpdf" placeholder="Event PDF" required>
                    
                <input type="submit" value="Submit" class="btn btn-success" name="esubmit">
            </form>
</div>