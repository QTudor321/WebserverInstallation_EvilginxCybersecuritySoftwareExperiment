<?php
session_start();
require_once('configpage.php');
$username = $_SESSION['username'];
$session_id = session_id();
$sql = "DELETE FROM sessions WHERE username='$username' AND session_id='$session_id'";
$result = mysqli_query($conn, $sql);
if (!$result) {
    die('Error deleting session data: ' . mysqli_error($conn));
}

setcookie('user', '', time() - 3600, '/');

session_unset();
session_destroy();

header('Location: loginpage.php');
exit;
?>