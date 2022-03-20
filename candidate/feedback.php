<!DOCTYPE html>
<html>
<head>
    <title>header</title>
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/candidate.css">
</head>

<body>
<!-- Header -->
<?php include "header.php"?>
<hr>
<div class="container" style="width:500px;margin-top: 100px;margin-bottom:50px;">
<div style="margin-top: 30px; margin-left: auto;margin-right: auto;"><h1 style="text-align:center;">Contact Us</h1></div>
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
                Message :
              </div>
              <div style="margin-left: 150px; margin-top: -20px;">
                <textarea name="message" rows="5" cols="20"style="border-radius: 4px;" required></textarea>
              </div>
</div>

<div style="margin-top: 50px;margin-left:130px;">
    <button name="submit"class="btnBlue" style="height:35px;width:90px;font-size:20px;" type="submit"
                            onclick="myFunction()">
                        Submit
                    </button>
</div>






</form>

</div>


<hr>

<!-- Footer -->
<?php include "footer.php"?>


</body>
</html>

<?php

if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $msg = $_POST["message"];

    $sql = "INSERT INTO feedback (Name, Email, Message) VALUES ('$name', '$email', '$msg')";

    if (mysqli_query($conn, $sql)) {
        //echo "<script> alert('Records added successfully')</script>";
        header("Location:jobPost.php");
    } else {
        echo "<script> alert('Records are not added successfully')</script>";
        echo $sql;
    }
}

?>