<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Registration Page</title>
    <link rel="stylesheet" href="assets/css/usersignup.css">
</head>

<body>

    <div class="USignuppage-wrapper">
        <div class="USignupoverlay-box">
            <h2 class="USignupform-title">Registration</h2>

            <form method="post" id="signupForm" action="">
                <div class="USignupform-group">
                    <label for="USignupEmail">E-mail</label>
                    <input type="email" id="USignupEmail" name="USignupemail" class="inputs">
                    <span class="USignuperror"></span>
                </div>

                <div class="USignupform-group">
                    <label for="USignupFullname">Enter Full Name</label>
                    <input type="text" id="USignupFullname" name="USignupfullname" class="inputs">
                    <span class="USignuperror"></span>
                </div>

                <div class="USignupform-group">
                    <label for="USignupUsername">Username</label>
                    <input type="text" id="USignupUsername" name="USignupusername" class="inputs">
                    <span class="USignuperror"></span>
                </div>

                <div class="USignupform-group">
                    <label for="USignupPassword">Enter Password</label>
                    <input type="password" id="USignupPassword" name="USignuppassword" class="inputs">
                    <span class="USignuperror"></span>
                </div>

                <div class="USignupbutton-group">
                    <button type="submit" class="USignupRegister-btn">Register</button>
                    <button type="reset" class="USignupClear-btn">Clear</button>
                </div>

                <div class="USignupback-btn">
                    <button type="button">Back</button>
                </div>
            </form>
        </div>
    </div>
    <script src="assets/js/usersignup.js"></script>

</body>

</html>