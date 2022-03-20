<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet"href="candidate/css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="profile/css/profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../css/help.css">
    <title>Help</title>
</head>
<body>
  <!-- Header -->
  <div>
        <ul id="nav">
            <li><div class="login" onclick="location.href='login.php'">Login</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="home.php">Home</a></li>
            <li class="logo"><img src="images/jobhunt1.jpeg" alt="Logo" height="33%" width="33%"></li>
        </ul>
    </div>
    <h2>Help</h2>
    <p>Quick links</p>
    <div style="margin-top:100px;margin-left:642px;margin-bottom:50px;">
    <div>
        <button onclick="document.location='register/register.php'" type="submit" name="submit" class="btn" href="">Click here to Register</button>
      </div>
      <div>
        <button onclick="document.location='candidate/jobPost.php'" type="submit" name="submit" class="btn" href="">View job vaccancies</button>
      </div>
      <div>
        <button onclick="document.location='candidate/feedback.php'" type="submit" name="submit" class="btn" href="">Contact Us</button>
      </div>
</div>
<br/><br/><br/><br/><br/>
<!-- Footer -->
  <?php include("footer.php")?>     
</body>
</html>