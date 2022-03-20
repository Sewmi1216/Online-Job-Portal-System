<?php
require '../db/db_connection.php';
if (isset($_GET['submit'])) {
    $id = $_GET['ID'];
    $Name = $_GET['Name'];
    $Address = $_GET['Address'];
    $Email = $_GET['Email'];
    $Phone = $_GET['Phone'];
    $UserName = $_GET['UserName'];
    $CompanyType = $_GET['CompanyType'];

    $query = "update company set Name='$Name', Address='$Address', Email='$Email', Phone='$Phone', CompanyType='$CompanyType', UserName='$UserName' where CompanyId = '$id'";
    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Record update successfully')</script>";
        header("Location:companyProfile.php");
    } else {
        echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
    }

}
