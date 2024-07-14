<?php
// Assume you have included necessary session handling or database connection here
session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit();
}

$username = $_SESSION['username'];  // Assuming the username is stored in the session
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>Welcome</title>
</head>

<body>
  <?php require 'partials/navbar.php'; ?>
  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">
      <h1><?php echo 'Welcome ' . htmlspecialchars($username); ?></h1>
    </h4>
    <p>You have successfully logged in to your account. Feel free to explore and make the most out of our services.</p>
    <hr>
    <p class="mb-0">If you need any assistance, do not hesitate to reach out to our support team..</p>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>