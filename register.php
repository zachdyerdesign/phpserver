<?php

include "includes/database.php";
include "includes/header.php";

function emailExist($email) {
  global $db_conn;
  //check database for email
  $query = "SELECT username FROM users WHERE username = '$email'";
  $run_query = mysqli_query($db_conn, $query);
  if(mysqli_num_rows($run_query) > 0) {
    return true;
  } else {
    return false;
  }
}

function insertUser($username, $password) {
  //insert user in the database new user
  global $db_conn;
  $password = md5($password);
  $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
  $run_query = mysqli_query($db_conn, $query);
}

// Process form
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confirm = $_POST['confirm'];
  if($password == $confirm) {
    if(emailExist($email)) {
      $user_message = "<p class='alert alert-warning'>$email already registered</p>";
    } else {
      //insertUser($email, $password);
      // $user_message = "<p class='alert alert-success'><strong>Success!</strong> You registered</p>";
      mail("zach.dyer@zachdyerdesign.com", "My subject", "test", "From: zach.dyer@gmail.com");
      $user_message = "<p class='alert alert-info'>An email confirmation has been sent to $email</p>";
    }
  } else {
    $user_message = "<p class='alert alert-warning'>Password does not match</p>";
  }
}

?>

<h1>Register</h1>
<?php if($user_message) { echo $user_message; } ?>
<p>Register and get an email confirmation.</p>

<form class="form" action="register.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php include "includes/footer.php"; ?>
