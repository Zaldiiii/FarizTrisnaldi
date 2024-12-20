<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: loginregister.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>Selamat datang, <?php echo htmlspecialchars($_SESSION['username']); ?>!</h1>
    <nav>
        <a href="shop.php">Shop</a> |
        <a href="about.php">About</a> |
        <a href="logout.php">Logout</a>
    </nav>
</body>
</html>
