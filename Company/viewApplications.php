<?php
include "nav.php";
?>


<!DOCTYPE html>

<head>
    <title>header</title>
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../candidate/css/candidate.css?v=<?php echo time(); ?>">
</head>

<body>


<div class="container" style="margin-top:130px; background-color:rgba(255, 255, 255, 0.521);">
<h1 style="text-align:center;">View Applications</h1>
<br/><br/>
<table width="100%">
<tr>
    <th>Date</th>
    <th>Vacancy</th>
    <th>Name</th>
    <th>Email</th>
    <th>Address</th>
    <th>Phone</th>
    <th>CV</th>
</tr>
<?php

$query = "select * from application a, vacancy v where a.VacancyId=v.VacancyId and CompanyId='$id'";
if ($result = mysqli_query($conn, $query)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>              <tr>
                    <td><?php echo $row["Date"] ?></td>
                    <td><?php echo $row["Title"] ?></td>
                    <td><?php echo $row["Name"] ?></td>
                    <td><?php echo $row["Email"] ?></td>
                    <td><?php echo $row["Address"] ?></td>
                    <td><?php echo $row["Phone"] ?></td>
                    <td><button class="btnsub"><?php echo "<a href='../candidate/docs/" . $row['CV'] . "' style='text-decoration:none;color:black;' download>"; ?>
                   <b> Download </b><?php echo "</a>" ?></button></td>
                </tr>


<?php
}
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>



</table>


</div>
<br/><br/><br/>

<hr>

<!-- Footer -->
<?php include "../candidate/footer.php"?>


</body>
</html>