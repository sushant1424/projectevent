<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Upscale Events - Confirm Booking</title>
  <style>
    /* Your CSS styles */
  </style>
  <!-- Include CryptoJS scripts in the head -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/crypto-js.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/hmac-sha256.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.9-1/enc-base64.min.js"></script>
</head>
<body>
  <?php include('header.php'); ?>
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
      "name" => htmlentities($event_data['name']),
      "price" => $event_data['price'],
      "payment" => null,
      "available" => false,
  ];

  $user_res = select("SELECT * FROM `user_register` WHERE `id`=? LIMIT 1", [$_SESSION['uid']], "i");
  $user_data = mysqli_fetch_assoc($user_res);
  ?>
  <div class="container mt-5">
    <div class="row">
        <div class="col-12 my-5 mb-4 px-4">
            <h2 class="fw-bold">Confirm Your Event Booking</h2>
            <div style="font-size:14px">
                <a href="index.php" class="text-secondary text-decoration-none">HOME</a>
                <span class="text-secondary"> > </span>
                <a href="events.php" class="text-secondary text-decoration-none">EVENTS</a>
                <span class="text-secondary"> > </span>
                <a href="#" class="text-secondary text-decoration-none">CONFIRM</a>
            </div>
        </div>
        <div class="col-lg-7 col-md-12 px-4">
            <?php
            $event_thumbnail = EVENTS_IMG_PATH . "thumb.png";
            $thumbnail_q = mysqli_query($conn, "SELECT * FROM `event_image` WHERE `event_id` = '{$event_data['id']}' AND `thumbnail`='1'");

            if (mysqli_num_rows($thumbnail_q) > 0) {
                $thumbnail_res = mysqli_fetch_assoc($thumbnail_q);
                $event_thumbnail = EVENTS_IMG_PATH . $thumbnail_res['image'];
            }

            echo <<<HTML
            <div class="card p-3 shadow-sm rounded">
            <img src="$event_thumbnail" class="img-fluid rounded mb-3">
            <h5>{$event_data['name']}</h5>
            <h6>{$event_data['price']}</h6>
            </div>
HTML;
            ?>
        </div>
        <div class="col-lg-5 col-md-12 px-4">
            <div class="card-mb-4 border-0 shadow-sm rounded-3">
                <div class="card-body px-3">
                    <form id="paymentForm" action="https://rc-epay.esewa.com.np/api/epay/main/v2/form" method="POST">
                        <input type="hidden" name="amount" value="<?php echo $event_data['price']?>" />
                        <input type="hidden" name="tax_amount" value="10" />
                        <input type="hidden" name="total_amount" value="<?php echo $event_data['price']?>" />
                        <input type="hidden" id="transactionUUID" name="transaction_uuid" />
                        <input type="hidden" name="product_code" value="EPAYTEST" />
                        <input type="hidden" name="product_service_charge" value="0" />
                        <input type="hidden" name="product_delivery_charge" value="0" />
                        <input type="hidden" name="success_url" value="http://localhost:8012/projectevent/projectevent/confirm_booking.php?id=<?php echo $event_data['id']?>" />
                        <input type="hidden" name="failure_url" value="http://localhost:5173/Cart" />
                        <input type="hidden" name="signed_field_names" value="amount,tax_amount,total_amount,transaction_uuid,product_code,product_service_charge,product_delivery_charge,success_url,failure_url" />
                        <input type="hidden" id="signature" name="signature" />
                        <button type='submit' class='text-white text-lg bg-green-600 hover-bg-green-700 cursor-pointer duration-200 px-2 py-1 rounded-md btn btn-primary'>Pay with eSewa</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php'); ?>
<script src="script/payment.js"></script>
<script>
  var hash = CryptoJS.HmacSHA256("Message", "secret");
  var hashInBase64 = CryptoJS.enc.Base64.stringify(hash);
  document.write(hashInBase64);
</script>
</body>
</html>
