<?php 

include 'connect.php';

if (isset($_POST['signUp'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email Address Already Exists!";
    } else {
        // Handle profile picture upload
        if (isset($_FILES['profilepicture']) && $_FILES['profilepicture']['error'] == 0) {
            $targetDir = __DIR__ . "/uploads/"; // Ensure the correct path
            $targetFile = $targetDir . basename($_FILES["profilepicture"]["name"]);
            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

            // Debugging output
            echo "Target Directory: $targetDir<br>";
            echo "Target File: $targetFile<br>";

            // Validate file type
            $allowedTypes = array("jpg", "jpeg", "png", "gif");
            if (in_array($imageFileType, $allowedTypes)) {
                // Move the uploaded file to the target directory
                if (move_uploaded_file($_FILES["profilepicture"]["tmp_name"], $targetFile)) {
                    // Insert user data into the database
                    $relativePath = "uploads/" . basename($_FILES["profilepicture"]["name"]); // Save relative path in DB
                    $insertQuery = "INSERT INTO users (firstName, lastName, email, password, profilepicture) 
                                    VALUES ('$firstName', '$lastName', '$email', '$password', '$relativePath')";
                    if ($conn->query($insertQuery) === TRUE) {
                        header("Location: index.php");
                        exit();
                    } else {
                        echo "Error: " . $conn->error;
                    }
                } else {
                    echo "Error moving uploaded file.";
                }
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG & GIF are allowed.";
            }
        } else {
            // Handle case where no profile picture is uploaded
            echo "No valid file uploaded or file upload error: " . $_FILES['profilepicture']['error'] . "<br>";

            $insertQuery = "INSERT INTO users (firstName, lastName, email, password) 
                            VALUES ('$firstName', '$lastName', '$email', '$password')";
            if ($conn->query($insertQuery) === TRUE) {
                header("Location: index.php");
                exit();
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }
}

if (isset($_POST['signIn'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        session_start();
        $row = $result->fetch_assoc();

        $_SESSION['userId'] = $row['Id'];
        $_SESSION['firstName'] = $row['firstName'];
        $_SESSION['lastName'] = $row['lastName'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['profilepicture'] = $row['profilepicture'];

        header("Location: home.php");
        exit();
    } else {
        echo "Not Found, Incorrect Email or Password.";
    }
}
?>
