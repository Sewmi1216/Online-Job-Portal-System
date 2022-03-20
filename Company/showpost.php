<?php
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>add a post</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/candidate.css?v=<?php echo time(); ?>">
</head>


<body>
<div class="container" style="background-color:rgba(255, 255, 255, 0.521);">

<?php
$query = "select * from vacancy v, company c where c.CompanyId=v.CompanyId and v.CompanyId='$id'";


?>
        <div class="grid-container">
        <?php
if ($result = mysqli_query($conn, $query)) {
    if (mysqli_num_rows($result) > 0) {
        while ($rows = mysqli_fetch_array($result)) {

            ?>
                <div class="posts">
                <?php echo "<img src='../register/image/" . $rows['Image'] . "' style='width:220px;height: 240px;background-size: 100%;background-repeat: no-repeat;margin: 20px auto 15px;'>"; ?>
                <div style="color: black;margin: 5px;font-size: 12px;"><?php echo $rows['Date']; ?></div>
                <div style="color: black;margin: 5px;font-weight:bold;font-size: 18px;"><?php echo $rows['Title']; ?></div>
                <div style="color: black;margin: 5px;font-weight:bold;font-size: 15px;"><?php echo $rows['Type']; ?></div>
                <div style="color: black;margin: 5px;font-weight:bold;font-size: 12px;text-align:justify;"><?php echo $rows['Description']; ?></div>
                <div style="color: black;margin: 5px;font-weight:bold;font-size: 12px;">Closing Date : <?php echo $rows['ExpDate']; ?></div>
                <br/>
                <div style="margin-bottom:10px;">
                <?php echo "<a href='update.php?updateid=$rows[VacancyId]&Date=$rows[Date]&Title=$rows[Title]&Type=$rows[Type]&Description=$rows[Description]&ExpDate=$rows[ExpDate]'>"; ?>
                <input type="submit" name="update" class="btnBlue" style="margin:20px;margin-top:5px;width:100px;height:40px;" value="Update" />
                <?php echo "</a>" ?>

                <?php echo "<a href='delete.php?deleteid=$rows[VacancyId]&Date=$rows[Date]&Title=$rows[Title]&Type=$rows[Type]&Description=$rows[Description]&ExpDate=$rows[ExpDate]'>"; ?>
                <input type="submit" name="delete" class="btnBlue" style="margin:0;margin-top:5px;width:100px;height:40px; " value="Delete" />
                <?php echo "</a>" ?>

                                    </div>
</div>


			<?php
}
    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}?>
          </div>

</div>


<!-- Footer -->
<?php include "../candidate/footer.php"?>
</body>

</html>
