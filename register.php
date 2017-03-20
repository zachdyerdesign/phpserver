<?php
include "config.php";
include "includes/functions.php";

// Process form
if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['email'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $username = $_POST['username'];
  $confirm = $_POST['confirm'];
  if($password == $confirm) {
    if(emailExist($email)) {
      $user_message = "<p class='alert alert-warning'>$email already registered</p>";
    } else {
      insertUser($email, $password, $username);
      $user_message = "<p class='alert alert-success'><strong>Success!</strong> You registered</p>";
    }
  } else {
    $user_message = "<p class='alert alert-warning'>Password does not match</p>";
  }
}

?>


<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<h1>Register</h1>
<?php if(isset($user_message)) { echo $user_message; } ?>
<p>Register and get an email confirmation.</p>

<form class="form" action="register.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Username</label>
      <input type="text" class="form-control" id="username" aria-describedby="usernamehelp" placeholder="Enter username" name="username">
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
