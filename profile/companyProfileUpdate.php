<?php
$CompanyId = $_GET['CompanyId'];
$UserName = $_GET['UserName'];
$Name = $_GET['Name'];
$Address = $_GET['Address'];
$Email = $_GET['Email'];
$Phone = $_GET['Phone'];
$CompanyType = $_GET['CompanyType'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/profileUpdate.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">

    <title>Edit profile</title>
</head>
<body class="profile-page">
<!-- Header -->
<?php include "navCompany.php";?>
<center>
    <div class="containers" >
        <h2>Update Company Profile</h2>
        <form action="updateCompanyRecord.php" method="get" >
            <input name="ID" type="hidden" maxlength="10" value="<?php echo $CompanyId; ?>" />



            <div style="margin-top: 50px">
          <div class="labels">
            Company Name :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
          <input type="text" name="Name" value="<?php echo $Name; ?>" required>
          </div>
        </div>

        <div style="margin-top: 50px">
          <div class="labels">
            Address :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
          <input type="text" name="Address"  value="<?php echo $Address; ?>"  required>
          </div>
        </div>

        <div style="margin-top: 50px">
          <div class="labels">
            Email :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
          <input type="text" name="Email"  value="<?php echo $Email; ?>">
          </div>
        </div>
        <div style="margin-top: 50px">
          <div class="labels">
           Phone Number :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
          <input type="text" name="Phone" value="<?php echo $Phone; ?>"  required>
          </div>
        </div>
        <div style="margin-top: 50px">
          <div class="labels">
           Company Type :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
          <input type="text" name="CompanyType" value="<?php echo $CompanyType; ?>"  required>
          </div>
        </div>
        <div style="margin-top: 50px">
          <div class="labels">
           User Name :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
          <input type="text" name="UserName" value="<?php echo $UserName; ?>"  required>
        </div>
        </div>

            <div style="margin-top:30px;">
                <button type="submit" name="submit" class="btn">Update Profile</button>
            </div>
        </form>
    </div>
    </center>
    <!-- Footer -->
    <?php include "../candidate/footer.php"?>
</body>
</html>