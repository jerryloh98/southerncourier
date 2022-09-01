<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Sign Up</title>
</head>

<body>
    <?php
    include "header.php";
    ?>

    <!-- Page Content -->
    <section class="py-5">
        <!-- Sign up form-->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>Sign Up</h1>
                    <form action="regProcess.php" method="POST" id="signup" role="form" enctype="multipart/form-data">

                        <fieldset>
                            <legend class="text">
                                <span class="req" style="color:red; font-size:small">*Required</span>
                            </legend>

                            <div class="form-group">
                                <label for="firstname"><span class="req" style="color:red">* </span> First name:
                                </label>
                                <input class="form-control" type="text" name="fname" id="txt" required />
                            </div>

                            <div class="form-group">
                                <label for="lastname"><span class="req" style="color:red">* </span> Last name (Surname):
                                </label>
                                <input class="form-control" type="text" name="lname" id="txt" required />
                                <div id="errLast"></div>
                            </div>

                            <div class="form-group">
                                <label for="address"><span class="req" style="color:red">* </span> Address: </label>
                                <input class="form-control" required type="text" name="address" id="address" onchange="" />
                            </div>

                            <div class="form-group">
                                <label for="email"><span class="req" style="color:red">* </span> Email Address: </label>
                                <input class="form-control" required type="text" name="email" id="email" onchange="email_validate(this.value);" />
                                <div class="status" id="status"></div>
                            </div>

                            <div class="form-group">
                                <label for="phonenumber"><span class="req" style="color:red">* </span> Phone Number:
                                </label>
                                <input required type="text" name="phone" id="phone" class="form-control phone" minlength="8" maxlength="11" placeholder="eg: 01XXXXXXXX" />
                            </div>

                            <div class="form-group">
                                <label for="username"><span class="req" style="color:red">* </span> Username:
                                    <small>(This will be your login username)</small> </label>
                                <input class="form-control" type="text" name="username" id="txt" required />
                                <div id="errUsername"></div>
                            </div>

                            <div class="form-group">
                                <label for="password"><span class="req" style="color:red">* </span> Password: </label>
                                <input required name="password" type="password" class="form-control inputpass" minlength="4" maxlength="16" /> </p>
                            </div>

                            <p>By creating an account, you agree to our <a href="#TnC" style="text-decoration: underline;">Terms & Conditions</a>.</p>

                            <div class="form-group">
                                <input class="btn btn-success" type="submit" name="sign_up" value="Sign Up">
                            </div>
                </div>

                <div class="container">
                    <p>Already have an account? <a href="sign_in.php">Sign in</a> here.</p>
                </div>

                </fieldset>
                </form><!-- ends register form -->
            </div><!-- ends col-6 -->
        </div>
    </section>
    <br>

</body>

</html>

<!-- assets -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/source.bootstrap.min.js"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/sign_up.js"></script>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
<link href="assets/css/half-slider.css" rel="stylesheet">
<link href="assets/css/index.css" rel="stylesheet">
<link href="assets/css/sign_up.css" rel="stylesheet">