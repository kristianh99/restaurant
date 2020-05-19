<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration system PHP and MySQL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="login.css" >
    <script src="https://kit.fontawesome.com/2a6d12387e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid bg">
    <div class="row">
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
        <div class="col-md-4 col-sm-4 col-xs-12">
            <form class="input-conatiner" method="post" action="register.php" >
                <?php include('errors.php'); ?>
                <img src="../page1/star.png" width="250" height="80" style="margin-left: 30px; margin-bottom: 25px;" >

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user fa-2x "></i>
                        </span>

                    </div>

                    <input type="text" class="input-control" name="username"  placeholder="Username" value="<?php echo $username; ?>">

                </div>

                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-at fa-2x"></i>
                        </span>

                        <input type="email" class="input-control" name="email" placeholder="Email" value="<?php echo $email; ?>">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-lock fa-2x"></i>
                        </span>

                        </div>

                        <input type="password" class="input-control" name="password_1"  placeholder="Password" >
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-user-lock fa-2x"></i>
                        </span>

                        </div>

                        <input type="password" class="input-control" name="password_2"  placeholder="Password" >
                    </div>


                    <div class="input-group">
                        <button type="submit" name="register" class="btn btn-warning btn-block" ><span>Register</span></button>
                    </div>

                    <p>
                        <br>Already a member? <a class="link" href="login.php">Sign in</a>
                    </p>

            </form>

        </div>
        <div class="col-md-4 col-sm-4 col-xs-12"></div>
    </div>
</div>

</body>
</html>
