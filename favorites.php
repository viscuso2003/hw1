<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}

$user_id = $_SESSION['user_id'];

// Connetti al database
$conn = new mysqli('localhost', 'root', '', 'hw1');

// Controlla la connessione
if ($conn->connect_error) {
    die('Errore di connessione: ' . $conn->connect_error);
}

// Rimuovi una canzone dai preferiti
if (isset($_POST['remove_id'])) {
    $remove_id = $_POST['remove_id'];
    
    $sql_delete = "DELETE FROM favorites WHERE id = '$remove_id' AND user_id = '$user_id'";
    
    if ($conn->query($sql_delete) === TRUE) {
        echo 'Canzone rimossa dai preferiti';
    } else {
        echo 'Errore: ' . $conn->error;
    }
}

// Seleziona i preferiti dell'utente
$sql = "SELECT * FROM favorites WHERE user_id = '$user_id'";
$result = $conn->query($sql);

$favorites = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $favorites[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preferiti</title>
    <link rel="stylesheet" href="favorites.css">
</head>
<body>
<a href="welcome.php" class="back-home-btn">Home</a>
    <h1>Preferiti</h1>
    <ul>
        <?php foreach ($favorites as $favorite): ?>
            <li>
                <h2><?php echo $favorite['title']; ?></h2>
                <img src="<?php echo $favorite['image_url']; ?>" alt="<?php echo $favorite['title']; ?>">
                <form action="" method="post">
                    <input type="hidden" name="remove_id" value="<?php echo $favorite['id']; ?>">
                    <button class="remove-btn" type="submit">Rimuovi dai preferiti</button>
                </form>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
