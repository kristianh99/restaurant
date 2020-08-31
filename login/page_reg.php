<?php 
include('header.php');
include_once("db_connect.php");
?>
<title>Register</title>
<script type="text/javascript" src="script/validation.min.js"></script>
<script type="text/javascript" src="script/register.js"></script>
<link href="css/login.css" rel="stylesheet" type="text/css" media="screen">

<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form class="input-conatiner" method="post" id="register-form">
                <div id="error">
                </div>

                <img src="../page1/star.png" alt="image" width="250" height="80" style="margin-left: 30px; margin-bottom: 25px;" >

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user fa-2x "></i>
                        </span>

                    </div>

                    <input type="text" class="form-control" placeholder="Korisničko ime" name="user_name" id="user_name" />

                </div>

                <div class="input-group mb-3" >
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-at fa-2x"></i>
                        </span>

                        <input type="email" class="form-control" placeholder="Email" name="user_email" id="user_email" />

                    </div>



                    <br><div class="input-group mb-3" >
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock fa-2x"></i>
                        </span>

                        </div>

                        <input type="password" class="form-control" placeholder="Lozinka" name="password" id="password" />
                    </div>

                    <div class="input-group mb-3" >
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user-lock fa-2x"></i>
                        </span>

                        </div>

                        <input type="password" class="form-control" placeholder="Ponovi lozinku" name="cpassword" id="cpassword" />
                    </div>




                    <div class="input-group">
                        <button type="submit" class="btn btn-warning btn-block" name="btn-save" id="btn-submit"><span>Registruj se</span></button>
                    </div>

                    <p>
                        <br>Već imaš nalog? <a class="link" href="page_log.php">Uloguj se</a>
                    </p>

            </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>

