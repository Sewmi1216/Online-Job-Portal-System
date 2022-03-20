<!DOCTYPE html>

<head>
    <title>header</title>
    <link rel="stylesheet" href="css/signin.css?v=<?php echo time(); ?>">
</head>

<body>
    <div class="nav-wrap">
        <ul id="nav">
            <li><a href="../login.php" class="login">Login</a></li>
            <li><a href="../Aboutus.php">About Us</a></li>
            <li><a href="../home.php">Home</a></li>
            <li class="logo"><img src="../images/jobhunt1.jpeg" alt="Logo" height="33%" width="33%"></li>
        </ul>
    </div>

<div class="two-column-box">
	<div>
        <div style="font-size:25px; margin-bottom:40px;"><b>Register as a <font color="#006400">Candidate</font></b></div>
        <button onclick ="location.href='registerCandidate.php'">Register</button>
        </div>
	<div>
    <div style="font-size:25px; margin-bottom:40px;"><b>Register as a <font color="#663399">Company</font></b></div>
        <button onclick ="location.href='registerCompany.php'">Register</button>
        </div>
</div>


<footer>
        <img src="../images/jobhunt1.jpeg" alt="Logo" height="20%" width="20%" position="center">
        <p class="links">
            <a href="../home.php" class="footer_link">Home</a>|
            <a href="../Aboutus.php" class="footer_link">About</a>
        </p>
        <p>Job Hunt &copy; 2022 <br>

            All Rights Reserved</p><br>
        </div>

</footer>

</body>

</html>