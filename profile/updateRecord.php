<?php
require '../db/db_connection.php';
if (isset($_GET['submit'])) {
    $id = $_GET['ID'];
    $Name = $_GET['Name'];
    $Gender = $_GET['Gender'];
    $Email = $_GET['Email'];
    $Phone = $_GET['Phone'];
    $UserName = $_GET['UserName'];

    $query = "update candidate set Name='$Name', Gender='$Gender', Email='$Email', Phone='$Phone', UserName='$UserName' where CandidateId = '$id'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record update successfully')</script>";
        header("Location:candidateProfile.php");
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }

}
