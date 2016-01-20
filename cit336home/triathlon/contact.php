<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Contact</title>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/triathlon/modules/scripts.php'; ?>
    </head>
    <body>
        <header>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/triathlon/modules/header.php'; ?>            
        </header>   

        <main>
            <h1>Demo Contact Page</h1>
            <?php
            if (!empty($reply)) {
                echo "<p class='notify'>$reply</p>";
            }
            unset($reply);
            ?>
            <p>All fields are required.</p>
            <form method="post" action="/triathlon/modules/contactcheck.php" id="contactform">
                <fieldset>
                    <!--<label for="name">Name:</label>-->
                    <input required type="text" name="name" id="name" size="10" placeholder="Name" value="<?php echo $name; ?>"><br>
<!--                    <label for="lastname">Last Name:</label>
                    <input required type="text" name="lastname" id="lastname" size="15" value="<?php echo $lastname; ?>"><br>-->
                    <!--<label for="email">Email Address:</label>-->
                    <input required type="email" name="email" id="email" size="30" placeholder="Email Address" value="<?php echo $email; ?>"><br>
<!--                    <label for="subject">Subject:</label>
                    <input required type="text" name="subject" id="subject" size="60" value="<?php echo $subject; ?>"><br>-->
                    <label for="message">Message:</label>
                    <textarea required name="message" id="message" rows="10" cols="60"><?php echo $message; ?></textarea><br>
<!--                    <p>Answer the following CAPTCHA question in the box below.</p>
                    <label for="captcha">What color is a red apple?</label>
                    <input type="text" name="captcha" id="captcha" size="5"><br>
                    <label for="action">&nbsp;</label>-->
                    <input type="submit" name="action" id="action" value="Send"><br>
                </fieldset>
            </form> 
        </main>

        <footer>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/triathlon/modules/footer.php'; ?>
        </footer>  
    </body>
</html>
