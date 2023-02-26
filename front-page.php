<?php  
/**
* Template Name: Front Page
*
*/

get_header(); 
$first_loop = new WP_Query( array(
    'post_type' => 'post',
) );
require_once('components/navbar.inc.php'); 
if ( $first_loop->have_posts() ) {
    while ( $first_loop->have_posts() ) {
        $first_loop->the_post();
    }
    wp_reset_postdata();
}
?>

<!-- hero -->
<main>
<div class="hero min-vh-200 d-flex align-items-center my-5" id="home">
  <div class="container">
    <div class="row">
        <div class="col-lg-8 mx-auto text-center mt-10">
            <h1 class="display-4 py-2">I am Ayaka, </br>Japanese Web developer in France,</h1>
            <div class="profile-photo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/ayaka.jpeg" alt="Ayaka profile photo">
            </div>
            <h2 class="pt-4">who speaks Japanese, English, French.</h2>
            <a href="#about" class="custom-btn col-lg-8 my-5">MORE ABOUT MY SKILL SET</a>
        </div>
    </div>
  </div>
</div>

<!-- Service -->
        <section id="about">
            <div class="grid-container d-flex align-items-center mx-auto my-4 py-4">

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

        </section> 

<!-- CV -->
        <section id="cv" class="row py-0 px-2 mx-auto">
            <div class="col-lg-5 flex-column">
                <div class="container mx-auto align-items-center">
                    <div class="row">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/cv-img1.jpg" alt="" class="col-lg-10">
                        <a class="col-lg-10 custom-btn my-5 text-center" href="<?php echo get_template_directory_uri(); ?>/img/CV_EN_AYAKA_Y_1_2023.pdf" download>
                        DOWNLOAD MY CV
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-7">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 mt-5">
                            <h5 class="text-dark">Why do I like being Web developer?</h5>
                            <h3 class="fst-italic fs-6">My skills are constantly being improved because for me the pleasure of this job is that I learn something new every day, especially if I am involved, curious and passionate!</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>

 <!-- Solutions -->
        <section id="portfolio">
            <div class="container-fluid my-3">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center mb-4">
                        <h6>There you go</h6>
                        <h1>What I've done…</h1>
                    </div>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-sm-6 mb-2">
                        <a href="service.html#service3">
                            <div class="project card">
                                <a href="<?php echo esc_url( home_url( '/service/#coaching') ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro1.jpg" alt="solution img" class="card-img-top">
                                    <div class="overlay">
                                        <div>
                                            <h4 class="text-white">Il y a des tensions dans mon comité de direction, ce qui rend difficile les décisions à prendre et plus on avance dans le temps et pire c'est ! </h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-2">
                        <a href="">
                            <div class="project card">
                                <a href="<?php echo esc_url( home_url( '/service/#coaching') ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro2.jpg" alt="solution img" class="card-img-top">
                                    <div class="overlay">
                                        <div>
                                            <h4 class="text-white">Ma société a beaucoup évolué en 2 ans mais je suis jeune et j'ai embauché 8 personnes plutôt jeunes. Je ne sais plus comment me comporter…</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-2">
                        <a href="">
                            <div class="project card">
                                <a href="<?php echo esc_url( home_url( '/service/#hrc') ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro3.jpg" alt="solution img" class="card-img-top">
                                    <div class="overlay">
                                        <div>
                                            <h4 class="text-white">Il y a des profs du notre ecole qui subitent depuis des années des remarques déplacées de la part du Directeur…</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-2">
                        <a href="">
                            <div class="project card">
                                <a href="<?php echo esc_url( home_url( '/service/#mediation') ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro4.jpg" alt="solution img" class="card-img-top">
                                    <div class="overlay">
                                        <div>
                                            <h4 class="text-white">Je ne sais pas ce qu'il faut faire pour désamorcer un conflit entre des salariés…</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-2">
                        <a href="">
                            <div class="project card">
                                <a href="<?php echo esc_url( home_url( '/service/#coaching') ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro5.jpg" alt="solution img" class="card-img-top">
                                    <div class="overlay">
                                        <div>
                                            <h4 class="text-white">On a commencé à 2, on est maintenant 10. On est heureux pourtant on ne parvient pas à créer de cohésion…</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-2">
                        <a href="">
                            <div class="project card">
                                <a href="<?php echo esc_url( home_url( '/offres') ); ?>">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/pro6.jpg" alt="solution img" class="card-img-top">
                                    <div class="overlay">
                                        <div>
                                            <h4 class="text-white">J'ai du mal à évaluer les candidats…</h4>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </section>

        <!-- Contact -->

        
</main>
<!--Main layout-->
<?php
get_footer(); 
?>