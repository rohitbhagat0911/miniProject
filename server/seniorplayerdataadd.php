<?php
if (isset($_POST["adsubmit"])) {
    $status = $statusMsg = '';

    include_once 'db.php';
    require_once 'imageCompression.php';

    // Establish a database connection using $db (MySQLi object)

    $stateid = $_REQUEST['stateid'];
    $plname = $_REQUEST['plname'];
    $plst = $_REQUEST['plst'];
    $plor = $_REQUEST['plor'];

    $status = 'error';
    if (!empty($_FILES["image"]["name"])) {
        // Get file info
        $fileName = $_FILES["image"]["tmp_name"];
        $fileType = pathinfo($_FILES["image"]["name"], PATHINFO_EXTENSION);

        // Allow certain file formats
        $allowTypes = array('jpg', 'png', 'jpeg');
        if (in_array($fileType, $allowTypes)) {
            $uploaderSeniorPlayerImage = new ImageCompressor();
            $uploaderSeniorPlayerImage->compressImage($fileName);
            $imgContent = addslashes($uploaderSeniorPlayerImage->imageData);

            $sql = "INSERT INTO senior_player (`state_id`, `player_name`, `player_img`, `statement`, `player_order`) VALUES ('$stateid', '$plname', '$imgContent', '$plst', '$plor')";

            $insert = $db->query($sql);

            if ($insert) {
                $status = true;
                $statusMsg = "1";
            } else {
                $statusMsg = "0"; // Provide the specific error message
            }
        } else {
            $statusMsg = "0";
        }
    } else {
        $statusMsg = "0";
    }

    header("Location: ../adminFounderDesk.php?result=$statusMsg");
} else {
    header("Location: ../");
}

?>
