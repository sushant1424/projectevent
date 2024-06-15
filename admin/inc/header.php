<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<div class="container-fluid bg-white text-dark px-3 py-1 d-flex align-items-center justify-content-between sticky-top">
    <img src="../images/logo.png" alt="" width="250px" class="image-fluid">
    <a href="logout.php" class="btn btn-light btn-sm">Log Out</a>
  </div>


  <div class="col-lg-2 border-top border-3 border-secondary" style="background-color: #21232d;" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark text-white">
      <div class="container-fluid flex-lg-column align-items-stretch">
        
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
          <ul class="nav nav-pills flex-column ">
            
            <li class="nav-item">
              <a class="nav-link text-white" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="gallery.php">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="settings.php">Settings</a>
            </li>
            
          </ul>
        </div>

      </div>
    </nav>
  </div>
</body>
</html>