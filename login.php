<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <h2>Login Page</h2>
    <?php
    // Initialize variables for feedback
    $message = "";

    // Check if the form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Dummy credentials for validation
        $valid_username = "admin";
        $valid_password = "password123";

        // Capture form data
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate credentials
        if ($username === $valid_username && $password === $valid_password) {
            $message = "Login successful! Welcome, " . htmlspecialchars($username) . "!";
        } else {
            $message = "Invalid username or password. Please try again.";
        }
    }
    ?>

    <!-- Display feedback message -->
    <?php if ($message): ?>
        <p><?php echo $message; ?></p>
    <?php endif; ?>

    <!-- Login form -->
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        
        <button type="submit">Login</button>
    </form>
</body>
</html>
