<div class="ad-addf">
                <h2 style="text-align:center; color: #4abea7; padding-bottom: 1em;">Carousel Image</h2>
                <form action="./server/cAdder.php" method="post">
                    <div class="form-group">
                    
                    <input type="hidden" name="imageid" value="<?php echo $_GET['imageid']; ?>">

                        <label for="carouselrelation">Add this image in Carousel</label>
                        <input type="text" name="crelation" class="form-control mb-1 inputcu" id="carouselrelation" placeholder="Relation" required>
                        <small id="carouselrelation" class="form-text text-muted mb-3">Answer should be in Yes or No</small>
                            
                        <label for="order">Image Order</label>
                        <input type="number" name="imgorder" min="1" class="form-control  mb-3 inputcu" id="order" aria-describedby="order" placeholder="Image Order">
                    
                    <input type="submit"  value="Submit" class="btn btn-success" name="relation">
                </form>
                </div>