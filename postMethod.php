<!DOCTYPE html>
<html>
<body>

<h2>Odd or Even Checker</h2>

<form method="post">
  Enter a number: <input type="number" name="number">
  <input type="submit" value="Check">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $number = $_POST['number'];
    
    if ($number % 2 == 0) {
        echo "<p>$number is an even number.</p>";
    } else {
        echo "<p>$number is an odd number.</p>";
    }
}
?>

</body>
</html>
