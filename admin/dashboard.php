<?php
require('inc/essentials.php');
require('inc/db_config.php');

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
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
  <?php
  require('inc/header.php');
  ?>

  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-3 overflow-hidden">
    <div>
      <h3 class="mb-5">Dashboard</h3>
    </div>

    <div class="row mb-4">
      <div class="col-md-3 mb-4">
        <a href="categories.php" class="text-decoration-none">
          <div class="card text-center p-3 " style=" border-left: 7px solid #246dec">
          
            <p class="fw-bold">Total Categories</p>
          
          <?php
          $dash_categories_query = "SELECT * FROM `categories`";
          $dash_categories_query_run = mysqli_query($conn, $dash_categories_query);
          if($categories_total = mysqli_num_rows($dash_categories_query_run))
          {
              echo '<div class="mt-2">'.$categories_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>

          </div>
        </a>
      </div>
      <div class="col-md-3 mb-4">
        <a href="users.php" class="text-decoration-none">
          <div class="card text-center p-3 " style=" border-left: 7px solid #f5b74f">
          
            <p class="fw-bold">Total Users</p>
          
          <?php
          $dash_users_query = "SELECT * FROM `user_register`";
          $dash_users_query_run = mysqli_query($conn, $dash_users_query);
          if($users_total = mysqli_num_rows($dash_users_query_run))
          {
              echo '<div class="mt-2">'.$users_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>

          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="events.php" class="text-decoration-none">
          <div class="card text-center p-3 " style=" border-left: 7px solid #6f1d1b">
          
            <p class="fw-bold">Total events</p>
          
          <?php
          $dash_events_query = "SELECT * FROM `events`";
          $dash_events_query_run = mysqli_query($conn, $dash_events_query);
          if($events_total = mysqli_num_rows($dash_events_query_run))
          {
              echo '<div class="mt-2">'.$events_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>

          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="features.php" class="text-decoration-none">
          <div class="card text-center p-3 " style=" border-left: 7px solid #007200">
          
            <p class="fw-bold">Total features</p>
          
          <?php
          $dash_features_query = "SELECT * FROM `features`";
          $dash_features_query_run = mysqli_query($conn, $dash_features_query);
          if($features_total = mysqli_num_rows($dash_features_query_run))
          {
              echo '<div class="mt-2">'.$features_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>

          </div>
        </a>
      </div>

      <div class="col-md-3 mb-4">
        <a href="user_query.php" class="text-decoration-none">
          <div class="card text-center p-3 " style=" border-left: 7px solid #f72585">
          
            <p class="fw-bold">Total user queries</p>
          
          <?php
          $dash_users_query_query = "SELECT * FROM `user_query`";
          $dash_users_query_query_run = mysqli_query($conn, $dash_users_query_query);
          if($users_query_total = mysqli_num_rows($dash_users_query_query_run))
          {
              echo '<div class="mt-2">'.$users_query_total.'</div>';
          }
          else{
                echo '<div class="quantity">No data</div>';
          }
          ?>

          </div>
        </a>
      </div>
      
    </div>
      </div>
    </div>
  </div>
  <?php
  require('inc/script.php');
  ?>
</body>

</html>