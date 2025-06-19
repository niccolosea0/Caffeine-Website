<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Sanitize and trim inputs
    $username = htmlspecialchars(trim($_POST['username']));
    $email = htmlspecialchars(trim($_POST['email']));
    $password_raw = $_POST['password'];

    // Validation
    $errors = [];

    if (empty($username) || empty($email) || empty($password_raw)) {
        $errors[] = "All fields are required.";
    }

    // Restrict characters in username (no slashes, no dangerous chars)
    if (!preg_match('/^[a-zA-Z0-9_]{3,20}$/', $username)) {
        $errors[] = "Username must be 3–20 characters long and only contain letters, numbers, and underscores.";
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }

    // Check password strength (at least 6 characters for example)
    if (strlen($password_raw) < 6) {
        $errors[] = "Password must be at least 6 characters long.";
    }

    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // Process registration
        $userFolder = 'users/';
        if (!is_dir($userFolder)) {
            mkdir($userFolder, 0755, true);
        }

        $userFile = $userFolder . $username . '.txt';

        if (file_exists($userFile)) {
            echo "<p style='color:red;'>Username already exists. Please choose another.</p>";
        } else {
            // Hash password
            $password_hashed = password_hash($password_raw, PASSWORD_DEFAULT);

            // Add registration timestamp and ID
            $registeredAt = date("Y-m-d H:i:s");
            $userId = uniqid("user_");

            $userData = [
                "ID: $userId",
                "Username: $username",
                "Email: $email",
                "Password: $password_hashed",
                "Registered At: $registeredAt"
            ];

            $writeResult = file_put_contents($userFile, implode("\n", $userData));
            
            if ($writeResult !== false) {
                // Start session and set cookie
                session_start();
                $_SESSION['user'] = $username;
                setcookie("user", $username, time() + 3600); // Expires in 1 hour
                header("Location: index.php");
                exit;
            } else {
                echo "<p style='color:red;'>Registration failed. Please try again.</p>";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign Up</title>
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="auth-form">
      <h2>Create Account</h2>
      <form id="signupForm" action="sign-up.php" method="POST">
        <fieldset>
          <legend>Sign Up</legend>
          <input
            type="text"
            name="username"
            id="username"
            placeholder="Username"
            required
          />
          <input
            type="email"
            name="email"
            id="email"
            placeholder="Email"
            required
          />
          <input
            type="password"
            name="password"
            id="password"
            placeholder="Password"
            required
          />
          <button type="submit">Sign Up</button>
          <p>Already have an account? <a href="sign-in.php">Sign In</a></p>
        </fieldset>
      </form>
    </div>

    <script>
      document
        .getElementById("signupForm")
        .addEventListener("submit", function (e) {
          const username = document.getElementById("username").value.trim();
          const email = document.getElementById("email").value.trim();
          const password = document.getElementById("password").value;

          if (username.length < 3) {
            alert("Username must be at least 3 characters.");
            e.preventDefault();
            return;
          }

          if (!email.includes("@")) {
            alert("Enter a valid email.");
            e.preventDefault();
            return;
          }

          if (password.length < 6) {
            alert("Password must be at least 6 characters.");
            e.preventDefault();
            return;
          }
        });
    </script>
  </body>
</html>