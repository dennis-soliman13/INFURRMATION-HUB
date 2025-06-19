<?php
session_start();
include 'connect.php';

// Ensure the user is logged in
if (!isset($_SESSION['userId'])) {
    header("Location: login.php"); // Redirect if not logged in
    exit();
}

// Handle form submission when updating profile
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $updatedSuccessfully = false; // Flag to track if updates were successful

    if (isset($_POST['firstName'], $_POST['lastName'], $_POST['email'], $_POST['password'])) {
        $newFirstName = $_POST['firstName'];
        $newLastName = $_POST['lastName'];
        $newEmail = $_POST['email'];
        $newPassword = md5($_POST['password']); // Use password_hash() instead of md5 for better security.
        
        // Get user ID from session
        $userId = $_SESSION['userId'];

        // Update database with new profile information
        $sql = "UPDATE users SET firstName = ?, lastName = ?, email = ?, password = ? WHERE Id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssi", $newFirstName, $newLastName, $newEmail, $newPassword, $userId);

        if ($stmt->execute()) {
            // Update session data after successful update
            $_SESSION['firstName'] = $newFirstName;
            $_SESSION['lastName'] = $newLastName;
            $_SESSION['email'] = $newEmail;
            $_SESSION['password'] = $newPassword; // Consider not storing password in session for security reasons
            $updatedSuccessfully = true;
        } else {
            $errorMsg = "Error updating profile: " . $stmt->error;
        }
    }

    // Handle profile picture update
    if (isset($_FILES['profilepicture']) && $_FILES['profilepicture']['error'] == 0) {
        $profilePicture = $_FILES['profilepicture'];
        $uploadDirectory = 'uploads/';
        $newProfilePicture = $uploadDirectory . basename($profilePicture['name']);
        
        // Check if file was uploaded successfully
        if (move_uploaded_file($profilePicture['tmp_name'], $newProfilePicture)) {
            // Update session with the new profile picture path
            $_SESSION['profilepicture'] = $newProfilePicture;
            
            // Update database with new profile picture
            $updatePicQuery = "UPDATE users SET profilepicture = ? WHERE Id = ?";
            $updatePicStmt = $conn->prepare($updatePicQuery);
            $updatePicStmt->bind_param("si", $newProfilePicture, $userId);
            $updatePicStmt->execute();
            
            $updatedSuccessfully = true;
        } else {
            $errorMsg = "Failed to upload the image.";
        }
    }

    // If profile updated or picture changed, redirect to home.php with success alert
    if ($updatedSuccessfully) {
        echo "<script>
                alert('Profile updated successfully!');
                window.location.href = 'home.php'; // Redirect to home.php
              </script>";
    } else {
        // If there's an error, show alert and stay on the same page
        echo "<script>
                alert('Error: $errorMsg');
              </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Profile</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="container" id="update">
        <h1 class="form-title">Update Profile</h1>
        <form method="post" action="update.php" enctype="multipart/form-data">
            <div class="profile-container">
                <div class="img-container">
                    <img id="register-picture" src="<?php echo $_SESSION['profilepicture'] ?? 'img/profile-picture-dog.png'; ?>" alt="profile picture">
                    <i id="edit" class="material-icons" style="cursor: pointer;">edit</i>
                </div>
                <input type="file" name="profilepicture" id="profilepicture" accept="image/*" style="display: none;">
            </div>

            <!-- Input fields for updating profile -->
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="firstName" id="firstName" placeholder="New First Name" value="<?php echo $_SESSION['firstName']; ?>" required>
                <label for="firstName">New First Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lastName" id="lastName" placeholder="New Last Name" value="<?php echo $_SESSION['lastName']; ?>" required>
                <label for="lastName">New Last Name</label>
            </div>

            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="New Email" value="<?php echo $_SESSION['email']; ?>" required>
                <label for="email">New Email</label>
            </div>

            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="New Password" required>
                <label for="password">New Password</label>
            </div>

            <!-- Update Button -->
            <input type="submit" class="btn" value="Update" name="updateProfile">
        </form>
    </div>
    
    <script src="script.js"></script>
    <script>
        // Handle the file input click when edit button is clicked
        document.getElementById("edit").addEventListener("click", function() {
            document.getElementById("profilepicture").click();
        });

        // Preview the selected image in the img tag
        document.getElementById('profilepicture').addEventListener('change', function (event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    document.getElementById('register-picture').src = e.target.result;
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
</html>
