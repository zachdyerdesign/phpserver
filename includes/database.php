<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$user_message = null;
$db_select = "phpdatabase";
$db_conn = mysqli_connect($db_host, $db_user, $db_pass, $db_select);
if(!$db_conn) {
    $user_message = "<p class='alert alert-danger'>Could not connect to database.</p>";
  }
