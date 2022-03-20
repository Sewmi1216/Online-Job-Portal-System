<!DOCTYPE html>
<html>
<head>
    <title>header</title>
    <link rel="stylesheet" href="css/profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
</head>

<body>
<!-- Header -->
<?php include "navCompany.php"?>
<hr>
<center>
<div class="containers">
      <strong class="title">Company Profile</strong>

      <?php

$query = "SELECT * FROM company WHERE CompanyId ='$id'";

if ($result = mysqli_query($conn, $query)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<img src='../register/image/" . $row['Image'] . "' style='border-radius: 50%;width:120px;height: 130px;background-size: 100%;background-repeat: no-repeat;margin: 20px auto 15px;'>";

            echo " <div style='text-align:left;'>";
            echo "<div style='margin-bottom:20px;margin-left:25px;'><strong>Company Name:</strong> <span>" . $row['Name'] . "</span></div>";
            echo "<div style='margin-bottom:20px;margin-left:25px;'><strong>Address:</strong> <span>" . $row['Address'] . "</span></div>";
            echo "<div style='margin-bottom:20px;margin-left:25px;'><strong>Email:</strong> <span>" . $row['Email'] . "</span></div>";
            echo "<div style='margin-bottom:20px;margin-left:25px;'><strong>Phone:</strong> <span>" . $row['Phone'] . "</span></div>";
            echo "<div style='margin-bottom:20px;margin-left:25px;'><strong>Company Type :</strong> <span>" . $row['CompanyType'] . "</span></div>";
            echo "<div style='margin-bottom:20px;margin-left:25px;'><strong>User Name:</strong> <span>" . $row['UserName'] . "</span></div>";

            ?>
</div>
            <div>
                <button onclick="document.location='companyProfileUpdate.php?CompanyId=<?php echo $row['CompanyId']; ?> &Name=<?php echo $row['Name']; ?> &Address=<?php echo $row['Address']; ?> &Email=<?php echo $row['Email']; ?> &Phone=<?php echo $row['Phone']; ?> &CompanyType=<?php echo $row['CompanyType']; ?>&UserName=<?php echo $row['UserName']; ?>'" type="submit" name="submit" class="btn" href="">Edit Profile</button>
            </div>

            <?php echo "<a href='deleteCompanyProfile.php?id=$row[CompanyId]'>"; ?>
                <input type="submit" name="delete" class="btn" style="margin:400;margin-top:5px;width:250px;height:45px; " value="Delete Profile" />
            <?php echo "</a>";

        }

    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
    </div>
      <div>

        </div>

        </center>



<hr>

<!-- Footer -->
<?php include "../candidate/footer.php"?>


</body>
</html>



