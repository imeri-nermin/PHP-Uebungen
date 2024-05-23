<?php
session_start();

if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('Location: index.php');
}

$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Willkommen, <?php echo htmlspecialchars($username); ?>!</h2>
    <p>Sie sind jetzt im Dashboard.</p>
    <form action="logout.php" method="post">
        <button type="submit">Abmelden</button>
    </form>
</body>
</html>
