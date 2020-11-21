<?php
require_once "head_For_signIn_Login.php";
$info = "";
?>
<span id="info"><?php echo $_SESSION['status']; ?></span>
<div id="info-login"></div>
<div class="form-wrapper-for-LogIn">
    <form action="Home.php" method="post" enctype='multipart/form-data'>
        <div class="container login-left">
            <div class="login-box">
                <div class="loginStyle">
                <div class="row">
                    <div class="col-md-5 ">
                        <h1>Log In</h1>
                        <p>Fill up the form with correct values.</p>
                        <hr class="mb-3">

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control" id="emailForLogIn" type="email" name="email" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control" id="passwordForLogIn" type="password" name="password" required>

                        <label for="cpassword"><b>Confirm Password</b></label>
                        <input class="form-control" id="cpasswordForLogIn" type="password" name="cpassword" required>

                        <div class="form-group">
                            <label for="g-recaptcha"><b>Recaptcha</b></label>
                            <div class="g-recaptcha" id="html_element"
                                 data-sitekey="6LftdtYZAAAAABOGmhpnEEWZJ6yLn4yg4eNM9Yvx"></div>
                            <input class="form-control d-none" type="hidden" data-recaptcha="true" required
                                   data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

                        <hr class="mb-3">
                        <a href="Home.php">
                            <input class="btn btn-primary" type="submit" id="loginn" name="log_in"
                                    value="Log In">
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </form>
</div>
<?php
if (isset($_POST['log_in'])) {
    $useremail = $_POST['email'];
    $userpwd = $_POST['password'];
    $usercpwd = $_POST['cpassword'];
    if (empty($useremail || empty($userpwd) || empty($usercpwd))) {
        $info = "Invalid Input.Please,Try again";
    } else {
    }
}
?>
<?php
if(isset($_POST['']))
?>
