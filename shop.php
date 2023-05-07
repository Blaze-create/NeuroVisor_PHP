<?php
session_start();
include_once "php/database.php";
$current_url = $_SERVER['REQUEST_URI'];
$path = parse_url($current_url, PHP_URL_PATH);
$page_name = basename($path);
$_SESSION['previous_page'] = $page_name;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- INTERNAL LINK & SCRIPT -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
    <script src="js/common.js" defer></script>


    <!-- REMOTE LINK & SCRIPT -->
    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Shop</title>
</head>

<body>
    <!-- PRELOADER -->
    <div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <!-- NavBAR -->
    <!-- <nav class="mynav" id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="label">
            <h3><span>Neuro</span>Visor_</h3>
        </div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Our Teams</a></li>
            <li><button>Sign up</button></li>
        </ul>
    </nav> -->
    <?php
    include "navbar.php";
    ?>


    <!-- shop header -->
    <div class="background shop-header">
        <div class="header-center">
            <div class="title">
                Welcome to our shop
            </div>
            <a href="#focus">
                <div class="view-btn" id="view">
                    <i class="fa-solid fa-angles-down fa-2x"></i>
                </div>
            </a>
        </div>
    </div>



    <!-- plan -->
    <div class="background column">
        <div class="container-fluid">
            <div class="section-categorie">
                <p>Get Started</p>
            </div>
            <div class="section-title">
                <h2>We offer a range of pricing options to suit your budget</h2>
            </div>
            <div class="row modern-price" id="focus">
                <div class="col reveal up" style="--clr:#6a5acd;">
                    <div class="type basic">
                        basic
                    </div>
                    <div class="price">
                        999.99 <span>/year</span>
                    </div>
                    <div class="feature basic">
                        <ul>
                            <li>text-to-speech functionality</li>
                            <li>basic material</li>
                            <li>Custom fitted</li>
                        </ul>
                    </div>
                    <div class="button basic">
                        <a href="checkout.php?tier=basic">Get Started</a>
                    </div>
                </div>

                <div class="col reveal up" style="--clr:#c78100;">
                    <div class="type pro">
                        pro
                    </div>
                    <div class="price">
                        1299.99 <span>/year</span>
                    </div>
                    <div class="feature pro">
                        <ul>
                            <li>text-to-speech functionality</li>
                            <li>basic material</li>
                            <li>Custom fitted</li>
                            <li>longer battery life</li>
                        </ul>
                    </div>
                    <div class="button pro">
                        <a href="checkout.php?tier=pro">Get Started</a>
                    </div>
                </div>

                <div class="col reveal up" style="--clr:#00a16c;">
                    <div class="type deluxe">
                        deluxe
                    </div>
                    <div class="price">
                        1999.99 <span>/year</span>
                    </div>
                    <div class="feature">
                        <ul>
                            <li>text-to-speech functionality</li>
                            <li>premium materials</li>
                            <li>Custom fitted</li>
                            <li>longer battery life</li>
                            <li>Fluctlight Acceleration</li>
                        </ul>
                    </div>
                    <div class="button deluxe">
                        <a href="checkout.php?tier=deluxe">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- additional item -->

    <!-- footer -->
    <div class="background footer">
        <div class="container-fluid">
            <div class="footer">
                <div class="website-logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="website-title">
                    <span>Neuro</span>Visor
                </div>
                <div class="designer-link">
                    <i class="fa-brands fa-github"></i>
                    <i class="fa-brands fa-discord"></i>
                    <i class="fa-brands fa-linkedin"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="footer-links">
                    <div class="row">
                        <div class="col">
                            Privacy Policy
                        </div>
                        <div class="col">
                            Terms of service
                        </div>
                        <div class="col">
                            Contact us
                        </div>
                        <div class="col">
                            News
                        </div>
                        <div class="col">
                            Search
                        </div>
                    </div>
                </div>
                <div class="website-detail">
                    © 2023 NeuroVisor All Right Reserved.
                </div>
            </div>
        </div>
    </div>




</body>

</html>