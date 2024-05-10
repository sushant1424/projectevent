<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upscale Events</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shC3MS4x6dJZlpLegxhjVME1fgjWPGmkzs7N6" crossorigin="anonymous">
</head>

<body>
  <!-- Header section -->
  <?php
  include("header.php");
  ?>

  <!-- Main Content -->
  <div class="container-fluid">
    <div class="row px-3">
      <div class="col-md-6 pt-5 ">
        <h1 class="display-3 fw-bold">Elevate Your <span style="color: aquamarine;">Events</span> and <span style="color:orange">Memories</span> With Us.</h1>
        <p class="fs-5">Looking for a great place to organize and manage your events? You are in the right place.</p>
        <button type="button" class="btn  mt-3 shadow-none px-md-3" data-bs-toggle="modal" data-bs-target="#registermodal" style="
        background-color: #FF8264;
        color:white;
        ">
          Get Started
        </button>
      </div>
      <div class="col-md-6">
        <img src="images/coverimage.jpg" width="100%" class="image-fluid" alt="">
      </div>
    </div>
  </div>
  <!-- Bootstrap JS (Optional) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shC3MS4x6dJZlpLegxhjVME1fgjWPGmkzs7N6" crossorigin="anonymous"></script>
</body>

</html>