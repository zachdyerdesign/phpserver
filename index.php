<?php error_reporting(E_ALL); ?>
<?php include "config.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php include "includes/nav.php"; ?>


<div class="jumbotron">
  <h1><?php echo $config['title']; ?></h1>
  <p><?php echo $config['title'] ?> makes it easy to build new websites and manage content. Fill out a form and your site is ready to go.</p>

  <!-- <div class="table-responsive">
    <table class="table">
      <tr>
        <td>PHP Version</td><td><? echo phpversion() ?></td>
      </tr>
    </table>
  </div>-->
</div>
<div class="row">
  <div class="col-md-12">
    <h2>Dashboard</h2>
    <p>The dashboard shows you your websites. Click your website to manage your content. And more things to come to the dashboard. </p>

    <h2>Easy Setup</h2>
    <p>Press a button to create a website. Fill out a website form to setup the website. </p>

    <h2>Collaboration</h2>
    <p>Collaborators can be invited and assigned to different roles. As an admin you can assign collaborators to specific websites and privledges. </p>

    <h2>Easy Backups</h2>
    <p>Export your website data as a CSV file.</p>
  </div>
</div>


<?php include "includes/footer.php"; ?>