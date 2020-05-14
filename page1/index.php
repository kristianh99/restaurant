<?php
date_default_timezone_set('Europe/Belgrade');
include  'dba.php';
include 'messages.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">

    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">
    <script src="https://unpkg.com/swiper/js/swiper.js"></script>
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <link rel="stylesheet" href="swiper.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
</head>
<body>

<header class="container1">
    <div class="row">
        <h1 class="col logo">LOGO</h1>
        <div class="col logOut">
            <a href="#">ODJAVI SE</a>
        </div>
    </div>

</header>

<nav class="container1">
    <div class="row">
        <button class="col reservation">
            <h1>REZERVACIJA</a>
        </button>
        <button class="col order">
            <h1>PORUDŽBINA</h1>
        </button>
    </div>
</nav>

<div class="container1">
    <div class="row">
        <div class="col aboutUs">
            <hr>
            <h2>O nama</h2>
            <p>Sada već davne 1986. u Subotici je otvorena - tada moderna i daleko ispred svog vremena - Boss picerija.
                Upečatljivo ime, i potpuno novi, moderni koncept, brzo su postali prepoznatljivi, a stalna težnja ka kvalitetu rezultirala je uspehom i širenjem ponude i kapaciteta.
                <br><br>
                Deset godina kasnije, bio je pravi trenutak za zaokret od koncepta picerije ka modernom i prepoznatljivom restoranu.
                1996. uvodi se pohovana hrana, biftek i čuveni pileći file sa gorgonzola sosom koji je i danas prvi izbor brojnih gostiju.
                1999. godine napravljena je unutrašnja terasa koja je vrlo brzo postala omiljeno mesto subotičana za kafu sa prijateljima ili uživanje u ukusnom obroku.
                Interesovanje subotičana, a sve više turista, ubrzo je premašilo kapacitete restorana i terase te se Boss 2000. godine nastanio u prostor i danas poznat kao Atrium, a 2001. Boss se proširuje i na suprotnu stranu ulice u prostor gostima poznat kao Fashion.
                <br><br>
                Dolaskom Miroslava Poljaković Mikija, koji je nekoliko godina radio pod jurisdikcijom Iasonas Giasoumi-a, jednog od najpoznatijih kiparskih kuvara, unapređen je postojeći koncept caffe restorana mnogim, sad već našim, prepoznatljivim jelima, te brzim i standardnim servisom.
                Jedan od velikih izazova za našeg glavnog kuvara Mikija, predstavlja uvođenje nama nesvakidašnjih jela i namirnica kako bi kuhinja restorana Boss dobila značajnije mesto u postavljanju nove kulture i standarda ishrane.
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
                <div class="swiper-slide"><img src="img/2_tumb.jpg" width="100%" height="auto"></div>
                <div class="swiper-slide"><img src="img/3_tumb.jpg" width="100%" height="auto"></div>
                <div class="swiper-slide"><img src="img/4_tumb.jpg" width="100%" height="auto"></div>
                <div class="swiper-slide"><img src="img/5_tumb.jpg" width="100%" height="auto"></div>
                <div class="swiper-slide"><img src="img/6_tumb.jpg" width="100%" height="auto"></div>

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
        <div class="col-sm-4 col-12"><p>email@gmail.com</p></div>
        <div class="col-sm-4 col-12"><p>+381 62 222222</p></div>
        <div class="col-sm-4 col-12"><p>Marka Oraskovica 14<br>Subotica, 24000</p></div>
    </div>
</div>

<footer class="container1">
    <div class="row">
        <div class="col-sm-3 col-12">LOGO</div>
        <div class="col-sm-6 col-12 footerText"><p>Copyright @ Application Arts 2020</p></div>
        <div class="col-sm-3 col-12"></div>
    </div>
</footer>

</body>
</html>
