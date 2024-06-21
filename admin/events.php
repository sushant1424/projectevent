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
  <title>Upscale Events - Events</title>
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
        <h3 class="mb-4">Events</h3>

        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">

            <!-- Events section -->
            <div class="card border-0 shadow-sm mb-4">
              <div class="card-body">
                <div class="d-flex align-items-center justify-content-between mb-3">
                  <h5 class="card-title m-0">Events List</h5>
                  <button type="button" class="btn btn-success btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#add_events">
                    <i class="bi bi-plus"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="table-responsive-lg" style="height:450px; overflow-y : scroll;">
              <table class="table table-hover table-bordered table-light" id="myTable">
                <thead>
                  <tr class="table-secondary text-light align-middle">
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Category</th>
                    <th scope="col">Price</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody id="events_data">
                </tbody>
              </table>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Events Modal -->
  <div class="modal fade" id="add_events" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form id="add_events_form" autocomplete="off">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5">Add Event </h1>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class=" col-md-6 mb-3">
                <label class="form-label">Event name: </label>
                <input type="text" name="event_name" id="event_name_inp" class="form-control shadow-none" required>
              </div>
              <div class=" col-md-6 mb-3">
                <label class="form-label">Event Category: </label><br>
                <select name='event_category' class="selectpicker show-tick" data-live-search="true" data-width="100%" data-size="4">
                  <option>Select Category</option>
                  <?php
                  $q = selectAll('categories');
                  while ($row = mysqli_fetch_assoc($q)) {
                    echo "
                      <option value='$row[name]' >$row[name]</option>
                    ";
                  }
                  ?>
                </select>
              </div>
              <div class=" col-md-6 mb-3">
                <label class="form-label">Price: </label>
                <input type="text" name="event_price" id="event_price_inp" class="form-control shadow-none" required>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Facilities: </label>
                <div class="row">
                  <?php
                  $q = selectAll('features');
                  while ($row = mysqli_fetch_assoc($q)) {
                    echo "
                      <div class='col-md-3'>
                        <label>
                          <input type='checkbox' name='event_feature' value='$row[id]' class='form-check-input shadow-none'>
                          $row[name]
                        </label>
                      </div>
                    ";
                  }
                  ?>
                </div>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Event Description: </label>
                <textarea name="event_description" class="form-control shadow-none required"></textarea>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn custom-bg">Add Event</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Edit Events Modal -->
  <div class="modal fade" id="edit_events" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <form id="edit_events_form" autocomplete="off">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5">Edit Event </h1>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class=" col-md-6 mb-3">
                <label class="form-label">Event name: </label>
                <input type="text" name="event_name" id="event_name_inp" class="form-control shadow-none" required>
              </div>
              <div class=" col-md-6 mb-3">
                <label class="form-label">Event Category: </label><br>
                <select name='event_category'>
                  <option>Select Category</option>
                  <?php
                  $q = selectAll('categories');
                  while ($row = mysqli_fetch_assoc($q)) {
                    echo "
                      <option value='$row[name]' >$row[name]</option>
                    ";
                  }
                  ?>
                </select>
              </div>
              <div class=" col-md-6 mb-3">
                <label class="form-label">Price: </label>
                <input type="text" name="event_price" id="event_price_inp" class="form-control shadow-none" required>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Facilities: </label>
                <div class="row">
                  <?php
                  $q = selectAll('features');
                  while ($row = mysqli_fetch_assoc($q)) {
                    echo "
                      <div class='col-md-3'>
                        <label>
                          <input type='checkbox' name='event_feature' value='$row[id]' class='form-check-input shadow-none'>
                          $row[name]
                        </label>
                      </div>
                    ";
                  }
                  ?>
                </div>
              </div>
              <div class="col-12 mb-3">
                <label class="form-label">Event Description: </label>
                <textarea name="event_description" class="form-control shadow-none required"></textarea>
              </div>
              <input type="hidden" name="event_id">
            </div>
          </div>
          <div class="modal-footer">
            <button type="reset" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn custom-bg">Edit Event</button>
          </div>
        </div>
      </form>
    </div>
  </div>

  <!-- Events Image Modal -->
  <div class="modal fade" id="events_images" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5">Event Name</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div id="image_alert"></div>
          <div class="mb-3">
            <form id="add_image_form">
              <label class="form-label fw-bold">Add Image</label>
              <input type="file" name="event_image" accept=".jpg,.png.jpeg,.svg" class="form-control shadow-none mb-3" required>
              <button class="btn custom-bg shadow-none">Add image</button>
              <input type="hidden" name="event_id">
            </form>
          </div>
          <div class="table-responsive-lg" style="height:450px; overflow-y : scroll;">
            <table class="table table-hover table-bordered table-light">
              <thead>
                <tr class="table-secondary text-light align-middle">
                  <th scope="col" width="60%">Image</th>
                  <th scope="col">Thumbnail</th>
                  <th scope="col">Delete</th>
                </tr>
              </thead>
              <tbody id="event_image_data"></tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  require('inc/script.php');
  ?>
  <script src="scripts/events.js"></script>
</body>
</html>
