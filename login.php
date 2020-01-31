<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="298423687784-nmcktobq5mmhd4474s1qt17rmgs9ah6e.apps.googleusercontent.com">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/login.css">
    <link href="css/login.scss">
</head>
<body>
<?php include "navbar.php"; ?>
<span class="topnav-space"></span>
<div class="login-background">
    <form action="" method="post">
        <div class="form-group">
            <label class="label-settings">
                <span class="label-text">
                    <span>Email</span>
                    <span class="err-msg"></span>
                </span>
                <input autofocus type="email" class="form-input input-type login-email" placeholder="Email" required>
            </label>
        </div>

        <div class="form-group">
            <label class="label-settings">
                <span class="label-text">
                    <span>Password</span>
                    <span class="err-msg"></span>
                </span>
                <input class="form-input input-type login-password" type="password" placeholder="Password" required>
            </label>

        </div>

        <div class="form-group">
            <button type="submit" class="btn login-submit">log In</button>
        </div>

    </form>
    <br>
    <span class="forgot-psw"><a class="forgot-psw-text" href="forgotpassword.php">Forgot your password</a></span>
    <br>
    <span class="forgot-psw">Don't have an account? <a class="forgot-psw-singup" href="register.php">Sign up</a></span>
    <br>
    <br>
    <div class="hr-line"></div>
    <span class="or-line">Or</span>
    <div class="google-btn" onclick="googleLogin()">
        <div class="google-icon-wrapper">
            <img class="google-icon" src="https://upload.wikimedia.org/wikipedia/commons/5/53/Google_%22G%22_Logo.svg"/>
        </div>
        <p class="btn-text"><b>Sign in with google</b></p>
    </div>
    <div style="display: none" class="g-signin2" data-onsuccess="onSignIn"></div>
</div>
</body>
</html>