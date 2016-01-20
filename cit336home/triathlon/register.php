<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Triathlon Registration</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/triathlon/modules/scripts.php'; ?>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/triathlon/modules/header.php'; ?>            
        </header>

        <main>
            <h1>Race Registration</h1>
            <?php
            if (!empty($reply)) {
                echo "<p class='notify'>$reply</p>";
            }
            unset($reply);
            ?>
            <p>Race fee is $100 US. All fields are required.</p>
            <p>Please note - this is NOT A REAL RACE! This is only a mock-up for a school project.<p>
            <form method="post" action="/triathlon/modules/registercheck.php" id="registerform">
                <fieldset>
                    <!--<label for="firstname">First Name:</label>-->
                    <input required type="text" name="firstname" id="firstname" size="10" placeholder="First Name" value="<?php echo $firstname; ?>"><br>
                    <!--<label for="lastname">Last Name:</label>-->
                    <input required type="text" name="lastname" id="lastname" size="15" placeholder="Last Name" value="<?php echo $lastname; ?>"><br>
                    <!--<label for="email">Email Address:</label>-->
                    <input required type="email" name="email" id="email" size="30" placeholder="Email Address" value="<?php echo $email; ?>"><br>
                    <p>Answer the following CAPTCHA question in the box below.</p>
                    <!--<label for="captcha">What color is a red apple?</label>-->
                    <input type="text" name="captcha" id="captcha" placeholder="What color is a red apple?" size="5"><br>
                    <!--<label for="action">&nbsp;</label>-->
                    <input type="submit" name="action" id="action" value="Send"><br>
                </fieldset>
            </form> 
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/triathlon/modules/footer.php'; ?>
        </footer>  
    </body>
</html>
