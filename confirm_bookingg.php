<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upscale Events - Confirm Booking</title>
</head>

<body>
  <?php include('header.php'); ?>
  <?php
  /*
    Chweck event id from url is present or not
    user is logged in or not
    */
  ?>

  <?php
  if (!isset($_GET['id'])) {
    redirect('events.php');
  } else if (!(isset($_SESSION['login']) && $_SESSION['login'] == true)) {
    redirect('events.php');
  }



  $data = filtration($_GET);
  $event_res = select("SELECT * FROM `events` WHERE `id`=? AND  `status`=? AND `removed`=?", [$data['id'], 1, 0], 'iii');

  if (mysqli_num_rows($event_res) == 0) {
    redirect('events.php');
  }
  $event_data = mysqli_fetch_assoc($event_res);

  $_SESSION['event'] = [
    "id" => $event_data['id'],
    "name" => $event_data['name'],
    "price" => $event_data['price'],
    "payment" => null,
    "available" => false,
  ];

  $user_res = select("SELECT * FROM `user_register` WHERE `id`=? LIMIT 1", [$_SESSION['uid']], "i");

  $user_data = mysqli_fetch_assoc($user_res);





  ?>

  <div class="container mt-5">

    <div class="row">
      <div class=" col-12 my-5 mb-4 px-4">
        <h2 class="fw-bold">Confirm Your Event Booking</h2>
        <div style="font-size:14px">
          <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
          <span class="text-secondary"> > </span>
          <a href="events.php" class="text-secondary text-decoration-none">EVENTS</a>
          <a href="#" class="text-secondary text-decoration-none">CONFIRM</a>
        </div>
      </div>


      <div class="col-lg-7 col-md-12 px-4 ">

        <?php
        // Thumbnail
        $event_thumbnail = EVENTS_IMG_PATH . "thumb.png";
        $thumbnail_q = mysqli_query($conn, "SELECT * FROM `event_image` WHERE `event_id` = '$event_data[id]' AND `thumbnail`='1'");

        if (mysqli_num_rows($thumbnail_q) > 0) {
          $thumbnail_res = mysqli_fetch_assoc($thumbnail_q);
          $event_thumbnail = EVENTS_IMG_PATH . $thumbnail_res['image'];
        }


        echo <<<data
       <div class="card p-3 shadow-sm rounded">
       <img src="$event_thumbnail" class="img-fluid rounded mb-3">
       <h5>$event_data[name]</h5>
       <h6>$event_data[price]</h6>
       
       </div>

       data;
        ?>

      </div>

      <div class="col-lg-5 col-md-12 px-4">

        <div class="card-mb-4 border-0 shadow-sm rounded-3">
          <div class="card-body px-3">

            <form action="payment-request.php" method="POST">
              <h6>Booking Details</h6>
              <div class="row">
                <div class="col-md-6 mb-5">
                  <label class="form-label">Name</label>
                  <input name="uname" type="text" class="form-control shadow-none" value="<?php echo $user_data['username'] ?>" required>
                </div>
                <div class="col-md-6 mb-5">
                  <label class="form-label">Phone</label>
                  <input name="phone" type="text" class="form-control shadow-none" value="<?php echo $user_data['phone'] ?>" required>
                </div><div class="col-md-6 mb-5">
                  <label class="form-label">Email</label>
                  <input name="email" type="text" class="form-control shadow-none" value="<?php echo $user_data['email'] ?>" required>
                </div>
                
                <div class="col-md-6 mb-5">
                  <label class="form-label">Event Id</label>
                  <input name="eid" type="text" class="form-control shadow-none" value="<?php echo $event_data['id'] ?>" required>
                </div>
                <div class="col-md-6 mb-5">
                  <label class="form-label">Event Price</label>
                  <input name="price" type="text" class="form-control shadow-none" value="<?php echo $event_data['price'] ?>" required>
                </div>
                <div class="col-md-6 mb-5">
                  <label class="form-label">Event Name</label>
                  <input name="ename" type="text" class="form-control shadow-none" value="<?php echo $event_data['name'] ?>" required>
                </div>
                <div class="col-12">
                <button type="submit" name="submit" class="btn btn-primary">Pay with khalti</button>
                 </div>
              </div>
            </form>




          </div>
        </div>

      </div>


    </div>


  </div>

  <?php include('footer.php'); ?>
</body>

</html>