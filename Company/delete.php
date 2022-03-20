<?php

include "../db/db_connection.php";

$getid = $_GET['deleteid'];
$query = "DELETE FROM vacancy WHERE VacancyId = '$getid' ";

$data = mysqli_query($conn, $query);

if ($data) {
    echo "Record delete from database";
    header("Location:showpost.php");

} else {
    echo "Failed to delete from database";
}
