<?php

function getFileName() {
  return basename($_SERVER['PHP_SELF']);
}

function isPage($page) {
  if(getFileName() == $page) { return true; }
}

function isActivePage($page) {
  if(isPage($page)) { echo " class='active'"; }
}

function emailExist($email) {
 if(findUser($email)) {
   return true;
 } else {
   return false;
 }
}

function readData($file) {
  return json_decode(file_get_contents($file));
}

function writeFile($file, $data) {
  file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));
}

function insertUser($email, $password, $username) {
  global $config;
  $user_json = $config['home'] . "/databases/webadank/users.json";
  $data = readData($user_json);
  $id = end($data)->id + 1;
  $data[] = (object) array("id"=>$id, "email"=>$email, "pass"=>md5($password),"username"=>$username);
  writeFile($user_json, $data);
}

// Try password to see if user input is correct correct
function password($email) {
  $user = findUser($email);
  if($user->pass == $password) {
    return true;
  } else {
    return false;
  }
}

function findUser($email) {
  global $config;
  $users = readData($config['home'] . "/databases/webadank/users.json");
  foreach($users as $user) {
    if($user->email == $email) {
      return $user;
    }
  }
  return false;
}

