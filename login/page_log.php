<?php
include('header.php');
include_once("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="script/validation.min.js"></script>
    <script type="text/javascript" src="script/login.js"></script>
    <link href="css/login.css" rel="stylesheet" type="text/css" media="screen">

</head>
<body>

<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">

            <form class="input-conatiner" method="post" id="login-form">
                <div id="error">
                </div>

                <img src="../page1/star.png" width="250" height="80" style="margin-left: 30px; margin-bottom: 50px" >


                <div class="input-group mb-3" >
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-at fa-2x"></i>
                        </span>

                        <input type="email" class="form-control" placeholder="Email" name="user_email" id="user_email" />
                        <span id="check-e"></span>

                    </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock fa-2x"></i>
                        </span>

                    </div>

                    <input type="password" class="input-control" name="password" id="password" placeholder="Lozinka" >


                </div>


                <div class="input-group">
                    <button type="submit"  class="btn btn-warning btn-block" name="login_button" id="login_button" ><span>Uloguj se</span></button>
                </div>
                <br>
                <p>
                    Nemaš nalog? <a class="link" href="page_reg.php">Registruj se</a>
                </p>


            </form>


        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>
</body>
</html>

