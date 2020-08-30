<?php
session_start();


if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!Doctype html>

<html lang="en">

<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<meta name="description" content="" />

<meta name="keywords" content="" />

<head>

    <title>MFORS</title>
<?php include '../login/header.php'?>

    <link rel="stylesheet" href="css/reservation.css" />
    <link rel="stylesheet" href="../order/order.css" />


    <script type="text/javascript" src="../login/script/validation.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>


</head>

<body>

<header class="container1" id="header">
    <div class="row">
        <div class="col-sm-4 col-12 logo">
            <img src="../page1/star.png">
        </div>

        <div class="col-sm-8 col-12 logOut">
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Zdravo <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="../login/login.php" >ODJAVI SE</a> </p>
            <?php endif ?>
        </div>
    </div>

</header>

<div class="container1">
<div class="content" >

    <div class="inner_content">

        <form method="post"  class="hr_book_form" id="reservation-form">

            <h2 class="form_head"><span class="book_icon">REZERVIŠI STO</span></h2>
            <p class="form_slg">Rezerviši svoje mesto na vreme</p>




            <div class="left">

                <div class="form_group">


                    <input type="number" placeholder="How many guests" min="1" name="guest" id="guest" required>

                </div>

                <div class="form_group" >

                    <div class="input-group-prepend" >
                        <span class="input-group-text" style="  height: 40px;background-color:#fff; border: 1px solid orangered;color:  orangered">
                            <i class="fas fa-at fa-2x"></i>
                        </span>
                        <input type="email" name="email" placeholder="Unesite Email" required>
                    </div>

                </div>

                <div class="form_group">
                    <div class="input-group-prepend" >
                        <span class="input-group-text" style="  height: 40px;background-color:#fff; border: 1px solid orangered;color:  orangered">
                            <i class="fas fa-at fa-2x"></i>
                        </span>
                        <input type="text" name="phone" placeholder="Unesite broj telefona" required>
                    </div>
                </div>

                <div class="form_group">

                   <br>
                    <input type="date" name="date_res" placeholder="Datum rezervacije" required>

                </div>

                <div class="form_group">

                   <br>
                    <input type="time" name="time" placeholder="Vreme rezervacije" required>

                </div>


            </div>

            <div class="left">
                <div class="form_group">

                    <textarea name="suggestions" placeholder="Vaše sugestije" required></textarea>
                </div>

                <div class="form_group">

                    <input type="submit" class="submit" name="submit" value="Rezerviši" />

                </div>

            </div>

            <p class="clear"></p>

        </form>

    </div>

</div>

<div class="content" >

    <div class="inner_content">

        <div class="contact">

            <div class="left">

                <h3 style="color: orangered">LOCATION</h3><br>
                <p>Marka Oraskovica 14</p>
                <p>24000 Subotica</p>

            </div>

            <div class="left">

                <h3 style="color: orangered">CONTACT</h3><br>
                <p>062 22222</p>
                <p>star@gmail.com</p>

            </div>

            <p class="left"></p>

            <div class="icon_holder">

                <a href="#"><img src="facebook-logo.png" alt="image/icons/Facebook.png" style="width: 63px;height: 63px;"/></a>
                <a href="#"><img src="logo-instagram.png" alt="image/icons/Google+.png" style="width: 50px;height: 50px;" /></a>

            </div>

        </div>

    </div>

</div>
</div>
<footer class="container1">
    <div class="row">
        <div class="col-sm-2 col-12"><img src="../page1/star.png"></div>
        <div class="col-sm-8 col-12 footerText"> <p>&copy; <?php echo strftime("%Y", time()); ?> <span>RestaurantStar</span>. All Rights Reserved</p>
        </div>
        <div class="col-sm-2 col-12"></div>
    </div>
</footer>

</body>

</html>