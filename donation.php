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
    <title>Donate | AdU Cats</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- LINKS -->
    <link rel="stylesheet" href="style/form.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Aoboshi+One&display=swap" rel="stylesheet">
</head>

<body>
    <header class="logo">
        <a href="homepage.php"><img src="img/Cat-2.png" alt="logo_cat"></a>
        <h1>Donation</h1>
    </header>


    <div class="DonateForm">
        <form action="php/donation.php" method="post">
            <div class="upper">
                <h3>Donor</h3>
                <div class="grid-container">
                    <div class="row-radio">
                        <input type="radio" id="input-info" name="donor-info" value="Input">
                        <label class="no-click">Input Information</label>

                        <input type="radio" id="anonymous-info" name="donor-info" value="Anonymous">
                        <label class="no-click">Anonymous</label>

                    </div>

                    <div class="row">
                        <input type="text" id="name" placeholder="Name" name="name" disabled>
                        <input type="text" id="emailAddress" placeholder="Email Address" name="email" disabled>
                    </div>

                    <div class="row">
                        <input type="text" id="phoneNumber" name="contactno" pattern="[0-9]{11}" placeholder="Phone Number" title="Please enter a valid 11-digit phone number" disabled>
                    </div>
                </div>
            </div>

            <div class="lower">
                <h3>Donated</h3>
                <div class="grid-container">
                    <div class="row-radio">
                        <input type="radio" id="cash" name="donation-info" value="Cash">
                        <label class="no-click">Cash</label>

                        <input type="radio" id="goods" name="donation-info" value="Goods">
                        <label class="no-click">Goods</label>

                    </div>

                    <div class="row">
                        <input type="text" id="amount" name="amount" placeholder="Amount" disabled>
                        <input type="text" id="info-input" name="goods" placeholder="Goods" disabled>
                    </div>

                    <div class="row">
                        <select name="mop" id="mop" name="mot" class="small-input" disabled>
                            <option value="">Mode of Transaction</option>
                            <option value="cash">Cash</option>
                            <option value="gcash">Gcash</option>
                        </select>
                    </div>

                    <div class="row">
                        <input type="text" id="receiverName" name="receiver" placeholder="Name of Receiver" disabled>
                    </div>
                </div>
            </div>

            <div class="submit-btn">
                <button class="submit" type="submit" name="donation_form">SUBMIT</button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const inputInfoRadio = document.getElementById('input-info');
            const anonymousInfoRadio = document.getElementById('anonymous-info');
            const cashRadio = document.getElementById('cash');
            const goodsRadio = document.getElementById('goods');

            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('emailAddress');
            const phoneInput = document.getElementById('phoneNumber');
            const amountInput = document.getElementById('amount');
            const infoInput = document.getElementById('info-input');
            const mopSelect = document.getElementById('mop');
            const receiverNameInput = document.getElementById('receiverName');

            inputInfoRadio.addEventListener('change', toggleDonorInfo);
            anonymousInfoRadio.addEventListener('change', toggleDonorInfo);
            cashRadio.addEventListener('change', toggleDonationInfo);
            goodsRadio.addEventListener('change', toggleDonationInfo);

            function toggleDonorInfo() {
                if (inputInfoRadio.checked) {
                    nameInput.disabled = false;
                    emailInput.disabled = false;
                    phoneInput.disabled = false;

                    nameInput.hidden = false;
                    emailInput.hidden = false;
                    phoneInput.hidden = false;
                } else {
                    nameInput.disabled = true;
                    emailInput.disabled = true;
                    phoneInput.disabled = true;

                    nameInput.hidden = true;
                    emailInput.hidden = true;
                    phoneInput.hidden = true;

                    nameInput.value = '';
                    emailInput.value = '';
                    phoneInput.value = '';
                }
            }


            function toggleDonationInfo() {
                receiverNameInput.disabled = false;
                if (cashRadio.checked) {
                    amountInput.disabled = false;
                    amountInput.hidden = false;
                    mopSelect.disabled = false;
                    mopSelect.hidden = false;
                    infoInput.disabled = true;
                    infoInput.hidden = true;
                    infoInput.value = '';
                } else if (goodsRadio.checked) {
                    infoInput.disabled = false;
                    infoInput.hidden = false;
                    amountInput.disabled = true;
                    amountInput.hidden = true;
                    amountInput.value = '';
                    mopSelect.disabled = true;
                    mopSelect.hidden = true;
                    mopSelect.value = '';
                } else {
                    amountInput.disabled = true;
                    amountInput.hidden = true;
                    amountInput.value = '';
                    mopSelect.disabled = true;
                    mopSelect.hidden = true;
                    mopSelect.value = '';
                    infoInput.disabled = true;
                    infoInput.hidden = true;
                    infoInput.value = '';
                }
            }

            // Initial state
            toggleDonorInfo();
            toggleDonationInfo();
        });
    </script>
</body>

</html>