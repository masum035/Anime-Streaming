<?php
require_once "head_For_signIn_Login.php";
?>
<body>
<div style="text-align: right"><span><h5>Already Have an Account?... <a href="">Click Here</a></h5></span></div>
<!--<div id="errorShow" style="color: red">--><?php //echo $_SESSION['msg']; ?><!--<br>--><?php //echo $_SESSION['status'];?><!--</div>-->
<div class="alert alert-success success-message" style="display: none">
    Form submitted successfully.
</div>
<div class="form-wrapper-of-Registration">
    <form id="Create" enctype="multipart/form-data" method="post" action="registrationProcess.php">
        <div class="container login-left">
            <div class = "login-box">
                <div class="row">
                    <div class="col-md-5">
                        <h1>Registration</h1>
                        <p>Fill up the form with correct values.</p>
                        <hr class="mb-3">
                        <label for="username"><b>User Name</b></label>
                        <input class="form-control username" id="usernameForRegistration" type="text" name="username" required>

                        <label for="email"><b>Email Address</b></label>
                        <input class="form-control email" id="emailForRegistration"  type="email" name="email" required>

                        <label for="phonenumber"><b>Phone Number</b></label>
                        <input class="form-control phone" id="phonenumberForRegistration"  type="text" name="phonenumber" required>

                        <label for="password"><b>Password</b></label>
                        <input class="form-control password" id="passwordForRegistration"  type="password" name="password" required>

                        <label for="cpassword"><b>Confirm Password</b></label>
                        <input class="form-control cpassword" id="cpasswordForRegistration"  type="password" name="cpassword" required>

                        <label for="image"><b>Upload Your Profile Pic</b></label>
                        <input id="imageForRegistration"  type="file" class="form-control" name="image" data-height="500">

                        <div class="form-group">
                            <label for="g-recaptcha"><b>Recaptcha</b></label>
                            <div class="g-recaptcha" id="html_element"
                                 data-sitekey="6LftdtYZAAAAABOGmhpnEEWZJ6yLn4yg4eNM9Yvx"></div>
                            <input class="form-control d-none" type="hidden" data-recaptcha="true" required
                                   data-error="Please complete the Captcha">
                            <div class="help-block with-errors"></div>
                        </div>

                        <hr class="mb-3">
                        <input class="btn btn-primary" id="register" name="create" value="Sign Up"  type="submit">
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<hr class="bg-light">
<!--The core Firebase JS SDK is always required and must be listed first -->
<!--<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>-->
<!--     https://firebase.google.com/docs/web/setup#available-libraries -->
<!--<script>-->
<!--    // Your web app's Firebase configuration-->
<!--    var firebaseConfig = {-->
<!--        apiKey: "AIzaSyCE43O2LXFiLxExtY09fKRTQQX62xh2pqM",-->
<!--        authDomain: "webdevprojectpart2.firebaseapp.com",-->
<!--        databaseURL: "https://webdevprojectpart2.firebaseio.com",-->
<!--        projectId: "webdevprojectpart2",-->
<!--        storageBucket: "webdevprojectpart2.appspot.com",-->
<!--        messagingSenderId: "682784538019",-->
<!--        appId: "1:682784538019:web:eb2516eba4d7f928ee2e16"-->
<!--    };-->
<!--    // Initialize Firebase-->
<!--    firebase.initializeApp(firebaseConfig);-->
<!--    //---------------registraion process ready-----------------//-->
<!--    var nameR,emailR,phoneR,passwordR,profilePic;-->
<!--    function tryRegisterReady(){-->
<!--        nameR = document.getElementById("usernameForRegistration").value;-->
<!--        emailR = document.getElementById("emailForRegistration").value;-->
<!--        phoneR = document.getElementById("phonenumberForRegistration").value;-->
<!--        passwordR = document.getElementById("passwordForRegistration").value;-->
<!--    }-->
<!--    //----------------Registration insert-----------------------//-->
<!--    // document.getElementById("register").onclick=function() {-->
<!--    //     nameR = document.getElementById("usernameForRegistration").value;-->
<!--    //     emailR = document.getElementById("emailForRegistration").value;-->
<!--    //     phoneR = document.getElementById("phonenumberForRegistration").value;-->
<!--    //     passwordR = document.getElementById("passwordForRegistration").value;-->
<!--    //     firebase.database().ref('student/'+nameR).set({-->
<!--    //         userName: nameR,-->
<!--    //         email: emailR,-->
<!--    //         password: passwordR,-->
<!--    //         phoneNumber: phoneR-->
<!--    //     });-->
<!--    // }-->
<!--    var messagesRef = firebase.database().ref("contactformmessages");-->
<!--    $("#Create").submit(function (e) {-->
<!--        e.preventDefault();-->
<!---->
<!--        var newMessageRef = messagesRef.push();-->
<!--        newMessageRef.set({-->
<!--            name: $("#usernameForRegistration").val(),-->
<!--            email: $("#emailForRegistration\"").val(),-->
<!--            phone: $("#phonenumberForRegistration").val(),-->
<!--            password: $("#passwordForRegistration").val(),-->
<!--        });-->
<!---->
<!--        $(".success-message").show();-->
<!---->
<!--        $("#Create")[0].reset();-->
<!--    });-->
<!--</script>-->
</body>
</html>