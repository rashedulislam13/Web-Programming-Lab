<!DOCTYPE html>
<html>
<head>
  <title>Electricity Bill Calculator</title>
</head>
<body>
  <h1>Electricity Bill Calculator</h1>

  <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <label for="units">Units Consumed:</label>
    <input type="number" name="units" id="units">
    <input type="submit" value="Calculate Bill">
  </form>

  <?php
  if (isset($_POST['units'])) {
    $units = $_POST['units'];

    // Calculate the electricity bill based on the number of units consumed.
    $billAmount = 0;
    if ($units <= 50) {
      $billAmount = $units * 3.50;
    } elseif ($units <= 100) {
      $billAmount = 50 * 3.50 + ($units - 50) * 4.00;
    } elseif ($units <= 200) {
      $billAmount = 50 * 3.50 + 50 * 4.00 + ($units - 100) * 5.20;
    } else {
      $billAmount = 50 * 3.50 + 50 * 4.00 + 100 * 5.20 + ($units - 200) * 6.50;
    }

    // Display the calculated electricity bill.
    echo "<h2>Calculated Electricity Bill</h2>";
    echo "<p>Your electricity bill for $units units is Taka $billAmount.</p>";
  }
  ?>
</body>
</html>

