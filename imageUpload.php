<?php
if (isset($_POST['btnSubmit'])) {
    $uploadfile = $_FILES["image"]["tmp_name"];
    $folderPath = "uploads/";
    
    if (! is_writable($folderPath) || ! is_dir($folderPath)) {
        echo "error";
        exit();
    }
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $folderPath . $_FILES["image"]["name"])) {
        echo '<img src="' . $folderPath . "" . $_FILES["image"]["name"] . '" class="preview" height="100px" width="100px">';
        exit();
    }
}
?>