<?php
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'event_website';

$conn = mysqli_connect($hostname, $username, $password, $database);
if (!$conn) {
  die("Cannot coonect to database " . mysqli_connect_error());
}

function filtration($data)
{
  foreach ($data as $key => $value) {
    $data[$key] = trim($value);
    $data[$key] = stripslashes($value);
    $data[$key] = htmlspecialchars($value);
    $data[$key] = strip_tags($value);
  }
  return $data;
}

function select($sql, $values, $datatypes)
{
  $conn = $GLOBALS['conn'];
  if ($stmt = mysqli_prepare($conn, $sql)) {
    mysqli_stmt_bind_param($stmt, $datatypes, ...$values); //... is splat operator allows arbitary number of parameters
    if (mysqli_stmt_execute(($stmt))) {
      $res = mysqli_stmt_get_result($stmt);
      mysqli_stmt_close($stmt);

      return $res;
    } else {
      mysqli_stmt_close($stmt);
      die("Query cannot be executed - SELECT");
    }
  } else {
    die("Query cannot be prepared - SELECT");
  }
}
