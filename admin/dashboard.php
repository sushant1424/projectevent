<?php
require('inc/essentials.php');
adminLogin();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <?php
  require('inc/links.php');
  ?>
</head>

<body class="bg-light">
  <div class="container-fluid bg-white text-dark p-3 d-flex align-items-center justify-content-between">
    <img src="../images/logo.png" alt="" width="250px" class="image-fluid">
    <a href="logout.php" class="btn btn-light btn-sm">Log Out</a>
  </div>
  <?php
  require('inc/script.php');
  ?>
</body>

</html>