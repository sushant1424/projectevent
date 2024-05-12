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
  <link rel="stylesheet" href="css/style.css">
</head>

<body class="bg-light">
  <?php
  require('inc/header.php');
  ?>

  <div class="container-fluid" id="main-content">
    <div class="row">
      <div class="col-lg-10 ms-auto p-3 overflow-hidden">
        <h3 class="mb-4">Settings</h3>

        <!-- Settings -->
        <div class="card border-0 shadow-sm mb-4">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">General Settings</h5>
              <button type="button" class="btn btn-primary btn-sm shadow-none" data-bs-toggle="modal" data-bs-target="#generalSettings">
                <i class="bi bi-pen-fill me-2"></i>Edit
              </button>
            </div>
            <h6 class="card-subtitle mb-1  fw-bold">Website Title</h6>
            <p class="card-text" id="website_title"></p>
            <h6 class="card-subtitle mb-1  fw-bold">Information</h6>
            <p class="card-text" id="website_info"></p>
          </div>
        </div>

        <!-- Settings Modal -->
        <div class="modal fade" id="generalSettings" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <form action="">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5">General Settings</h1>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label class="form-label">Website Title: </label>
                    <input type="text" name="website_title" id="website_title_inp" class="form-control shadow-none" aria-describedby="emailHelp">
                  </div>

                  <div class=" mb-3">
                    <label class="form-label">Information </label>
                    <textarea name="website_info" id="website_info_inp" class="form-control shadow-none" rows="6"></textarea>

                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" onclick="website_title.value=general_data.website_title, website_info.value = general_data.website_info" class="btn text-secondary shadow-none" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" onclick="update_general(website_title.value,website_info.value)" class="btn custom-bg">Save Changes</button>
                </div>
              </div>
            </form>

          </div>
        </div>

        <!-- Shutdown section -->
        <div class="card border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="card-title m-0">Shutdown Website</h5>
              <div class="form-check form-switch">
                <form >
                <input onchange = "update_shutdown(this.value)" class="form-check-input" type="checkbox" role="switch" id="shutdown-toggle" >

                </form>
                
              </div>

            </div>

            <p class="card-text">
              No any actions can be taken place by user when shutdown.
            </p>
          </div>
        </div>


      </div>
    </div>
  </div>
  <?php
  require('inc/script.php');
  ?>
  <script>
    let general_data;

    function get_general() {
      let website_title = document.getElementById('website_title');
      let website_info = document.getElementById('website_info');

      let website_title_inp = document.getElementById('website_title_inp');
      let website_info_inp = document.getElementById('website_info_inp');

      let shutdown_toggle =document.getElementById('shutdown-toggle');


      let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/settings_crud.php", true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        general_data = JSON.parse(this.responseText);

        website_title.innerText = general_data.website_title;
        website_info.innerText = general_data.website_info;

        website_title_inp.value = general_data.website_title;
        website_info_inp.value = general_data.website_info;

        if(general_data.shutdown == 0){
          shutdown_toggle.checked = false;
          shutdown_toggle.value = 0;
        }else{
          shutdown_toggle.checked = true;
          shutdown_toggle.value = 1;
        }


      }
      xhr.send('get_general');
    }

    function update_general(website_title_val, website_info_val) {

      let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/settings_crud.php", true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        var myModal = document.getElementById('generalSettings');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        if (this.responseText == 1) {
          alert('success', 'Changes Made Successfully');
          get_general();
        } else {
          alert('danger', 'No changes Made');
        }


      }
      xhr.send('website_title=' + website_title_val + '&website_info=' + website_info_val + '&update_general');
    }
    window.onload = function() {
      get_general();
    }
    function update_shutdown(val){
      let xhr = new XMLHttpRequest();
      xhr.open("POST", "ajax/settings_crud.php", true);
      xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

      xhr.onload = function() {
        
        if (this.responseText == 1 && general_data.shutdown == 0) {
          alert('success', 'Site has been shut down ');
          
        } else {
          alert('success', 'Shutdown mode is off');
        }
        get_general();


      }
      xhr.send('update_shutdown='+val);

    }
  </script>
</body>

</html>