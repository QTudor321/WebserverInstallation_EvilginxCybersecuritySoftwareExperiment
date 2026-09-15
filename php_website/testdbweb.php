<?php
require_once('configpage.php');
if($conn){
    echo "Database connection works!";
} else {
    echo "Database connection failed.";
}
?>
