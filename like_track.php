<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    echo 'Non sei loggato';
    exit;
}

$user_id = $_SESSION['user_id'];
$album_id = $_POST['album_id'];
$title = $_POST['title'];
$image_url = $_POST['image_url'];

// Connetti al database
$conn = new mysqli('localhost', 'root', '', 'hw1');

// Controlla la connessione
if ($conn->connect_error) {
    die('Errore di connessione: ' . $conn->connect_error);
}

// Controlla se l'utente ha già messo like a questa traccia
$sql_check = "SELECT * FROM favorites WHERE user_id = '$user_id' AND album_id = '$album_id'";
$result_check = $conn->query($sql_check);

if ($result_check->num_rows > 0) {
    echo 'Hai già messo like a questa traccia';
} else {
    // Inserisci il like nel database
    $sql_insert = "INSERT INTO favorites (user_id, album_id, title, image_url) VALUES ('$user_id', '$album_id', '$title', '$image_url')";
    
    if ($conn->query($sql_insert) === TRUE) {
        echo 'Traccia aggiunta ai preferiti';
    } else {
        echo 'Errore: ' . $conn->error;
    }
}

$conn->close();
?>
