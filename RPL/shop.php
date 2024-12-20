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
    <title>Shop</title>
</head>
<body>
    <h1>Halaman Toko</h1>
    <p>Selamat berbelanja, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <a href="home.php">Kembali ke Home</a>
</body>
</html>
