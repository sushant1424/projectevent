  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upscale Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <style>
      * {
        font-family: 'Poppins', sans-serif;
      }

      .h-font {
        font-family: 'Merienda', cursive;
      }

      /* Chrome, Safari, Edge, Opera */
      input::-webkit-outer-spin-button,
      input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }

      /* Firefox */
      input[type=number] {
        -moz-appearance: textfield;
      }
      
    </style>

  </head>

  <body>

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
      <div class="container-fluid">
        <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php"><img src="images/logo.png " class="img-fluid" width="200px" alt="Upscale Logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link me-2 " a href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2 " href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2 " href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2 " href="#">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link me-2 " href="#">About</a>
            </li>


          </ul>
          <div class="d-flex" role="search">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginmodal">
              Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none " data-bs-toggle="modal" data-bs-target="#registermodal">
              Register
            </button>
          </div>
        </div>
      </div>
    </nav>

    <!-- loginmodal -->
    <div class="modal fade" id="loginmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content ">
          <form action="">
            <div class="modal-header">
              <h5 class="modal-title  fs-3 text-center">
                Welcome Back!!
              </h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <div class="mb-3">
                <label class="form-label">Email: </label>
                <input type="email" class="form-control shadow-none" aria-describedby="emailHelp">
              </div>
              <div class="mb-4">
                <label class="form-label">Password: </label>
                <input type="email" class="form-control shadow-none" aria-describedby="emailHelp">
              </div>
              <div class="d-flex align-items-center justify-content-between">
                <button class="btn btn-dark shadow-none">Login</button>
                <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
              </div>
            </div>

          </form>
        </div>

      </div>
    </div>

    <!-- registermodal -->
    <div class="modal fade" id="registermodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg ">
        <div class="modal-content">
          <form action="">
            <div class="modal-header">
              <h5 class="modal-title d-flex align-items-center">
                Create your account
              </h5>
              <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

              <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
                Note: Please fill all the details below. * fields are necessary to fill.
              </span>
              <div class="container-fluid">
                <div class="row">
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Username: * </label>
                    <input type="text" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>
                  <div class="col-md-6 p-0 mb-3">

                    <label class="form-label">Email: * </label>
                    <input type="email" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Password: * </label>
                    <input type="password" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>
                  <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Confirm Password: * </label>
                    <input type="password" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Phone: * </label>
                    <input type="number" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Photo: </label>
                    <input type="file" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>
                  <div class="col-md-12 p-0 mb-3">
                    <label class="form-label">Address: * </label>
                    <textarea class="form-control shadow-none" rows="3"></textarea>

                  </div>
                  <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Date of Birth: </label>
                    <input type="date" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>
                </div>
              </div>
              <div>
                <button type="submit" class="btn btn-dark shadow-none">Register</button>
              </div>
             
            </div>

          </form>
        </div>

      </div>
    </div>







    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- swiperjs -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  </body>

  </html>