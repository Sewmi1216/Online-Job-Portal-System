
<?php
$vacancyId = $_GET['vacancyid'];
$companyName = $_GET['companyName'];
?>

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



<div class="container" style="width:500px;margin-top:70px;margin-bottom:50px;">


<?php
$query = "select * from company c, vacancy v where c.CompanyId=v.CompanyId and VacancyId='$vacancyId'";

if ($result = mysqli_query($conn, $query)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>

          <div style="margin-top: 5px; margin-left: 5px;margin-right: auto;"><h1 style="text-align:center;"><?php echo $row["Title"] ?></h1></div>
          <form method="post" style="margin-left: 50px">

          <div style="margin-left: 0px;font-size:17px;margin-top: 10px;">
                        <label>Date : </label><?php echo $row["Date"]; ?></br></br>
                        <label><?php echo $row["Address"]; ?></label>
          </div>

          <div style="margin-top: 30px;margin-left:50px;">
          <?php echo "<img src='../register/image/" . $row['Image'] . "' style='width:220px;height: 240px;background-size: 100%;background-repeat: no-repeat;margin: 20px auto 15px;'>"; ?>

          </div>


          <div style="margin-top: 50px;">
                        <div class="title">
                        <?php echo $companyName; ?>
                        </div>
                        <div style="margin-left: 0px;margin-right:10px;text-align:justify;margin-top: -20px;">
                          <p style="font-size:15px;"></br><?php echo $row["Description"]; ?></p>
                        </div>
                        <div style="margin-left: 0px;font-size:17px;margin-top: 10px;">
                        <label>Closing Date : </label><?php echo $row["ExpDate"]; ?>
                        </div>



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



</form>




              <?php echo "<a href='application.php?vacancyid=$vacancyId'>"; ?>

            <input type="submit" name="apply" class="btnBlue" style="margin-left:180px;margin-top:30px;height:35px;width:90px;font-size:20px;" value="Apply" />
            <?php echo "</a>" ?>

        </div>



</div>







<hr>

<!-- Footer -->
<?php include "footer.php"?>


</body>
</html>



