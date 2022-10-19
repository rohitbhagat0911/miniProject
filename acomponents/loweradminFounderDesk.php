<?php

else ((isset($_SESSION['isLoggedIn']) && $_SESSION['username']) != true) {

    if($pageRefreshed == 1)
        header('Location: ./index.php');
    else
         header("Location: pagenotfound.php");
}
include_once 'components/loweradmin.php';
?>