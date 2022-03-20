<!DOCTYPE html>
<html>
<head>
    <title>Job Hunt</title>
    <link rel="stylesheet" href="../candidate/css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../candidate/css/candidate.css?v=<?php echo time(); ?>">
</head>

<body>
<!-- Header -->
<?php include "nav.php"?>

<hr>


<div class="container" style="margin-top:70px;">
<h1 style="text-align:center;">User Feedbacks</h1>
<table width="100%">
<tr>
	<th> Name</th>
    <th> Email</th>
	<th> Message</th>
</tr>
<?php
$query = "SELECT * from feedback";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <tr>
        <td><?php echo $row["Name"] ?></td>
        <td><?php echo $row["Email"] ?></td>
        <td><?php echo $row["Message"] ?></td>
        </tr>
<?php }
} else {
    echo "No results";
}
?>
</table>
<br/><br/><br/><br/><br/>

</div>


<hr>

<!-- Footer -->
<?php include "../candidate/footer.php"?>


</body>
</html>