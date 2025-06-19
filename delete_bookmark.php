<?php
$host = 'localhost';
$dbname = 'pethubdb';
$username = 'root';
$password = '';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Check if the ID is provided
    if (isset($_POST['id']) && is_numeric($_POST['id'])) {
        $id = $_POST['id'];

        // Prepare and execute the delete statement
        $stmt = $pdo->prepare("DELETE FROM bookmarksnew WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        // Redirect to saved_bookmarks.php with a success flag
        header('Location: saved_bookmarks.php?deleted=true');
        exit;
    } else {
        echo "Invalid ID provided.";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
