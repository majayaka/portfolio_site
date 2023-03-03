<?php

/**
 * Template Name: Front Page
 *
 */

get_header();

require_once('components/navbar.inc.php'); ?>

<main>
    <!-- About -->
    <section class="hero min-vh-200 d-flex align-items-center py-5" id="about">
        <div class="container">
            <div class="row my-4">
                <div class="col-lg-8 mx-auto text-center mt-10">
                    <h1 class="display-4 py-2">I am Ayaka, </br>Japanese Web developer in France,</h1>
                    <div class="profile-photo">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/ayaka.jpeg" alt="Ayaka profile photo">
                    </div>
                    <h2 class="pt-4">who speaks Japanese, English, French.</h2>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-lg-12 text-start">
                    <h5 class="text-dark">Why do I like being Web developer?</h5>
                    <h3 class="fst-italic fs-6">I believe my skills are constantly improving everyday. I'm very happy to find the job that I can learn something new every day, especially with the one I am very curious and passionate!</h3>
                </div>
            </div>
            <div class="row my-4">
                <div class="col-lg-8 mx-auto text-center mt-10">
                    <a href="#cv" class="custom-btn col-lg-8 my-2">MORE ABOUT MY SKILL SET</a>
                </div>
            </div>
    </section>

    <!-- skill-set -->
    <section id="cv" class="py-5">
        <div class="grid-container d-flex align-items-center mx-auto my-2 py-4">

            <div class="row g-4 mt-4 mx-auto align-items-center text-center">
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-1" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">HTML</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-2" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">CSS</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-3" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">Sass</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-4" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">JavaScript</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-5" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">PHP</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-6" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">React.js</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-7" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">WordPress</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-8" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">MySQL</h4>
                </div>
                <div class="progressbar flex-column">
                    <svg class="progressbar__svg">
                        <circle class="bg" cx="57" cy="57" r="52" />
                        <circle class="meter-9" cx="57" cy="57" r="52" />
                    </svg>
                    <h4 class="display-5">Node.js</h4>
                </div>
            </div>
        </div>

        <!-- CV -->
        <div class="cv row py-0 px-2 mx-auto">
            <div class="col-lg-6 flex-column">
                <div class="container mx-auto align-items-center">
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cv-img1.jpg" alt="" class="col-lg-12">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 flex-column">
                <div class="container mx-auto align-items-center">
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cv-img2.jpg" alt="" class="col-lg-12">
                    </div>
                </div>
            </div>
            <a class="col-lg-12 custom-btn my-2 text-center" href="<?php echo get_template_directory_uri(); ?>/img/CV_EN_AYAKA_Y_1_2023.pdf" download>
                DOWNLOAD MY CV
            </a>
        </div>

    </section>


    <!-- Portfolio -->
    <section id="portfolio" class="py-3">
        <div class="container-fluid my-3">
            <div class="row">
                <div class="col-md-8 mx-auto text-center mb-4">
                    <h6>PORTFOLIO</h6>
                    <h1>What I've done…</h1>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://holomnis.fr/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/holomnis-site.png" alt="Booki img" class="card-img-top">
                            <div class="overlay flex-column pt-5 text-center">
                                <h4 class="text-white text-center h3">The first WP site for the client with my original theme</h4>
                                <h4 class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-php'></i><i class='bx bxl-wordpress'></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://majayaka.github.io/P4/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio-site.png" alt="Booki img" class="card-img-top">
                            <div class="overlay flex-column pt-5 text-center">
                                <h4 class="text-white text-center h3">This portfolio site with my original theme</h4>
                                <h4 class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-php'></i><i class='bx bxl-wordpress'></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://majayaka.github.io/P4/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/LaPanthère-site.png" alt="Booki img" class="card-img-top">
                            <div class="overlay flex-column pt-5 text-center">
                                <h4 class="text-white text-center h3">React.js site</h4>
                                <h4 class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://majayaka.github.io/P4/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/LaPanthère-site.png" alt="Booki img" class="card-img-top">
                            <div class="overlay flex-column pt-5 text-center">
                                <h4 class="text-white text-center h3">Javascript and Node.js site</h4>
                                <h4 class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-nodejs'></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://majayaka.github.io/P4/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/LaPanthère-site.png" alt="Booki img" class="card-img-top">
                            <div class="overlay flex-column pt-5 text-center">
                                <h4 class="text-white text-center h3">Javascript and Node.js site</h4>
                                <h4 class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i><i class='bx bxl-javascript'></i><i class='bx bxl-nodejs'></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://majayaka.github.io/P4/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/LaPanthère-site.png" alt="Booki img" class="card-img-top">
                            <div class="overlay flex-column pt-5 text-center">
                                <h4 class="text-white text-center h3">My first SEO friendly website</h4>
                                <h4 class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://majayaka.github.io/P3/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/ohmyfood-site2.png" alt="ohmyfood img" class="card-img-top">
                            <div class="overlay flex-column pt-5 text-center">
                                <h4 class="text-white text-center h3">The responsive site with more CSS animations</h4>
                                <h4 class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i></h4>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-6 mb-2">
                    <div class="project card h-100">
                        <a href="https://majayaka.github.io/P2/">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/Booki-site.png" alt="Booki img" class="card-img-top">
                            <div class="overlay flex-column pt-5">
                                <h4 class="text-white text-center h3">My very first website at school</h4>
                                <div class="text-white text-center"><i class='bx bxl-html5'></i><i class='bx bxl-css3'></i></div>
                            </div>
                        </a>
                    </div>
                </div>






            </div>
        </div>
    </section>


</main>
<!--Main layout-->
<?php
get_footer();
?>