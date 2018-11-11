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

?>
