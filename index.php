<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anmeldung</title>
</head>
<body>
    <h2>Login</h2>
    <form action="login.php" method="post">
        <label for="username">Benutzername:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <br>
        <label for="password">Passwort:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <br>
        <button type="submit">Anmelden</button>
    </form>
</body>
</html>
