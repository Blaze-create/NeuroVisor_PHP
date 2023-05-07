<?php
session_start();
include_once "php/database.php";
$current_url = $_SERVER['REQUEST_URI'];
$path = parse_url($current_url, PHP_URL_PATH);
$page_name = basename($path);
$_SESSION['previous_page'] = 'https://alderlake.rodrigues.webcup.hodi.host/' . $page_name;
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
    <script src="js/index.js" defer></script>

    <!-- REMOTE LINK & SCRIPT -->
    <script src="https://kit.fontawesome.com/e785ddfc20.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>NeuroVisor: Our most advanced headgear yet</title>
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
    <!-- <nav class="mynav mycollapse" id="navbar">
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <div class="label">
            <h3><span>Neuro</span>Visor_</h3>
        </div>

        <ul>
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Our Teams</a></li>
            <li><button>Sign up</button></li>
        </ul>
    </nav> -->
    <?php
    include "navbar.php";
    ?>

    <!-- HEADER -->

    <div class="background header">
        <div class="container-fluid">
            <div class="row myheader">
                <div class="col text">
                    <div class="content">
                        <h3>Hey_</h3>
                        <h2>This is <span id="text">NeuroVisor</span></h2>
                        <p>Our most advanced headgear yet. </p>
                        <p> Discover your inner world with our headgear
                            Unleash your dreams with our headgear.</p>

                        <p class="buy">Starting at $999.99 USD</p>
                        <button><a href="#price">Buy Now</a></button>
                        <button class="chat"> <a href="register.php"><i class="fa-solid fa-user-plus"></i>Sign Up</a></button>
                    </div>
                </div>
                <div class="col img">
                    <div class="background">
                        <div class="foreground">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- temporary -->
    <div class="background dark">
        <div class="container-fluid">
            <div class="quote reveal up">
                <div>
                    <h1> Ready to explore?</h1>
                    <h1 class="colored">dive in</h1>
                </div>
            </div>
        </div>
    </div>


    <!-- INTRO -->
    <div class="background">
        <div class="container-fluid" id="intro">
            <div class="row intro">
                <div class="col text reveal up">
                    <div class="section">
                        intro
                    </div>
                    <div class="title">
                        Experience your dreams like never before.
                    </div>
                    <div class="text">
                        The NeuroVisor used the newly discover technologies called <b>Soul Translator</b>(STL) driven by
                        <b>Onirix</b> to predict your future.
                        the STL is a 4th generation FullDive machine invented by Dr. Orion Knight at institute of
                        Dreams.
                    </div>
                    <div class="quote">
                        "Every night, our dreams reveal a window into the subconscious mind. With the dream reading
                        machine, we can unlock the secrets of the inner world and help understand the mysteries of the
                        human psyche."
                    </div>
                    <div class="author">
                        Dr. Orion Knight - Project leader
                    </div>
                </div>
                <div class="col image  reveal up">
                    <img src="img/intro.jpg" alt="">
                </div>
            </div>
        </div>
    </div>



    <div class="background column">
        <div class="container-fluid">
            <div class="section-categorie">
                <p>NeuroVisor Key Features</p>

            </div>
            <div class="section-title white">
                <h2>Whats us makes Unique</h2>
            </div>
            <div class="section-item">
                <div class="row">
                    <div class="col reveal up">
                        <div class="item-icon">
                            <i class="fa-solid fa-helmet-un fa-5x"></i>
                        </div>
                        <div class="item-subtitle">
                            Proper fit
                        </div>
                        <div class="item-description">
                            Custom fitted to comfortably and securely on your head without being too tight or too loose.
                        </div>
                    </div>
                    <div class="col reveal up">
                        <div class="item-icon">
                            <i class="fa-solid fa-brain fa-6x" style="color:var(--accent)"></i>
                        </div>
                        <div class="item-subtitle">
                            Premonitions
                        </div>
                        <div class="item-description">
                            using the data collected from the brain and identify patterns we are able to predict your
                            future
                        </div>
                    </div>
                    <div class="col reveal up">
                        <div class="item-icon">
                            <i class="fa-solid fa-bolt fa-5x"></i>
                        </div>
                        <div class="item-subtitle">
                            high-density microwave transceivers
                        </div>
                        <div class="item-description">
                            high-density microwave transceivers to accurately detect and record brain activity
                            during sleep
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="background">
        <div class="container-fluid">
            <div class="row textimage left-text">
                <div class="col text-side reveal up">
                    <div class="my-accordion">
                        <div class="section-categorie">
                            <p>How we do it?</p>
                        </div>
                        <div class="my-accordion-title">
                            This is the summary of how we accomplish the world most advanced technologies.
                        </div>
                        <div class="my-accordion-item active ">
                            <div class="my-accordion-header">
                                <span>1</span>
                                Fluctlight
                            </div>
                            <div class="my-accordion-content">
                                The Fluctlight a light particle that acts as a quantum unit of the mind,existing within
                                the
                                microtubules of a nerve cell. The light particle exists in a state of indeterminism and
                                fluctuates
                            </div>
                        </div>
                        <div class="my-accordion-item">
                            <div class="my-accordion-header">
                                <span>2</span>
                                Fluctlight Translation
                            </div>
                            <div class="my-accordion-content">
                                The Soul Translator is capable of recording the spin and vector of each photon within
                                the microtubules and thus translate the information stored within the Fluctlight into a
                                form readable by computers or the other way around
                            </div>
                        </div>
                        <div class="my-accordion-item">
                            <div class="my-accordion-header">
                                <span>3</span>
                                Memory Storage
                            </div>
                            <div class="my-accordion-content">
                                The six Soul Translators in existence are connected to a special quantum computer system
                                called the Light Cube Cluster. A single massive central cube, called the Main
                                Visualizer, exists within the cluster and stores the extensive Mnemonic Visuals

                                <p>This image is a representation of someone fluctlight.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col img-side" style="--sr:../img/img1.jpg"></div>
            </div>
            <!-- reverse text image -->
            <div class="row textimage right-text">
                <div class="col text-side reveal up">
                    <div class="text-title">
                        <h2>Memory premonitions</h2>
                    </div>
                    <div class="text-description">
                        <p>using Onirix artificial intelligence and machine learning algorithms to analyze the data
                            collected
                            from the brain and identify patterns we are able to predict your future </p>
                    </div>
                    <div class="text-btn">
                        <button class="btn-base"><a href="team.php"> Get One</a></button>
                    </div>
                </div>
                <div class="col img-side2" style="--sr:../img/img2.jpg">
                </div>
            </div>
        </div>
    </div>





    <div class="background column">
        <div class="container-fluid" id="price">
            <div class="section-categorie">
                <p>Get Started</p>
            </div>
            <div class="section-title">
                <h2>We offer a range of pricing options to suit your budget</h2>
            </div>
            <div class="row modern-price">
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



    <div class="background">
        <div class="container-fluid">
            <div class="section-categorie">
                <p>What they're saying</p>
            </div>
            <div class="section-title dark">
                <h2>Customer Testimonials</h2>
            </div>
            <div class="row testimonial">
                <div class="col reveal up">
                    <div class="quote l">
                        <i class="fa-solid fa-quote-left fa-2x"></i>
                    </div>
                    <div class="content">
                        <p>Thank you so NeuvoVisor. If it weren't for you, my health
                            issue could have become much worse. </p>
                    </div>
                    <div class="user">
                        <h5>Ella White</h5>
                        <!-- <h6>Graphic Designer</h6> -->
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="quote r">
                        <i class="fa-solid fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="col reveal up">
                    <div class="quote l">
                        <i class="fa-solid fa-quote-left fa-2x"></i>
                    </div>
                    <div class="content">
                        <p>You saw something in us that we didn't even see in ourselves, and now we're happier than
                            we've ever been.</p>
                    </div>
                    <div class="user">
                        <h5>Dollie Cooper</h5>
                        <!-- <h6>Graphic Designer</h6> -->
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="quote r">
                        <i class="fa-solid fa-quote-right fa-2x"></i>
                    </div>
                </div>
                <div class="col reveal up">
                    <div class="quote l">
                        <i class="fa-solid fa-quote-left fa-2x"></i>
                    </div>
                    <div class="content">
                        <p>I want to thank you for making see about how my coworker was speaking about me
                            behind my back</p>
                    </div>
                    <div class="user">
                        <h5>Walter Howell</h5>
                        <!-- <h6>Graphic Designer</h6>g -->
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="quote r">
                        <i class="fa-solid fa-quote-right fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="background live">
        <div class="container-fluid">
            <div class="livechat reveal up">
                <h3>Still not sure if a NeuroVisor is right for you?</h3>
                <p>Based on ours data collected from our users, 74% of them have Premonitions of them having minor
                    health issues in their near future.</p>
                <a href="register.php"><button><i class="fa-solid fa-user-plus"></i>Sign Up</button></a>
                <p>for daily news in your inbox</p>
            </div>
        </div>
    </div>


    <div class="modal-wrapper" id="modal_wrapper">

        <div class="modal-mycontent">
            <div class="close-btn" id="CloseAd">
                <i class="fa-solid fa-xmark fa-2x"></i>
            </div>
            <div class="header">
                <p>Are you experiencing Nightmare?</p>
            </div>
            <div class="img">
                <img src="img/nightmare.png" alt="">
            </div>
            <div class="answer">
                <p>If so, then its a sign of <span>psychological distress</span> and you should seek immediate
                    <span>professional help</span>
                </p>
            </div>

        </div>
    </div>




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