<?php
require('../inc/essentials.php');
require('../inc/db_config.php');
adminLogin();

if(isset($_POST['get_general'])){
$q = "SELECT * FROM `settings` WHERE `id`=?";
$values = [1];
$res = select($q,$values,"i");
$data = mysqli_fetch_assoc($res);
$json_data = json_encode($data);
echo $json_data;
}

if(isset($_POST['update_general']))
{
  $frm_data = filtration($_POST);
  $q = "UPDATE `settings` SET `website_title`=?, `website_info`=? WHERE `id`=?";
  $values = [$frm_data['website_title'],$frm_data['website_info'],1];
  $res = update($q,$values,'ssi');
  echo $res;

}

if(isset($_POST['update_shutdown']))
{
  $frm_data = ($_POST['update_shutdown']==0) ? 1 : 0;
  $q = "UPDATE `settings` SET `shutdown`=?  WHERE `id`=?";
  $values = [$frm_data,1];
  $res = update($q,$values,'ii');
  echo $res;

}
?>