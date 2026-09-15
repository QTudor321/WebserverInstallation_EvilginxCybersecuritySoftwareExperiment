<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'labuser');
define('DB_PASS', 'labpass123');
define('DB_NAME', 'laboratorywebdatabase');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if (!$conn) {
    die('Error connecting to the database: ' . mysqli_connect_error());
}

date_default_timezone_set('America/New_York');
?>