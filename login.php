<?php include 'db.php'; session_start(); ?>
<!DOCTYPE html><html><head><title>Login</title><link rel="stylesheet" href="style.css"></head><body>
<header><h1>Login</h1></header>
<main>
<form method="POST">
  Username: <input type="text" name="name" required><br>
  Password: <input type="password" name="password" required><br>
  <input type="submit" name="login" value="Login">
</form>
<?php
if (isset($_POST['login'])) {
    $name = $_POST['name'];
    $pass = $_POST['password'];
    $res = $conn->query("SELECT * FROM users WHERE name='$name'");
    $row = $res->fetch_assoc();
    if ($row && password_verify($pass, $row['password'])) {
        $_SESSION['user'] = $row['name'];
        echo "<p>✅ Logged in successfully</p>";
        header("Location: dashboard.php");
    } else {
        echo "<p>❌ Invalid credentials</p>";
    }
}
?>
</main></body></html>
