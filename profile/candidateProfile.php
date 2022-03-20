<!DOCTYPE html>
<html>
<head>
    <title>header</title>
    <link rel="stylesheet" href="css/profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
</head>

<body>
<!-- Header -->
<?php include "nav.php"?>
<hr>
<center>
<div class="container">
      <strong class="title">My Profile</strong>

      <?php

$query = "SELECT * FROM candidate WHERE CandidateId ='$id'";

if ($result = mysqli_query($conn, $query)) {
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_array($result)) {
            echo "<img src='../register/image/" . $row['Image'] . "' style='border-radius: 50%;width:120px;height: 130px;background-size: 100%;background-repeat: no-repeat;margin: 20px auto 15px;'>";

            echo " <div style='text-align:left;'>";
            echo "<div class='info'><strong>Name:</strong> <span>" . $row['Name'] . "</span></div>";
            echo "<div class='info'><strong>Gender:</strong> <span>" . $row['Gender'] . "</span></div>";
            echo "<div class='info'><strong>Email:</strong> <span>" . $row['Email'] . "</span></div>";
            echo "<div class='info'><strong>Phone:</strong> <span>" . $row['Phone'] . "</span></div>";
            echo "<div class='info'><strong>User Name:</strong> <span>" . $row['UserName'] . "</span></div>";

            ?>
</div>
            <div>
                <button onclick="document.location='profileUpdate.php?CandidateId=<?php echo $row['CandidateId']; ?> &Name=<?php echo $row['Name']; ?> &Gender=<?php echo $row['Gender']; ?> &Email=<?php echo $row['Email']; ?> &Phone=<?php echo $row['Phone']; ?> &UserName=<?php echo $row['UserName']; ?>'" type="submit" name="submit" class="btn" href="">Edit Profile</button>
            </div>

            <?php echo "<a href='deleteProfile.php?id=$row[CandidateId]'>"; ?>
                <input type="submit" name="delete" class="btn" style="margin:400;margin-top:5px;width:250px;height:45px; " value="Delete Profile" />
            <?php echo "</a>";

        }

    } else {
        echo "No records matching your query were found.";
    }
} else {
    echo "<script> alert('Your application is processing right now.You cannot delete your account at the moment.')</script>";
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



