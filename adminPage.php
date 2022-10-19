<?php include_once 'components/upperadmin.php'; 
if ((isset($_SESSION['isLoggedIn']) && $_SESSION['username']) == true):
?>

<div class="class-pos" style="display:block; margin-top:12em;">
    <h2>fedfasf</h2>
</div>


<?php
else:

    if($pageRefreshed == 1)
        header('Location: ./');
    else
         header("Location: pagenotfound.php");
endif;
include_once 'components/loweradmin.php';
?>
