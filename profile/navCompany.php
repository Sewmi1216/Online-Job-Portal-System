<?php
require '../db/db_connection.php';
session_start();
$user = "";
if (isset($_SESSION["user"]) && isset($_SESSION["id"])) {
    $id = $_SESSION["id"];
} else {
    header("location:../home.php");
}
?>
<div>
        <ul id="nav">
             <li><a href="../logout.php" class="logout">Logout</a></li>
                <li><a href="../profile/companyProfile.php">Profile</a></li>
                <li><a href="../Company/viewApplications.php">View Applications</a></li>
                <li><a href="../Company/application.php">Post Ads</a></li>
                <li><a href="../Company/showpost.php">Home</a></li>
                <li class="logo"><img src="../images/jobhunt1.jpeg" alt="Logo" height="33%" width="33%"></li>
        </ul>
    </div>
