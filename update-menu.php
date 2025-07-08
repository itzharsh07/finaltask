<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Menu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>Admin - Update Weekly Menu</h1></header>
<main>
<form method="POST">
  <label>Day:
    <select name="day" required>
      <option>Monday</option><option>Tuesday</option><option>Wednesday</option>
      <option>Thursday</option><option>Friday</option><option>Saturday</option><option>Sunday</option>
    </select>
  </label><br><br>
  Breakfast: <input type="text" name="breakfast" required><br><br>
  Lunch: <input type="text" name="lunch" required><br><br>
  Dinner: <input type="text" name="dinner" required><br><br>
  <input type="submit" name="update" value="Update Menu">
</form>

<?php
if (isset($_POST['update'])) {
  $day = $_POST['day'];
  $breakfast = $_POST['breakfast'];
  $lunch = $_POST['lunch'];
  $dinner = $_POST['dinner'];

  $check = $conn->query("SELECT * FROM menu WHERE day='$day'");
  if ($check->num_rows > 0) {
    $conn->query("UPDATE menu SET breakfast='$breakfast', lunch='$lunch', dinner='$dinner' WHERE day='$day'");
    echo "<p>✅ Menu for $day updated successfully.</p>";
  } else {
    $conn->query("INSERT INTO menu(day, breakfast, lunch, dinner) VALUES('$day','$breakfast','$lunch','$dinner')");
    echo "<p>✅ Menu for $day added successfully.</p>";
  }
}
?>
</main>
</body>
</html>
