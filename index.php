<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>

<div class="jumbotron">
  <h1>PHP Server</h1>
  <p>Running PHP version <?php echo phpversion() ?> PHP 7 is not available on our Godaddy server. This server will run on zachdyer.com/phpserver and use a mysql database. </p>

  <div class="table-responsive">
    <table class="table">
      <tr>
        <td>PHP Version</td><td><? echo phpversion() ?></td>
      </tr>
    </table>
  </div>
</div>


<?php include "includes/footer.php"; ?>
