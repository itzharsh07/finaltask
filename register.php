<?php include 'db.php'; ?>
<!DOCTYPE html><html><head><title>Register</title><link rel="stylesheet" href="style.css"></head><body>
<header><h1>Register</h1></header>
<main>
<form method="POST">
  Username: <input type="text" name="name" required><br>
  Password: <input type="password" name="password" required><br>
  <input type="submit" name="register" value="Register">
</form>
<?php
if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users(name, password) VALUES('$name','$pass')");
    echo "<p>✅ Registration successful</p>";
}
?>
</main></body></html>
