<?php

include "db/db_connection.php";

if (isset($_POST['signIn'])) {
    session_start();
    $username = $_POST['username'];
    $pwd = $_POST['password'];

    $query1 = "SELECT * FROM candidate WHERE UserName = '$username' AND Password = '$pwd'";
    $query2 = "SELECT * FROM company WHERE UserName = '$username' AND Password = '$pwd'";
    $query3 = "SELECT * FROM admin WHERE UserName = '$username' AND Password = '$pwd'";
    $result1 = mysqli_query($conn, $query1);
    $result2 = mysqli_query($conn, $query2);
    $result3 = mysqli_query($conn, $query3);

    if (mysqli_num_rows($result1) > 0 or mysqli_num_rows($result2) > 0 or mysqli_num_rows($result3) > 0) {
        $row1 = mysqli_fetch_assoc($result1);
        $row2 = mysqli_fetch_assoc($result2);
        $row3 = mysqli_fetch_assoc($result3);

        if ($row1['UserName'] == $username && $row1['Password'] == $pwd) {
            $_SESSION['user'] = $row1['UserName'];

            $_SESSION['id'] = $row1['CandidateId'];

            header("Location: candidate/jobPost.php");
            exit();
        } else if ($row2['UserName'] === $username && $row2['Password'] === $pwd) {
            $_SESSION['user'] = $row2['UserName'];

            $_SESSION['id'] = $row2['CompanyId'];

            header("Location: Company/showpost.php");
            exit();
        } else if ($row3['UserName'] === $username && $row3['Password'] === $pwd) {
            $_SESSION['user'] = $row3['UserName'];

            $_SESSION['id'] = $row3['AdminId'];

            header("Location: admin/viewFeedback.php");
            exit();
        } else {
            exit(); 
        }
    } else {
        header("Location: login.php?error=The username is taken try another");
        echo "<script type='text/javascript'>alert('Incorrect Password');</script>";
        exit();

    }
}

?>



<!DOCTYPE html>

<head>
    <title>header</title>
    <link rel="stylesheet" href="register/css/signin.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="nav-wrap">
        <ul id="nav">
            <li><a href="login.php" class="login">Login</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="home.php">Home</a></li>
            <li class="logo"><img src="./images/jobhunt1.jpeg" alt="Logo" height="33%" width="33%"></li>
        </ul>
    </div>


    <div class="login-page">
  <div class="form">
    <form class="login-form" method="POST">
    <div style="text-align:center;font-size:30px;margin-bottom:15px;">LOGIN</div>
      <input type="text" class="field" name="username" placeholder="Username"/>
      <input type="password" class="field" name="password" placeholder="Password"/>
      <input type="submit" class="btn" value="Submit" name="signIn">
      <p class="message">Not registered? <a href="register/register.php" style="text-decoration:none;">Create an account</a></p>
    </form>
  </div>
</div><br><br><br>

  <footer>
        <img src="./images/jobhunt1.jpeg" alt="Logo" height="20%" width="20%" position="center">
        <p class="links">
            <a href="home.php" class="footer_link">Home</a>|
            <a href="Aboutus.php" class="footer_link">About</a>
        </p>
        <p>Job Hunt &copy; 2022 <br>

            All Rights Reserved</p><br>
        </div>

</footer>

</body>

</html>