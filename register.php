<?php include "includes/header.php"; ?>

<?php
// Process form
if($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'];
  $password = $_POST['password'];
}

?>

<h1>Register</h1>
<p><?php if(isset($email)) { echo "Your email is $email and your password is $password."; } else { echo "Register and get an email confirmation.";}?></p>

<form class="form" action="register.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Confirm Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="confirm">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

<?php include "includes/footer.php"; ?>
