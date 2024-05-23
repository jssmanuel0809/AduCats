<?php
require 'php/dbconnection.php';
include 'php/sessioncheck.php';
check_user_role(1);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>User Profile | AdU Cats</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- LINKS -->
        <link rel="stylesheet" href="style/user-profile.css">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&display=swap" rel="stylesheet">
    </head>

    <body>
        <header class="logo">
            <img src="img/Cat-2.png" alt="logo_cat">
            <h1>AduCats</h1>
        </header>
            <div class="hline"></div>
        <form action=""></form>
        <section class="upper">
            <h3>Account Information</h3>
                <div class="grid-container">
                    <div class="row">
                        <input type="text" id="username" placeholder="Username">
                        <input type="text" id="emailAddress" placeholder="Email Address">
                    </div>

                    <div class="row">
                        <input type="text" id="password" placeholder="Password">
                    </div>

                </div>

        </section>
        <section class="lower">
            <h3>Personal Information</h3>
                <div class="grid-container">
                    <div class="row">
                        <input type="text" id="firstName" placeholder="First Name">
                        <input type="text" id="lastName" placeholder="Last Name">
                    </div>

                    <div class="row">
                        <input type="text" id="phoneNumber" pattern="[0-9]{11}" placeholder="Phone Number" title="PLease enter a valid 11-digit phone number">
                        <input type="text" id="suffix" class="small-input" placeholder="Suffix">
                    </div>

                    <div class="row">
                        <input type="date" name="birthdate" id="birthdate" class="small-input" placeholder="Birthdate" required>
                    </div>
                </div>
        </section>
        <div class="btn">
            <button class="changePassword">CHANGE PASSWORD</button>
            <button class="edit">EDIT</button>
        </div>
    </form>
    <script> // Date picker
        const birthdateInput = document.getElementById('birthdate');
        const datepicker = new datepicker(birthdateInput); 

        birthdateInput.addEventListener('click', function() {
        datepicker.show(); 
        });
    </script>
    </body>
</html>