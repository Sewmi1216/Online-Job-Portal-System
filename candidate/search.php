<!DOCTYPE html>
<html>
<head>
    <title>header</title>
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/candidate.css?v=<?php echo time(); ?>">
</head>

<body>
<!-- Header -->
<?php include "header.php"?>
<hr>

<div class="container" style="margin-top:70px;">
<h1 style="text-align:left;margin-left:40px;">Job Ads</h1>
    <?php
$search = $_GET['search'];
$submit = $_GET['submit'];

$query = "select * from company c, vacancy v where Title LIKE '%$search%' and c.CompanyId=v.CompanyId";
?>

        <?php
if ($result = mysqli_query($conn, $query)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
                <div class="posts">

                <?php echo "<img src='../register/image/" . $row['Image'] . "' style='width:220px;height: 240px;background-size: 100%;background-repeat: no-repeat;margin: 20px auto 15px;'>"; ?>

                <div style="color: black;margin: 5px;font-size: 25px;"><?php echo $row["Name"]; ?></div>

                <div style="color: black;margin: 5px;font-weight:bold;font-size: 18px;"><?php echo $row["Title"]; ?></div>

                <?php echo "<a href='postContent.php?vacancyid=$row[VacancyId]&companyName=$row[Name]'>"; ?>

                <input type="submit" name="apply" class="btnBlue" style="margin:0;margin-top:5px;width:60px;height:40px;" value="Apply" />
                <?php echo "</a>" ?>


					        </div>
                        <?php
}
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>


    </div>
<hr>

<!-- Footer -->
<?php include "footer.php"?>


</body>
</html>
