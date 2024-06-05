<?php
include 'includes/db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hash della password
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);

    // Connetti al database
    $conn = new mysqli('localhost', 'root', '', 'hw1');

    // Controlla la connessione
    if ($conn->connect_error) {
        die('Errore di connessione: ' . $conn->connect_error);
    }

    // Inserisci il nuovo utente nel database
    $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        session_start(); // Assicurati che la sessione sia avviata
        $_SESSION['user_id'] = $conn->insert_id;
        $_SESSION['username'] = $username;
        header('Location: welcome.php');
        exit;
    } else {
        echo 'Errore: ' . $conn->error;
    }

    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registrazione</title>
    <link rel="stylesheet" href="style.css">
    <script src="validation.js"></script> <!-- Riferimento al file JavaScript -->
</head>
<body>
    <h2>Registrazione</h2>
    <form method="post" action="register.php" id="registrationForm">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <input type="submit" value="Registrati">
    </form>
</body>
</html>

