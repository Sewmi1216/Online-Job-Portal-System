<?php

include "../db/db_connection.php";

$getid = $_GET['id'];
$query = "DELETE FROM candidate WHERE CandidateId = '$getid' ";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Record deleted from database";
    header("Location:../home.php");
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
