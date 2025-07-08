<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Weekly Food Menu</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<header><h1>Weekly Mess Menu</h1></header>
<main>
<table>
  <tr>
    <th>Day</th>
    <th>Breakfast</th>
    <th>Lunch</th>
    <th>Dinner</th>
  </tr>
<?php
$res = $conn->query("SELECT * FROM menu");
while ($row = $res->fetch_assoc()) {
  echo "<tr>
          <td>{$row['day']}</td>
          <td>{$row['breakfast']}</td>
          <td>{$row['lunch']}</td>
          <td>{$row['dinner']}</td>
        </tr>";
}
?>
</table>
</main>
</body>
</html>
