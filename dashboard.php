<?php session_start(); if (!isset($_SESSION['user'])) header("Location: login.php"); ?>
<!DOCTYPE html><html><head><title>Dashboard</title><link rel="stylesheet" href="style.css"></head><body>
<header><h1>Welcome, <?php echo $_SESSION['user']; ?></h1></header>
<nav>
  <a href="menu.php">📋 View Menu</a> |
  <a href="update-menu.php">✏️ Update Menu</a> |
  <a href="logout.php">🚪 Logout</a>
</nav>
</body></html>
