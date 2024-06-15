<?php
require('../inc/essentials.php');
require('../inc/db_config.php');
adminLogin();

if(isset($_POST['add_picture'])){
  $img_r = uploadImage($_FILES['picture'],GALLERY_FOLDER);
  if($img_r == 'inv_img'){
    echo $img_r;
  }
  else if($img_r == 'inv_size'){
    echo $img_r;
  }
  else if($img_r == 'upd_failed'){
    echo $img_r;
  }
  else{
    $sql = "INSERT INTO `gallery`( `images`) VALUES (?)";
    $values = [$img_r];
    $result = insert($sql,$values,'s');
    echo $result;


  }

}

if(isset($_POST['get_picture'])){
  $result = selectAll('gallery');

  while($row = mysqli_fetch_assoc($result)){
    $path = ABOUT_IMG_PATH;
    echo <<<items
    <div class="col-md-2" mb-3">
    <div class="card bg-dark text-white">
    <img src="$path$row[picture]" class="card-img">
    items;
  }

}