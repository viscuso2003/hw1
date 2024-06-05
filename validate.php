<!-- validate.php -->
<?php
session_start();
require 'db_connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Verifica se l'username è già utilizzato
    $stmt = $conn->prepare("SELECT id FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $_SESSION['error_message'] = "Username già in uso";
        header("Location: register.php");
        exit();
    } else {
        // Hash della password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Inserimento dell'utente nel database
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (:username, :password)");
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $hashed_password);

        if ($stmt->execute()) {
            $_SESSION['username'] = $username;
            header("Location: welcome.php");
            exit();
        } else {
            $_SESSION['error_message'] = "Errore durante la registrazione";
            header("Location: register.php");
            exit();
        }
    }
} else {
    header("Location: register.php");
    exit();
}
?>
