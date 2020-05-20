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
<?php
date_default_timezone_set('Europe/Belgrade');
include 'dba.php';
include 'messages.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="index.css">
    <link rel="stylesheet" type="text/css" href="lightbox.min.css"

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <link rel="stylesheet" href="swiper.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>
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

<nav class="container1">
    <div class="row">
        <button class="col reservation">
            <a href="../reservation/reservation.php">REZERVACIJA</a>
        </button>
        <button class="col order">
            <a href="#">PORUDŽBINA</a>
        </button>
    </div>
</nav>

<div class="container1">
    <div class="row">
        <div class="col aboutUs">
            <hr>
            <h2>O nama</h2>
            <p>
                Restoran Star se nalazi u centru Subotice. To je moderno opremljen i savremeno organizovan restoran, prijatnog ambijenta i enterijera vedrih boja. Kao takav predstavlja savršeno mesto gde ćete sa razlogom sa Vasim najbližima provesti najlepše trenutke.
                <br><br>
                Nudimo Vam i online rezervaciju stolova, kao i porudžbinu hrane preko našeg sajta. Po dolasku očekuje vas ljubazno osoblje i pre svega ukusna hrana, koju za vas, naš tim kuvara svakodnevno priprema od najsvežijih i najkvalitetnijih namirnica. Posetite nas i uzivajte u raznovrsnim kulinarskim specijalitetima, a petkom i subotom uveče u nasem restoranu možete uživati u zvucima žive muzike.
            </p>
            <br><hr>
        </div>
    </div>
</div>

<script src="path/to/swiper.min.js"></script>
<div class="container1">
    <div class="row titleLine"><h1 class="title">GALERIJA<hr></h1></div>
    <div class="row gallery">

        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><a href="img/2.jpg" data-lightbox="gallery"><img src="img/2_tumb.jpg" width="100%" height="auto"></a></div>
                <div class="swiper-slide"><a href="img/3.jpg" data-lightbox="gallery"><img src="img/3_tumb.jpg" width="100%" height="auto"></a></div>
                <div class="swiper-slide"><a href="img/4.jpg" data-lightbox="gallery"><img src="img/4_tumb.jpg" width="100%" height="auto"></a></div>
                <div class="swiper-slide"><a href="img/5.jpg" data-lightbox="gallery"><img src="img/5_tumb.jpg" width="100%" height="auto"></a></div>
                <div class="swiper-slide"><a href="img/6.jpg" data-lightbox="gallery"><img src="img/6_tumb.jpg" width="100%" height="auto"></a></div>

            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>

        <script>
            var swiper = new Swiper('.swiper-container', {
                slidesPerView: 3,
                spaceBetween: 30,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
            });
        </script>

    </div>
</div>

<div class="container1">
    <div class="row comment"><h1 class="title"><hr>STUPITE U KONTAKT</h1></div>
    <div class="row comment">
        <div class="col commentArea">
            <?php echo "
            <form method='post' action='".setMessage($conn)."'>
            <input type='hidden' name='ID_user' value='anonymous'>
            <input type='hidden' name='date' value='".date('d-m-Y H:i:s')."'>
            <textarea class='col-lg-8  col-sm-10 col-12' name='message' placeholder='Vaša poruka...'></textarea><br>
            <button class='button' name='submit' type='submit'>Pošalji</button>
            </form>";
            ?>
        </div>
    </div>

</div>

<div class="container1">
    <div class="row hr"><div class="col"><hr></div></div>
    <div class="row titleLine"><h2 class="title">Kontakt</h2></div>
    <div class="row contact">
        <div class="col-12"><p>

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="50px" height="auto"
                     viewBox="0 0 172 172"
                     style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g><path d="M108.66616,54.438c-0.10836,0.29928 -1.38976,3.9388 -2.68492,10.0018c-5.51948,-6.80088 -13.57596,-11.1198 -22.56124,-11.1198c-16.59628,0 -30.1,14.65956 -30.1,32.68c0,18.02044 13.50372,32.68 30.1,32.68c9.12976,0 17.30664,-4.45136 22.83128,-11.44316c1.17132,2.49228 2.66944,4.6354 4.50812,6.40184c5.074,4.8762 10.78268,5.07744 11.98668,5.04132c14.24848,-0.03096 23.45392,-12.85184 23.45392,-32.68c0,-33.19428 -27.00572,-60.2 -60.2,-60.2c-33.19428,0 -60.2,27.00572 -60.2,60.2c0,33.19428 27.00572,60.2 60.2,60.2c12.32036,0 28.25272,-1.43276 42.21052,-12.59728l-6.44656,-8.05992c-8.9354,7.14832 -19.96576,10.3372 -35.76396,10.3372c-27.50452,0 -49.88,-22.37548 -49.88,-49.88c0,-27.50452 22.37548,-49.88 49.88,-49.88c27.5028,0 49.88,22.37548 49.88,49.88c0,3.73412 -0.6364,22.36 -13.2784,22.36172c-0.93052,-0.0086 -9.0816,-0.559 -9.0816,-17.20172c0,-19.38612 4.80912,-33.09624 4.85384,-33.22524zM83.42,108.36c-10.90652,0 -19.78,-10.03104 -19.78,-22.36c0,-12.32896 8.87348,-22.36 19.78,-22.36c10.90652,0 19.78,10.03104 19.78,22.36c0,12.32896 -8.87348,22.36 -19.78,22.36z" fill="#e74c3c"></path><path d="M83.42,61.92c-11.85596,0 -21.5,10.8016 -21.5,24.08c0,13.2784 9.64404,24.08 21.5,24.08c11.85596,0 21.5,-10.8016 21.5,-24.08c0,-13.2784 -9.64404,-24.08 -21.5,-24.08zM83.42,106.64c-9.9588,0 -18.06,-9.25876 -18.06,-20.64c0,-11.38124 8.1012,-20.64 18.06,-20.64c9.9588,0 18.06,9.25876 18.06,20.64c0,11.38124 -8.1012,20.64 -18.06,20.64z" fill="#1f212b"></path><path d="M118.95692,56.31624l-9.7094,-3.49504c-0.89096,-0.31992 -1.87824,0.14104 -2.19988,1.03372c-0.04644,0.12728 -0.94256,2.62988 -2.00552,6.97288c-5.86864,-5.90132 -13.58456,-9.2278 -21.62212,-9.2278c-17.54572,0 -31.82,15.43184 -31.82,34.4c0,18.96816 14.27428,34.4 31.82,34.4c8.46756,0 16.5378,-3.66188 22.50104,-10.12736c1.04232,1.73548 2.26352,3.27832 3.6464,4.60788c5.68804,5.46616 12.02624,5.5556 13.18208,5.51948c15.28908,-0.0344 25.17048,-13.5364 25.17048,-34.4c0,-34.14372 -27.77628,-61.92 -61.92,-61.92c-34.14372,0 -61.92,27.77628 -61.92,61.92c0,34.14372 27.77628,61.92 61.92,61.92c12.60072,0 28.90976,-1.47404 43.28552,-12.97396c0.35604,-0.28552 0.5848,-0.70004 0.63468,-1.1524c0.04988,-0.45236 -0.08084,-0.90816 -0.36636,-1.2642l-6.44656,-8.05992c-0.5934,-0.74304 -1.677,-0.86172 -2.4166,-0.26832c-8.61204,6.88688 -19.31044,9.9588 -34.69068,9.9588c-26.55508,0 -48.16,-21.60492 -48.16,-48.16c0,-26.55508 21.60492,-48.16 48.16,-48.16c26.55508,0 48.16,21.60492 48.16,48.16c0,3.44688 -0.55728,20.64 -11.54292,20.64172c-2.73996,-0.02408 -7.37708,-3.31272 -7.37708,-15.48172c0,-18.87184 4.56316,-32.1038 4.75752,-32.65592c0.31304,-0.89096 -0.15136,-1.86792 -1.0406,-2.18784zM111.8,91.16c0,18.29564 9.68188,18.9114 10.8016,18.92172c11.05788,-0.00172 14.9984,-12.44076 14.9984,-24.08172c0,-28.45224 -23.14776,-51.6 -51.6,-51.6c-28.45224,0 -51.6,23.14776 -51.6,51.6c0,28.45224 23.14776,51.6 51.6,51.6c15.4284,0 26.4622,-2.99108 35.475,-9.66296l4.3,5.375c-13.21304,9.87108 -28.13576,11.16796 -39.775,11.16796c-32.24656,0 -58.48,-26.23344 -58.48,-58.48c0,-32.24656 26.23344,-58.48 58.48,-58.48c32.24656,0 58.48,26.23344 58.48,58.48c0,18.77896 -8.53292,30.93076 -21.78724,30.96c-0.59512,0.0086 -5.94776,0.043 -10.7414,-4.56144c-1.66324,-1.59616 -3.05644,-3.57932 -4.14176,-5.89272c-0.25284,-0.53836 -0.76712,-0.90816 -1.36052,-0.97696c-0.59856,-0.0688 -1.1782,0.17544 -1.54628,0.64328c-5.41972,6.85592 -13.24916,10.78784 -21.4828,10.78784c-15.64856,0 -28.38,-13.889 -28.38,-30.96c0,-17.071 12.73144,-30.96 28.38,-30.96c8.08056,0 15.81712,3.82184 21.22652,10.48512c0.41796,0.51256 1.09736,0.7482 1.7372,0.58824c0.645,-0.1548 1.14208,-0.66564 1.2814,-1.31236c0.7912,-3.71176 1.58412,-6.5102 2.08636,-8.14248l6.48096,2.33232c-1.27796,4.23636 -4.43244,16.31592 -4.43244,32.16916z" fill="#1f212b"></path><path d="M111.26336,68.78452c0.05504,0.01032 0.10836,0.01548 0.1634,0.01548c0.4042,0 0.7654,-0.28724 0.84452,-0.69832c0.23564,-1.22636 0.473,-2.36672 0.70864,-3.4142c0.10492,-0.4644 -0.18748,-0.92364 -0.65188,-1.02684c-0.45752,-0.09976 -0.92364,0.18748 -1.02684,0.65188c-0.23736,1.06296 -0.4816,2.22052 -0.71896,3.4658c-0.09116,0.46612 0.215,0.91676 0.68112,1.0062zM109.99056,77.39484c0.0344,0.00344 0.0688,0.00516 0.1032,0.00516c0.43,0 0.80152,-0.32164 0.85312,-0.75852c0.215,-1.80944 0.46096,-3.52084 0.71896,-5.12388c0.07568,-0.46956 -0.24252,-0.9116 -0.71208,-0.98728c-0.47988,-0.08084 -0.9116,0.24424 -0.98728,0.71208c-0.26316,1.6254 -0.51084,3.3626 -0.72928,5.19612c-0.05504,0.47128 0.28208,0.89956 0.75336,0.95632zM110.5874,80.0574c0.043,-0.473 -0.30616,-0.89096 -0.77916,-0.93396c-0.47988,-0.03784 -0.89096,0.30616 -0.93396,0.77916c-0.34056,3.7496 -0.51428,7.53704 -0.51428,11.2574c0,21.5688 12.77444,22.3428 14.23128,22.36c0.00344,0 0.00688,0 0.01032,0c0.46956,0 0.85484,-0.3784 0.86,-0.84968c0.00516,-0.47472 -0.37496,-0.86344 -0.84968,-0.87032c-1.2814,-0.01548 -12.53192,-0.72412 -12.53192,-20.64c0,-3.66704 0.17028,-7.40288 0.5074,-11.1026zM83.42,111.8c-7.81568,0 -15.06548,-4.343 -19.38956,-11.6186c-0.24252,-0.40936 -0.77228,-0.54352 -1.1782,-0.29928c-0.40764,0.24252 -0.5418,0.77056 -0.29928,1.1782c4.6354,7.80192 12.43732,12.45968 20.86704,12.45968c0.47472,0 0.86,-0.38528 0.86,-0.86c0,-0.47472 -0.38528,-0.86 -0.86,-0.86zM60.80028,91.84284c-0.09804,-0.4644 -0.5504,-0.7654 -1.01824,-0.66564c-0.4644,0.09632 -0.76196,0.55212 -0.66564,1.01824c0.38184,1.82492 0.93568,3.61372 1.64776,5.3148c0.14104,0.33196 0.45924,0.52976 0.79636,0.52976c0.11008,0 0.2236,-0.02064 0.33196,-0.06708c0.4386,-0.18404 0.645,-0.688 0.46268,-1.12488c-0.67252,-1.60304 -1.1954,-3.28692 -1.55488,-5.0052z" fill="#1f212b"></path></g></g></svg>

                email@gmail.com</p></div>
        <div class="col-12"><p>

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                     width="50px" height="auto"
                     viewBox="0 0 172 172"
                     style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,172v-172h172v172z" fill="none"></path><g fill="#e25634"><path d="M25.08333,32.25v12.9c0.35833,47.3 61.275,101.40833 101.76667,101.76667h13.25833c3.58333,0 6.80833,-2.86667 6.80833,-6.80833v-25.44167c0,-3.58333 -3.225,-6.80833 -6.80833,-6.80833l-29.025,-0.35833l-14.69167,15.40833c-9.31667,0 -46.94167,-37.625 -47.3,-47.3l15.40833,-14.69167v-29.025c0,-3.58333 -3.58333,-6.80833 -7.16667,-6.80833h-25.44167c-3.94167,0 -6.80833,3.58333 -6.80833,7.16667"></path></g></g></svg>

                +381 62 222222</p></div>
        <div class="col-12">
            <p><img src="https://img.icons8.com/color/96/000000/order-delivered.png"/>Marka Oraskovica 14<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subotica, 24000</p>
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
