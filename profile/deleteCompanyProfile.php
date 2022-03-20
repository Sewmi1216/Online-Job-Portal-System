<?php

include "../db/db_connection.php";

$getid = $_GET['id'];
$query = "DELETE FROM company WHERE CompanyId = '$getid' ";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Record delete from database";
    header("Location:../home.php");
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
