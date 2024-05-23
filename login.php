<?php
session_start();

$valid_username = 'benutzer';
$valid_password = 'passwort';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    
    if (empty($username) || empty($password)) {
        $error = 'Bitte füllen Sie alle Felder aus.';
    } else if ($username == $valid_username && $password == $valid_password) {
        $_SESSION['username'] = $username;
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Ungültiger Benutzername oder Passwort.';
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
</head>
<body>
    <h2>Login</h2>
    <?php
    if (isset($error)) {
        echo "<p style='color:red;'>$error</p>";
    }
    ?>
    <form action="login.php" method="post">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Anmelden</button>
    </form>
</body>
</html>
