<?php
require '../db/db_connection.php';
if (isset($_GET['submit'])) {
    $id = $_GET['ID'];
    $Title = $_GET['Title'];
    $Type = $_GET['Type'];
    $Description = $_GET['Description'];
    $ExpDate = $_GET['ExpDate'];

    $data = mysqli_query($conn, "update vacancy set Title='$Title', Type='$Type', Description='$Description', ExpDate='$ExpDate' where VacancyId = '$id'");
    
    if ($data) {
        echo "<script>alert('Record update successfully')</script>";
        header("Location:showpost.php");
    } else {
        echo "<script>alert('Record update failed')</script>";
    }

}
