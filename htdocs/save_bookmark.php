<?php
$host = 'localhost';
$dbname = 'pethubdb';
$username = 'root';
$password = '';

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Get POST data
    $data = json_decode(file_get_contents('php://input'), true);
    if ($data === null) {
        // JSON error handling
        echo json_encode(['success' => false, 'error' => 'Invalid JSON format.']);
        exit;
    }
    $title = $data['title'] ?? '';
    $url = $data['url'] ?? '';

    // Validate input
    if (empty($title) || empty($url)) {
        echo json_encode(['success' => false, 'error' => 'Title or URL is missing.']);
        exit;
    }

    // Insert into database
    $stmt = $pdo->prepare("INSERT INTO bookmarksnew (title, url) VALUES (:title, :url)");
    $stmt->execute(['title' => $title, 'url' => $url]);
    

    echo json_encode(['success' => true]);

} catch (PDOException $e) {
    // Catch and output database errors
    echo json_encode(['success' => false, 'error' => 'Database error: ' . $e->getMessage()]);
} catch (Exception $e) {
    // Catch and output any other errors
    echo json_encode(['success' => false, 'error' => 'General error: ' . $e->getMessage()]);
}
?>
