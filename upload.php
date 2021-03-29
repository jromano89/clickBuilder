<?php
ini_set("display_errors", 1);
ini_set('error_reporting', E_ALL);
$target_dir = "headers/";
$target_file = $target_dir . basename($_FILES["customHeader"]["name"]);
move_uploaded_file($_FILES["customHeader"]["tmp_name"], $target_file);
?>

