<?php
include('express-stk.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action='<?php echo $_SERVER['PHP_SELF'] ?>' method='POST'>
            <div class="price">
                <h1>PaymentTest, that's KES 100</h1> <!-- For testing purposes, we have added the amount manually. This should proceed from your website -->
            </div>
            <div class="card__container">
                <div class="card">
                    <div class="row">
                        <img src="mpesa.png" style="width:30%;margin: 0 35%;">
                        <p style="color:#8F92C3;line-height:1.7;">1. Enter the <b>phone number</b> and press "<b>Confirm and Pay</b>"</br>2. You will receive a popup on your phone. Enter your <b>MPESA PIN</b></p>
                        <?php if ($errmsg != ''): ?>
                            <p style="    background: #cc2a24;padding: .8rem;color: #ffffff;"><?php echo $errmsg; ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="row number">
                        <div class="info">
                            <input type="hidden" name="orderNo" value="#O2JDI2I3R" /> <!-- For testing purposes, we have added the value. This should proceed from your website -->
                            <label for="cardnumber">Phone number</label>
                            <input id="cardnumber" type="text" name="phone_number" maxlength="10" placeholder="0700000000" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="button">
                <button type="submit"><i class="ion-locked"></i> Confirm and Pay</button>
            </div>
        </form>
        <p style="color:#8F92C3;line-height:1.7;margin-top:5rem;">Copyright 2024 | All Rights Reserved | Made by StanleyMochoge</p>
    </div>
</body>
</html>