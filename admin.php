<?php
session_start(); // Start the session
include 'connect.php';

// Check if the user is logged in (if the session is set)
if (isset($_SESSION['firstName']) && isset($_SESSION['lastName']) && isset($_SESSION['email'])) {
  $userFirstName = $_SESSION['firstName'];
    $userLastName = $_SESSION['lastName'];
    $userEmail = $_SESSION['email'];
    $profilePicture = $_SESSION['profilepicture'];
} else {
  // If session variables are not set, you can handle it here (e.g., show a message or redirect)
  $userFirstName = "Guest";
  $userLastName = "User";
  $userEmail = "Not logged in";
}

// Now you can safely access the session variables
$userFirstName = $_SESSION['firstName'];
$userLastName = $_SESSION['lastName'];
$userEmail = $_SESSION['email'];
$profilePicture = $_SESSION['profilepicture'];
// Update content
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    foreach ($_POST['content'] as $id => $updatedContent) {
        $stmt = $conn->prepare("UPDATE content SET content = ? WHERE id = ?");
        $stmt->bind_param('si', $updatedContent, $id);
        $stmt->execute();
        $stmt->close();
    }
    echo "Content updated successfully!";
}

// Fetch content for editing
$sql = "SELECT id, section, content FROM content";
$result = $conn->query($sql);

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
</head>
<body>
    <h1>Admin Panel</h1>
    <form method="POST" action="">
        <?php if ($result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
                <div>
                    <label for="content_<?php echo $row['id']; ?>"><?php echo ucfirst($row['section']); ?></label><br>
                    <textarea id="content_<?php echo $row['id']; ?>" name="content[<?php echo $row['id']; ?>]" rows="4" cols="50"><?php echo htmlspecialchars($row['content']); ?></textarea>
                </div>
                <br>
            <?php endwhile; ?>
        <?php else: ?>
            <p>No content available to edit.</p>
        <?php endif; ?>
        <button type="submit">Save Changes</button>
    </form>
</body>
</html>
