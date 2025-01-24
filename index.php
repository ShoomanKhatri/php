<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form method="get">
  Name: <input type="text" name="name">
  Password: <input type="password" name="password">
  <input type="submit" value="Submit">
</form>

<?php
  if (isset($_GET['name']) && isset($_GET['password'])) {
    $name = $_GET['name'];
    $password = $_GET['password'];
    echo "Hello, $name! Your password is $password.";
  }
?>

</body>
</html>
