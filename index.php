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
      <div class="col-md-6" style="padding-top:100px;">
        <h1 class="display-3 fw-bold">Elevate Your <span style="color:aquamarine;">Events</span> and <span style="color:#FF8264">Memories</span> With Us.</h1>
        <p class="fs-5">Looking for a great place to organize and manage your events? You are in the right place.</p>
        <button type="button" class="btn  mt-3 shadow-none custom-bg px-md-3" data-bs-toggle="modal" data-bs-target="#registermodal">
          Get Started
        </button>
      </div>
      <div class="col-md-6 ">
        <img src="images/coverimage.jpg" width="100%" class="image-fluid" alt="">
      </div>
    </div>
  </div>
  <!-- Main content -->


  <!-- pictures-section -->
  <div class="container-fluid px-lg-4 mt-4 py-5" style="background-color: #f0ead2;">
    <h2 class="text-center fs-1">We Manage all kinds of events</h2>
    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/birthday.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/corportae.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/babyshower.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/leg.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/crowd.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/meetings.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/run.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="images/puja.jpg" />
        </div>



      </div>

    </div>
  </div>
  <!-- pictures-section -->

  <!-- events-cards -->
  <h2 class="mt-5 pt-4 mb-4 text-center fw-bold">Events</h2>

  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">

        <!-- card-start -->
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/marriagel.jpg" class="card-img-top" alt="">

          <div class="card-body">
            <h5>Marriage</h5>
            <div class="services mb-4">
              <h6 class="mb-1 mt-4">Services</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Photography
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Caterine
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Decoration
              </span>

            </div>

            <div class="category mb-4">
              <h6 class="mb-1 mt-4">Category</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Social
              </span>


            </div>

            <a href="#" class="btn btn-sm custom-bg">View Detail</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">

        <!-- card-start -->
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/birth.jpg" class="card-img-top" alt="">

          <div class="card-body">
            <h5>Birthday</h5>
            <div class="services mb-4">
              <h6 class="mb-1 mt-4">Services</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Photography
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Caterine
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Decoration
              </span>

            </div>

            <div class="category mb-4">
              <h6 class="mb-1 mt-4">Category</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Social
              </span>


            </div>

            <a href="#" class="btn btn-sm  custom-bg">View Detail</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">

        <!-- card-start -->
        <div class="card border-0 shadow" style="max-width: 350px; margin:auto;">
          <img src="images/baby.jpg" class="card-img-top" alt="">

          <div class="card-body">
            <h5>Baby Shower</h5>
            <div class="services mb-4">
              <h6 class="mb-1 mt-4">Services</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Photography
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Caterine
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Decoration
              </span>

            </div>

            <div class="category mb-4">
              <h6 class="mb-1 mt-4">Category</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap ">
                Social
              </span>


            </div>

            <a href="#" class="btn btn-sm custom-bg">View Detail</a>
          </div>
        </div>
      </div>

      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn custom-bg  rounded-0 fw-bold shadow-none ">View More</a>
      </div>
    </div>
  </div>


  <!-- events-cards -->
</body>
<?php
include('footer.php');
?>

</html>