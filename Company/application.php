<?php
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Application form for the company</title>
        <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
        <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">


    </head>
   <body>
   <form style="margin-left: 350px; margin-right: 350px;margin-top:50px;margin-bottom:50px;" method="post">
   <br><br>
        <div style="background-color:rgba(255, 255, 255, 0.521);">
        <br/>
            <div align="center" style="margin-top:20px;font-size:30px;">Post your vacancy</div>
            <br/>
            <table cellpadding="10" cellspacing="20" align="center">

                <tr>
                    <td><label for="Title">Title :</label></td>
                    <td><input name="Title" type="text" maxlength="60" style="width:100%;max-width:250px;" required/></td>
                </tr>

                <tr>
                    <td><label for="Type">Type :</label></td>
                    <td><input name="Type" type="text" maxlength="60" style="width:100%;max-width:250px;" required/></td>
                </tr>
                <tr>
                    <td><label for="Description">Description :</label></td>
                    <td><textarea name="Description" rows="5" cols="50" style="width:100%;max-width:350px;"></textarea></td>
                </tr>

                <tr>
                    <td><label for="ExpDate">Expiry Date :</label></td>
                    <td><input name="ExpDate" type="date" maxlength="43" style="width:100%;max-width:250px;" required/></td>
                </tr>

                    <td><label for="Submit"> </label></td>
                    <td><button type="submit" name="submit" class="btnsub">Submit</button></td>
                </tr>

            </table>

</div>

    </form>

    <?php

if (isset($_POST['submit'])) {

/*$VacancyId = $_POST['VacancyId'];*/
    $Type = $_POST['Type'];
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];
    $ExpDate = $_POST['ExpDate'];

    $sql = "INSERT INTO vacancy (CompanyId, Date, Title, Type, Description, ExpDate) VALUES ('$id', curdate(),'$Title','$Type', '$Description','$ExpDate')";
    $insert = mysqli_query($conn, $sql);
    if (!$insert) {
        echo 'There was a error';
    } else {
        echo 'Your form was successfully submitted';
        header("Location:showpost.php");
    }
}

?>

    <?php
include "footer.php";
?>

   </body>

</html>





