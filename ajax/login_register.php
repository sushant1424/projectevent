<?php
require('../admin/inc/essentials.php');
require('../admin/inc/db_config.php');
require('../sendgrid/sendgrid-php.php');
function sendMail($user_email,$name,$token)
{
  $email = new \SendGrid\Mail\Mail();
  $email->setFrom("shresthasushant227@gmail.com", "Upscale");
  $email->setSubject("Account verification");
  $email->addTo("$user_email", "$name");
  
  $email->addContent(
    "text/html",
    "Click to confirm your email:<br>
    <a href='".SITE_URL."email_confirm.php?email_confirmation&email=$user_email&token=$token"."'>
    CLICK ME
    </a>
    "
  );
  $sendgrid = new \SendGrid(SENDGRID_API_KEY);
  try {

     $sendgrid->send($email);
      return 1;
   
  } catch (Exception $e) {
   return 0;
  }
}

if (isset($_POST['register'])) {
  $data = filtration($_POST);

  //PASSWORD AND CONFIRM PASSWORD MATCH

  if ($data['password'] != $data['confirm_pass']) {
    echo 'pass_mismatch';
    exit;
  }

  // exists or not
  //select from table and then if match is found then stop executing query
  $user_exists = select("SELECT * FROM `user_register` WHERE `email` = ? OR `phone` =? LIMIT 1", [$data['email'], $data['phone']], "ss");

  if (mysqli_num_rows($user_exists) != 0) {
    $user_exists_fetch = mysqli_fetch_assoc($user_exists);
    echo ($user_exists_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';
    exit;
  }

  //uploading user image to the server

  $img = uploadUserPicture($_FILES['picture']);

  if ($img == 'inv_img') {
    echo "inv_img";
    exit;
  } else if ($img == 'upd_failed') {
    echo "upd_failed";
    exit;
  }



  // confirmation link to email

  $token = bin2hex(random_bytes(16)); //generate random byte codes.

  if(sendMail($data['email'],$data['username'],$token)){
    echo "mail_failed";
    exit;
  }

  $enc_password = password_hash($data['password'],PASSWORD_BCRYPT); //for encrypting the password

  $sql = "INSERT INTO `user_register`( `username`, `email`, `password`, `phone`, `photo`, `address`, `dob`, `token`) VALUES (?,?,?,?,?,?,?,?,?)";

  $values= [$data['username'],$data['email'],$enc_password,$data['phone'],$img['photo'],$data['address'],$data['dob'],$token];

  if(insert($sql,$values,'sssssssss')){
    echo  1;
  }
  else{
    echo 'ins_failed';
  }

}
