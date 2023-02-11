

<body>
  <form method="post" action="login.php">
  <input type="text" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <button type="submit" name="submit">Log In</button>
</form>


<?php
session_start();

if (isset($_POST['submit'])) {
  // Get form data
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Validate user input (e.g. check email and password against a database)
  if ($email == "user@example.com" && $password == "password123") {
    // User is valid, create session and redirect to protected page
    $_SESSION['user'] = $email;
    header("Location: protected-page.php");
    exit();
  } else {
    // User is not valid, display error message
    echo "Invalid email or password.";
  }
}
?>