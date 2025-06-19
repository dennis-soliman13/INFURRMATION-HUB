    <?php
    session_start();
    include 'connect.php';

    if (isset($_POST['signIn'])) {
        $email = $_POST['email'];
        $password = md5($_POST['password']); // Use md5 temporarily; secure hashing is better
        
        // Use prepared statement
        $sql = "SELECT * FROM users WHERE email = ? AND password = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            session_start();
            $row = $result->fetch_assoc();

            // Debug: Print fetched row
            echo "<pre>";
            print_r($row);
            echo "</pre>";

            // Store user details in session
            $_SESSION['profilepicture'] = $row['profilepicture'];
            $_SESSION['userId'] = $row['Id'];
            $_SESSION['firstName'] = $row['firstName'];
            $_SESSION['lastName'] = $row['lastName'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['password'] = $row['password'];
            header("Location: home.php");
            exit();
        } else {
            echo "Not Found, Incorrect Email or Password";
        }
    }
    ?>





    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register & Login</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
        <link rel="stylesheet" href="style.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
        rel="stylesheet">
    </head>
    <body>
    
        <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php" enctype="multipart/form-data">
        <div class="profile-container">
                <div class="img-container">
                    <img id="register-picture" src="img/profile-picture-dog.png" alt="profile picture">
                    <i id="edit" class="material-icons" style="cursor: pointer;">edit</i>
                </div>
                <input type="file" name="profilepicture" id="profilepicture" accept="image/*" style="display: none;">
            </div>
            <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="firstName" id="firstName" placeholder="First Name" required>
            <label for="firstname">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lastName" id="lastName" placeholder="Last Name" required>
                <label for="lastName">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
        <input type="submit" class="btn" value="Sign Up" name="signUp">
        <div class="tandc">
            <input class="check" type="checkbox" id="terms" name="terms" value="agree" required>
            <label for="terms">I agree to the <a href="termsandcondition.html" target="blank">Terms and Condition</a></label><br>
        </div>
        </form>
        
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="signInButton">Sign In</button>
        </div>
        </div>

        <div class="container" id="signIn">
            <h1 class="form-title">Sign In</h1>
            <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            
            
            <input type="submit" class="btn" value="Sign In" name="signIn">
            
            </form>
        
            
            <div class="links">
            <p>Don't have account yet?</p>
            <button id="signUpButton">Sign Up</button>
            </div>
        </div>
        <script src="script.js"></script>
        <script>
            document.querySelector('form').addEventListener('submit', function (event) {
        const checkbox = document.getElementById('terms');
        if (!checkbox.checked) {
            event.preventDefault(); // Prevents form submission
            alert('Please agree to the Terms and Conditions to proceed.');
        }
    });
        </script>
    </body>
    </html>
