
<?php
include "../db/db_connection.php";

if (isset($_POST["submit"])) {
    $UserName = $_POST['UserName'];
    $Password = $_POST['Password'];
    $Name = $_POST['Name'];
    $Gender = $_POST['Gender'];
    $Email = $_POST['Email'];
    $Phone = $_POST['Phone'];

    $file = $_FILES['image']['name'];

    $filename = $_FILES["file"]["name"];

    $tempname = $_FILES["file"]["tmp_name"];

    $folder = "image/" . $filename;

    $sql = "INSERT INTO candidate (UserName, Password, Name, Gender, Email, Phone, Image) VALUES('$UserName', '$Password', '$Name', '$Gender', '$Email', '$Phone', '$filename')";

    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($tempname, $folder);
        echo "<script> alert('Records added successfully')</script>";
        header("Location:../login.php");
    } else {
        echo "<script> alert('Records are not added successfully')</script>";
        echo $sql;
    }
}

?>




<!DOCTYPE html>

<head>
    <title>header</title>
    <link rel="stylesheet" href="css/signin.css">
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


    <div class="login-page">
  <div class="form">
  <h2><font color="#191970">Candidate Registration Form</font></h2>
    <form action ="#" method="POST" class="login-form" enctype="multipart/form-data">
      <b><label>Username</label></b>
      <input type="text" class="field" placeholder="Username" name="UserName" required/>
      <b><label>Password</label></b>
      <input type="password" class="field" placeholder="password" name="Password" required/>
       <b><label>Name</label></b>
      <input type="text" class="field" placeholder="Name" name="Name"/>
      <b><label >Gender</label><br><br></b>
      <table><tr><td><label class="radio-inline">
      <input type="radio" class="field" name="Gender" value="male" checked>Male
       </label></td>
       <td width=15%></td>
      <td><label class="radio-inline">
      <input type="radio" class="field" name="Gender" value="female">Female
      </label></td></tr></table><br>
      <b><label>Email</label></b>
      <input type="text" class="field" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" name="Email" required/>
      <b><label>Phone</label></b>
      <input type="text" class="field" placeholder="Phone" pattern= "[0-9]{10}" name="Phone" required/>
      <b><label>Upload your photo</label></b>
      <input type="file" class="field" name="file"/>
       <button name="submit" class="btn">Register</button>
 <p class="message">Already have an account? <a href="../login.php">Log in</a></p>
    </form>
  </div>
</div><br><br><br>

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