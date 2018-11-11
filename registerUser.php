<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array();

// connect to the database
define('DB_SERVER', '159.69.146.154');
define('DB_USERNAME', 'rotce_bananas');
define('DB_PASSWORD', 'WeWilltakeover!');
define('DB_DATABASE', 'rotce_minions');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

?>
