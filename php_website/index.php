<?php
session_start();
require_once('configpage.php');

$username = '';
$session_token = '';

if(!isset($_SESSION['username']) && !isset($_COOKIE['session_token'])){
  header("Location: loginpage.php");
  exit();
}

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}

if (isset($_COOKIE['session_token'])) {
    $session_token = $_COOKIE['session_token'];

    $result = mysqli_query($conn, "SELECT * FROM sessions WHERE session_token='$session_token'");

    if (mysqli_num_rows($result) == 0) {
        header("Location: loginpage.php");
        exit();
    }

    $row = mysqli_fetch_assoc($result);
    if (!empty($row['username'])) {
        $username = $row['username'];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome <?php echo htmlspecialchars($username); ?></h2><br>
    <h3>Token <?php echo htmlspecialchars($session_token); ?></h3><br>
    <a href="logoutpage.php">Logout</a>
</body>
</html>
