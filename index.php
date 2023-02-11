<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
</head>

<body>
  <form method="post" action="login.php">
  <input type="text" name="email" placeholder="Email">
  <input type="password" name="password" placeholder="Password">
  <button type="submit" name="submit">Log In</button>
</form>


<h2 id="time"> Time</h2>
<p> Time is a concept used to describe the duration and sequence of events. It is a fundamental aspect of the physical universe and is closely related to the concept of space. Time can be measured and represented in different ways, such as with clocks or calendars, and can be subject to variation depending on factors such as gravity and velocity. In physics, time is often considered a fourth dimension, along with the three dimensions of space, and is used to describe the movement and behavior of particles and objects in the universe. Time is a complex concept that has been studied by philosophers, scientists, and scholars for centuries and continues to be a topic of ongoing research and exploration in many fields</p>
<h2 id="Time dilation">Time Dilation</h2>
<p>Time dilation is a phenomenon predicted by Einstein's theory of relativity, in which time appears to pass slower for an observer who is moving relative to another observer at rest. This effect arises because the passage of time is relative to the observer's reference frame, and is affected by factors such as velocity and gravitational potential.
<hr>The faster an object moves, the slower time appears to pass for it, as observed by an observer who is at rest. Similarly, the stronger the gravitational field, the slower time appears to pass for an object within it, as observed by an observer outside the field.<hr>
Time dilation has been observed and measured in many experiments, including the famous Hafele-Keating experiment in which atomic clocks were flown in opposite directions around the world, and the Pound-Rebka experiment in which gamma rays were emitted and detected at different heights in a gravitational field. Time dilation has important consequences for many areas of physics, including particle physics, cosmology, and GPS navigation.
</p>
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

</body>
<script>
  function searchFunction() {
  var input, filter, results;
  input = document.getElementById("search");
  filter = input.value.toUpperCase();
  results = document.getElementById("results");
  results.innerHTML = "";
  
  // code to perform search and display results goes here
}

</script>

</html>