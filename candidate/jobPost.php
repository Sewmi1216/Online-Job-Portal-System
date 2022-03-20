<!DOCTYPE html>
<html>
<head>
    <title>Job Hunt</title>
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/candidate.css?v=<?php echo time(); ?>">

</head>

<body>
<!-- Header -->
<?php include "header.php"?>

<hr>


<div style="height: 80px;margin-top:70px;">
            <div class="setHorizontalCenter" style="width: 700px">
                <div class="alignLeft" style="margin-top: 5px; font-size:20px;"></div>
                <div class="alignLeft">
                  <form action="search.php" name="searchform" method="get">
                    <div class="alignLeft"><input type="text" style="width: 350px;height:35px;margin-left: 125px;margin-top:5px;border-radius: 4px;" required
                                                  placeholder="Search by Job Title" name="search"></div>
                    <button class="btnBlue" style="margin-left: 15px;height:35px;margin-top:8px;font-size:20px;" type="submit"
                            name="submit">
                        Search
                    </button>
                    </form>
                </div>

            </div>
        </div>


<div class="container" >
<h1 style="text-align:left;margin-left:40px;">All Job Ads</h1>
<?php
require '../db/db_connection.php';
$query = "select * from company c, vacancy v where c.CompanyId=v.CompanyId";
$result = mysqli_query($conn, $query);
?>
        <?php
if (mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_array($result)) {

        ?>
					<div class="posts">

                    <?php echo "<img src='../register/image/" . $row['Image'] . "' style='width:220px;height: 240px;background-size: 100%;background-repeat: no-repeat;margin: 20px auto 15px;'>"; ?>
                    <div style="color: black;margin: 5px;font-size: 25px;"><?php echo $row["Name"]; ?></div>

                    <div style="color: black;margin: 5px;font-weight:bold;font-size: 18px;"><?php echo $row["Title"]; ?></div>

                    <?php echo "<a href='postContent.php?vacancyid=$row[VacancyId]&companyName=$row[Name]'>"; ?>

                    <input type="submit" name="apply" class="btnBlue" style="margin:0;margin-top:5px;width:60px;height:40px;" value="View" />
                    <?php echo "</a>" ?>


					</div>


			<?php
}
}?>


</div>


<hr>

<!-- Footer -->
<?php include "footer.php"?>


</body>
</html>