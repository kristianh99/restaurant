<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="order.css">
    <title>Porudžbina</title>
</head>
<body>
<header class="container1">
    <div class="row">
        <div class="col-sm-4 col-12 logo">
            <img src="star.png">
        </div>

        <div class="col-sm-8 col-12 logOut">
            <?php  if (isset($_SESSION['username'])) : ?>
                <p>Zdravo <strong><?php echo $_SESSION['username']; ?></strong></p>
                <p> <a href="../login/login.php" >ODJAVI SE</a> </p>
            <?php endif ?>
        </div>
    </div>

</header>

<div class="menu container1">
    <div class="row">
        <div class="col-sm-2 col-12"></div>
        <div class="col-sm-8 col-8"><h1>Jelovnik</h1></div>
        <div class="col-sm-2 col-4 cart">

            <svg width="40px" height="auto" viewBox="0 0 16 16" class="bi bi-cart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
            </svg>

        </div>
    </div>
</div>

<div class="container1 cart1">
    <div class="container content-section">
        <h2 class="section-header">CART</h2>
        <div class="cart-row">
            <span class="cart-item cart-header cart-column">ITEM</span>
            <span class="cart-price cart-header cart-column">PRICE</span>
            <span class="cart-quantity cart-header cart-column">QUANTITY</span>
        </div>
        <div class="cart-items">
        </div>
        <div class="cart-total">
            <strong class="cart-total-title">Total</strong>
            <span class="cart-total-price">$0</span>
        </div>
        <button class="btn btn-primary btn-purchase" type="button">PURCHASE</button>
    </div>
</div>

<div class="container1 content">

    <div class="row">
        <div class="col-12 col-md-6 food">
            <h1 class="col-12">Pileći file natur</h1>
            <div class="col-12 image"><img src="product-images/piletina.jpg" width="100%" height="auto"></div>
            <p><br>marinirani grilovani pileći file, pomfrit, kombinacija zelenih salata sa žilijen povrćem i lepinja</p>
            <p>Cena: 650 din</p>
            <button>Dodaj u korpu</button>
        </div>

        <div class="col-12 col-md-6 food">
            <h1 class="col-12">Mexican taco rolls</h1>
            <div class="col-12 image"><img src="product-images/meksikan.jpg" width="100%" height="auto"></div>
            <p><br>tortilje punjene autentičnim meksičkim nadevom od goveđeg mesa, servirane uz salatu, krompir spicy wedges, kiseli sos i guacamole dip</p>
            <p>Cena: 650 din</p>
            <button>Dodaj u korpu</button>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-6 food">
            <h1 class="col-12">Pizza sa sirom</h1>
            <div class="col-12 image"><img src="product-images/pizza.jpg" width="100%" height="auto"></div>
            <p><br>kečap, sir</p>
            <p>Cena: 400 din</p>
            <button>Dodaj u korpu</button>
        </div>

        <div class="col-12 col-md-6 food">
            <h1 class="col-12">Palačinka sa džemom</h1>
            <div class="col-12 image"><img src="product-images/palacinka.jpg" width="100%" height="auto"></div>
            <p><br></p>
            <p>Cena: 100 din</p>
            <button>Dodaj u korpu</button>
        </div>
    </div>
</div>

<footer class="container1">
    <div class="row">
        <div class="col-sm-2 col-12"><img src="star.png"></div>
        <div class="col-sm-8 col-12 footerText"><p>Copyright @ Application Arts 2020</p></div>
        <div class="col-sm-2 col-12"></div>
    </div>
</footer>

</body>
</html>
