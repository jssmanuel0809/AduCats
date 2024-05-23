<?php
require '../php/dbconnection.php';
include '../php/sessioncheck.php';
check_user_role(2);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Admin | AdU Cats</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- LINKS -->
        <link rel="stylesheet" href="../style/cat.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&display=swap" rel="stylesheet">
    </head>
    <body>
        <!-- NAVIGATION -->
        <nav class="nav_bar">

            <div class="left-navbar">
                <a href="index.html">Home</a>
                <a href="cat-overview.php">Cat Profiles</a>
                <a href="adoptionRequest.php">Adoption Request</a> 
                <a href="donationForm.php">Donation Form</a> 
            </div>
            
            <img id="AduCatsLogo" src ="../img/AduCatsLogoWhite.png">
            
            <div class="right-navbar">
                <a href=""><button>Logout</button></a>
            </div>
           
          </nav>

        <!-- CONTENT -->
        <section class="content">
            <div class="form_box">
                <form class="cat_form" action="../php/add_cat.php" method="post" enctype="multipart/form-data">
                    <label for="">Cat Name:</label><input type="text" name="name" required>
                    <label for="">Gender:</label>
                        <select name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    <label for="">Birthdate:</label><input type="date" name="birthdate" required>
                    <label for="">Health Status:</label><input type="text" name="health" required>
                    <label for="">Usually Seen:</label><input type="text" name="place" required>
                    <label for="">Adoption Status:</label>
                        <select name="adoption">
                            <option value="For adoption">For adoption</option>
                            <option value="Not for adoption">Not for adoption</option>
                        </select>
                    <div class="cat_image">
                        <label for="">Cat Images</label><input type="file" accept="image/*" name="images[]" required>
                    </div>
                    <button class="add_button" type="submit" name="add_cat">Add Cat</button>
                </form>
            </div>
        </section>
    </body>
</html>