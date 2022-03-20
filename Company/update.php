<?php
include "nav.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Application form for the company</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/home.css">

    </head>
   <body>
   <?php $getid = $_GET['updateid'];?>
   <?php $Title = $_GET['Title'];?>
   <?php $Type = $_GET['Type'];?>
   <?php $Description = $_GET['Description'];?>
   <?php $ExpDate = $_GET['ExpDate'];?>

   <form style="margin-left: 350px; margin-right: 350px;margin-top:50px;;" method="get" action="updateRecords.php">
   <br><br>
        <div style="background-color:rgba(255, 255, 255, 0.521);"><br>
        <div align="center" style="margin-top:20px;font-size:30px;"><b>Update Job Post</b></div><br>
            <table cellpadding="10" cellspacing="20" align="center">

            <tr>
                    <td><input name="ID" type="hidden" maxlength="10" value="<?php echo $getid; ?>" /></td>
                </tr>

                 <tr>
                    <td><label for="Title">Title :</label></td>
                    <td><input name="Title" type="text" maxlength="60" style="width:100%;max-width:250px;" value="<?php echo $Title; ?>"/></td>
                </tr>

                <tr>
                    <td><label for="Type">Type :</label></td>
                    <td><input name="Type" type="text" maxlength="60" style="width:100%;max-width:250px;" value="<?php echo $Type; ?> "/></td>
                </tr>

                <tr>
                    <td><label for="Description">Description :</label></td>
                    <td><textarea name="Description" rows="5" cols="30" style="width:100%;max-width:350px;"><?php echo $Description; ?></textarea></td>
                </tr>

                <tr>
                    <td><label for="ExpDate">Expiry Date :</label></td>
                    <td><input name="ExpDate" type="date" maxlength="43" style="width:100%;max-width:250px;" value="<?php echo $ExpDate; ?>"/></td>
                </tr>

                    <td><label for="Submit"> </label></td>
                    <td><button type="submit" name="submit" class="btnsub">Update</button></td>
                </tr>

            </table>

</div>

    </form>
    <br><br>
    <?php

include "footer.php";

?>

</body>

</html>

