<?php
session_start();
if(isset($_SESSION['username'])){
  header("Location: index.php");
  exit();
}

if(isset($_POST['username']) && isset($_POST['password'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

  require_once('configpage.php');
  $result = mysqli_query($conn, "SELECT * FROM users WHERE username='$username' AND password='$password'");

  if(mysqli_num_rows($result) == 1){
    $_SESSION['username'] = $username;
    $session_token = session_id() . "cookie";

    mysqli_query($conn, "INSERT INTO sessions (session_id, username, session_token) VALUES ('$session_token', '$username', '$session_token')");

    setcookie("session_token", $session_token, time() + 3600, "/");
    header("Location: index.php");
    exit();
  } else {
    $error = "Invalid username or password";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>LoginX</title>
</head>
<body>
  <h2>Login</h2>
  <?php if(isset($error)){ echo "<p>$error</p>"; } ?>
  <form method="POST" action="/loginpage.php">
    <label>Username:</label><br>
    <input type="text" name="username"><br>
    <label>Password:</label><br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Login">
  </form>
</body>
</html>