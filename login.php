<?php
include "config.php";
include "includes/functions.php";

// Process form
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
  $email = $_POST['email'];
  $user = findUser($email);
  $password = md5($_POST['password']);
  if($password == $user->pass) {
    $user_message = "<p class='alert alert-info'>You are logged in as $email</p>";
  } else {
    $user_message = "<p class='alert alert-warning'>Username or password incorrect for $email</p>";
  }
}

?>

<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<h1>Log In</h1>
<?php if(isset($user_message)) { echo $user_message; } ?>
<p>Register and get an email confirmation.</p>

<form class="form" action="login.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php include "includes/footer.php"; ?>
