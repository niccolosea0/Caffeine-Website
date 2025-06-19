<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = htmlspecialchars(trim($_POST['email']));
    $password = $_POST['password'];

    // Validation
    if (empty($email) || empty($password)) {
        echo "<p style='color:red;'>All fields are required.</p>";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<p style='color:red;'>Invalid email format.</p>";
        exit;
    }

    // Find user by email - we need to search through all user files
    $userFolder = 'users/';
    $userFound = false;
    $username = '';
    $storedPassword = '';

    if (is_dir($userFolder)) {
        $files = glob($userFolder . '*.txt');
        
        foreach ($files as $file) {
            $lines = file($file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            
            if (count($lines) >= 4) {
                // Parse the lines (remove prefixes)
                $fileEmail = str_replace('Email: ', '', $lines[2]);
                
                if ($fileEmail === $email) {
                    // Found matching email
                    $userFound = true;
                    $username = str_replace('Username: ', '', $lines[1]);
                    $storedPassword = str_replace('Password: ', '', $lines[3]);
                    break;
                }
            }
        }
    }

    if (!$userFound) {
        echo "<p style='color:red;'>User not found. Please check your email or sign up first.</p>";
        exit;
    }

    // Verify password
    if (password_verify($password, $storedPassword)) {
        // Successful login
        $_SESSION['user'] = $username;  // Store username, not email
        $_SESSION['email'] = $email;    // Store email separately if needed
        setcookie("user", $username, time() + 3600); // 1 hour

        header("Location: index.php");
        exit;
    } else {
        echo "<p style='color:red;'>Incorrect password.</p>";
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="auth-form">
      <h2>Sign In</h2>
      <form id="signinForm" action="sign-in.php" method="POST">
        <fieldset>
          <legend>Sign in</legend>
          <input
            type="email"
            name="email"
            id="signinEmail"
            placeholder="Email"
            required
          />
          <input
            type="password"
            name="password"
            id="signinPassword"
            placeholder="Password"
            required
          />
          <button type="submit">Sign In</button>
          <p>Don't have an account? <a href="sign-up.php">Sign Up</a></p>
        </fieldset>
      </form>
    </div>

    <script>
      document
        .getElementById("signinForm")
        .addEventListener("submit", function (e) {
          const email = document.getElementById("signinEmail").value.trim();
          const password = document.getElementById("signinPassword").value;

          if (!email.includes("@")) {
            alert("Enter a valid email.");
            e.preventDefault();
            return;
          }

          if (password.length === 0) {
            alert("Password cannot be empty.");
            e.preventDefault();
            return;
          }
        });
    </script>
  </body>
</html>