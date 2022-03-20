<!DOCTYPE html>

<head>
    <title>Job Hunt</title>
    <link rel="stylesheet" href="home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="candidate/css/candidate.css?v=<?php echo time(); ?>">
</head>

<body>
<div class="content">
<!-- Header -->
<div>
        <ul id="nav">
            <li><div class="login" onclick="location.href='login.php'">Login</a></li>
            <li><a href="Aboutus.php">About Us</a></li>
            <li><a href="help.php">Help</a></li>
            <li><a href="home.php">Home</a></li>
            <li class="logo"><img src="images/jobhunt1.jpeg" alt="Logo" height="33%" width="33%"></li>
        </ul>
    </div>

<hr>

<div style="position:relative; text-align: center">
  <img class="mySlides" src="images/2.jpg" style="width:1489px; height:1000px;margin-left:0px;margin-right:0px;">
    <div class="text"><h3>Looking for the better job</h3> <br><br><h1>Find your dream job <h1><br><br> <h2>Start your job search here</h2></div>
  <img class="mySlides" src="images/3.jpg" style="width:1489px; height:1000px;margin-left:0px;margin-right:0px;">
  <div class="text"><h3>Looking for the better job</h3> <br><br><h1>Find your dream job <h1><br><br> <h2>Start your job search here</h2></div>
  <img class="mySlides" src="images/4.jpg" style="width:1489px; height:1000px;margin-left:0px;margin-right:0px;">
  <div class="text"><h3>Looking for the better job</h3> <br><br><h1>Find your dream job <h1><br><br> <h2>Start your job search here</h2></div>

</div>


<div class="container">
<h1 style="text-align:center;">Trending Job Vacancy</h1>
<?php
require 'db/db_connection.php';
				$query = "SELECT c.*, v.*,count(a.ApplicationId) FROM application a, company c, vacancy v where c.CompanyId=v.CompanyId and v.VacancyId=a.VacancyId HAVING count(a.ApplicationId)>1;";
				$result = mysqli_query($conn, $query);
        ?>
        
        <?php
				if(mysqli_num_rows($result) > 0)
				{
         
					while($row = mysqli_fetch_array($result))
					{
				?>
					<div class="posts">
               
            <?php echo "<img src='register/image/".$row['Image']."' style='width:220px;height: 240px;background-size: 100%;background-repeat: no-repeat;margin: 20px auto 15px;'>"; ?>
            
            <div style="color: black;margin: 5px;font-size: 25px;"><?php echo $row["Name"]; ?></div>

            <div style="color: black;margin: 5px;font-weight:bold;font-size: 18px;"><?php echo $row["Title"]; ?></div>

          </div>

          
			<?php
					}
          }?>


</div>
 




<hr>

<!-- Footer -->
<?php include("footer.php")?>

        </div>
<script>
var myIndex = 0;
changeimg();

function changeimg() {
  
  var a;
  var x = document.getElementsByClassName("mySlides");
  for (a = 0; a < x.length; a++) {
    x[a].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {
    myIndex = 1
  }    
  x[myIndex-1].style.display = "block";  
  setTimeout(changeimg, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>