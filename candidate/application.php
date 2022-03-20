<?php
$vacancyId = $_GET['vacancyid'];
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
    <div style="margin-top: 5px; margin-left: auto;margin-right: auto;"><h1 style="text-align:center;">Job Application</h1></div>
      <form method="post" enctype="multipart/form-data" style="margin-left: 65px;">


        <div style="margin-top: 50px">
          <div class="labels">
            Name :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
            <input type="text" name="name" style="border-radius: 4px;" required>
          </div>
        </div>

        <div style="margin-top: 50px">
          <div class="labels">
            E-mail :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
            <input type="text" name="email" style="border-radius: 4px;" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
          </div>
        </div>

        <div style="margin-top: 50px">
          <div class="labels">
            Address :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
            <textarea name="address" rows="5" cols="20"style="border-radius: 4px;"></textarea>
          </div>
        </div>

        <div style="margin-top: 50px">
          <div class="labels">
            Phone Number :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
            <input type="text" name="phone" style="border-radius: 4px;" pattern= "[0-9]{10}" required>
          </div>
        </div>

        <div style="margin-top: 50px">
          <div class="labels">
            Upload your CV :
          </div>
          <div style="margin-left: 150px; margin-top: -20px;">
            <input type="File" name="file" required>
          </div>
        </div>

        <div style="margin-top: 50px;margin-left:130px;">
            <button name="submit" class="btnBlue" style="height:35px;width:90px;font-size:20px;" type="submit" onclick="myFunction()">
              Submit
            </button>
        </div>

      </form>
    </div>
  </div>
  <script>

    function myFunction() {
      var txt;
      if (confirm("Do you want to apply?")) {
        txt = "You pressed Yes!";
      } else {
        txt = "You pressed No!";
      }
    }

  </script>



  <hr>

  <!-- Footer -->
  <?php include "footer.php"?>


</body>
</html>

<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];

    $filename = $_FILES["file"]["name"];

    $tempname = $_FILES["file"]["tmp_name"];

    $folder = "docs/" . $filename;

    $sql = "INSERT INTO application (CandidateId, Name, Email, Address, Date, Phone, CV, VacancyId) VALUES ('$id', '$name', '$email', '$address', curdate(), '$phone','$filename', '$vacancyId')";

    if (mysqli_query($conn, $sql)) {
        move_uploaded_file($tempname, $folder);
        // echo "<script> alert('Records added successfully')</script>";
        header("Location:jobPost.php");
    } else {
        echo "<script> alert('Records are not added successfully')</script>";
        echo $sql;
    }
}

?>