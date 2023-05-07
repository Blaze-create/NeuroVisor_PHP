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
    <script src="js/index.js" defer></script>
    <script src="js/common.js" defer></script>
    <script src="js/timeline.js" defer></script>
    <link rel="stylesheet" href="css/timeline.css">


    <!-- REMOTE LINK & SCRIPT -->
    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>Ours Teams</title>
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

    <!-- team header -->
    <div class="background team-header">
        <div class="header-center">
            <div class="title">
                Welcome, This is ours Teams
            </div>
            <a href="#focus">
                <div class="view-btn" id="view">
                    <i class="fa-solid fa-angles-down fa-2x"></i>
                </div>
            </a>
        </div>
    </div>



    <div class="background column">
        <div class="aim">
            <div class="section-categorie">
                <p>Our Aim</p>
            </div>
            <div class="content">
                Ours aim is to achieved a fully automated A.I system that learn and enhance itself to provide better and
                faster services.
            </div>
        </div>
    </div>



    <!-- out team  -->
    <div class="background">
        <div class="container-fluid">
            <div class="team" id="focus">
                <div class="section-categorie">
                    <p>these are our team leader</p>
                </div>
                <div class="title">

                    <p>We're only as strong and as knowledgeable as our team. So here are the men and women which help
                        customers meet goals and grow companies</p>
                </div>
                <div class="row team">

                    <div class="col">
                        <img src="img/team1.jpg" alt="">
                        <div class="name">
                            Dr. Orion Knight
                        </div>
                        <div class="position">
                            Project Leader
                        </div>
                        <div class="social">
                            <i class="fa-brands fa-reddit"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>
                    </div>

                    <div class="col">
                        <img src="img/team2.jpg" alt="">
                        <div class="name">
                            Dr. Rena Robinson
                        </div>
                        <div class="position">
                            neuroscientist
                        </div>
                        <div class="social">
                            <i class="fa-brands fa-reddit"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/team3.jpg" alt="">
                        <div class="name">
                            Phillip Myers
                        </div>
                        <div class="position">
                            Data Scientist
                        </div>
                        <div class="social">
                            <i class="fa-brands fa-reddit"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>
                    </div>
                    <div class="col">
                        <img src="img/team4.jpg" alt="">
                        <div class="name">
                            Gilbert Black
                        </div>
                        <div class="position">
                            Software Developer
                        </div>
                        <div class="social">
                            <i class="fa-brands fa-reddit"></i>
                            <i class="fa-brands fa-github"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="background dark">
        <div class="container-fluid">
            <div class="section-categorie">
                <p>Our Expertise at the institution of Dreams</p>
            </div>
            <div class="row modern-card">
                <div class="col reveal up">
                    <div class="image">
                        <img src="img/inn.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>Innovation </h2>
                        <p>ooking to advance your research on brain waves? Join our institution and gain access to cutting-edge technology, expert guidance, and a vibrant community of fellow scientists working together to unlock the secrets of the mind.</p>

                    </div>
                </div>
                <div class="col reveal up">
                    <div class="image">
                        <img src="img/colla.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>Collaboration </h2>
                        <p>Are you passionate about understanding the brain's inner workings? Our institution is at the forefront of brain wave research, investigating the mechanisms that underlie perception, attention, memory, and consciousness. </p>

                    </div>
                </div>
                <div class="col reveal up">
                    <div class="image">
                        <img src="img/Impact-Process.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>Impact </h2>
                        <p>At our institution, we're dedicated to pushing the boundaries of what we know about brain waves and their role in cognition, emotion, and behavior. </p>

                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- development timeline -->
    <div class="background timeline">
        <div class="tl-container">
            <div class="tl-top-section">
                <h1>Our journey to developing the world most advanced Technogies</h1>
            </div>
            <div class="tl-timeline">
                <div class="tl-line"></div>
                <div class="tl-section">
                    <div class="tl-bead"></div>
                    <div class="tl-content">
                        <h1>2015</h1>
                        <h2>This project started just as emotion reader</h2>
                    </div>
                </div>
                <div class="tl-section">
                    <div class="tl-bead"></div>
                    <div class="tl-content">
                        <h1>2017</h1>
                        <h2>We were to distinguish between different emotion</h2>
                    </div>
                </div>

                <div class="tl-section">
                    <div class="tl-bead"></div>
                    <div class="tl-content">
                        <h1>2018</h1>
                        <h2>We started to develop software to visualize throught</h2>
                    </div>
                </div>
                <div class="tl-section">
                    <div class="tl-bead"></div>
                    <div class="tl-content">
                        <h1>2020</h1>
                        <h2>We were able to record and save memories and dream on a medium</h2>
                    </div>
                </div>
                <div class="tl-section">
                    <div class="tl-bead"></div>
                    <div class="tl-content">
                        <h1>2021</h1>
                        <h2>We started developing machine learning and an A.I to predict future events</h2>
                    </div>
                </div>
                <div class="tl-section">
                    <div class="tl-bead"></div>
                    <div class="tl-content">
                        <h1>Present</h1>
                        <h2>We started selling this project as a consumer products</h2>
                    </div>
                </div>

            </div>
        </div>
    </div>


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