<?php
require '../db/db_connection.php';
session_start();
$user ="";
if(isset($_SESSION["user"]) && isset($_SESSION["id"])){
   $id =$_SESSION["id"];
}else{
   header("location:../home.php");
}
?>
<div>
        <ul id="nav">
            <li><div class="login" onclick="location.href='../logout.php'">Logout</li>
            <li><a href="../profile/candidateProfile.php">Profile</a></li>
            <li><a href="feedback.php">Contact Us</a></li>
            <li><a href="../Aboutus.php">About Us</a></li>
            <li><a href="jobPost.php">Home</a></li>
            <li class="logo"><img src="../images/jobhunt1.jpeg" alt="Logo" height="33%" width="33%"></li>
        </ul>
    </div>

