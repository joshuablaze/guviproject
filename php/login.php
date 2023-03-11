<?php
session_start();

if (isset($_POST['submit'])) {
  // Get form data
  $username = $_POST["username"];
  $password = $_POST["password"];

  // Validate username and password
  if ($username == "myusername" && $password == "mypassword") {
    // Login successful
    $_SESSION["username"] = $username;
    header("Location: dashboard.php");
    exit;
  } else {
    // Login failed
    $error_message = "Invalid username or password.";
  }
}
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="J:\PL GUVI\CSS\login.css">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <h1>Login</h1>
        <?php if (isset($error_message)) { ?>
          <div class="error-message"><?php echo $error_message; ?></div>
        <?php } ?>
        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
          <div class="input-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
          </div>
          <div class="input-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
          </div>
          <button type="submit" name="submit">Log in</button>
        </form>
      </div>
    </div>
  </body>
</html>
