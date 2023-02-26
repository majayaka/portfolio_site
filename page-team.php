<?php  
/**
* Template Name: TEAM
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

    <main>
        <!-- hero -->
        <div class="hero-general d-flex align-items-center" id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center py-5">
                            <h6>TEAM</h6>
                            <h1 class="display-4 text-white">EQUIPE</h1>
                        </div>
                    </div>
                </div>
            </div>
        
        <!-- Boss Feature -->
        <section id="feature" class="row bg-light mx-auto my-2 py-2">
            <div class="col-lg-5 boss mt-2"></div>
            <div class="col-lg-7">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-10 pt-2 pb-5 offset-md-1">
                            <h5>Associé-fondateur d'Holomnis</h5>
                            <h3 class="text-dark">Gildas MAJAULT</h1>
                            <h4>Parcours professionnel</h4>
                            <blockquote class="blockquote mt-2">Après avoir été Directeur des Ressources Humaines au sein d'un groupe du CAC 40,
                                et consultant auprès de directions et de partenaires sociaux pendant près de 20 ans, j'ai créé et je dirige la société Holomnis. 
                            J'interviens en tant que coach, consultant et formateur dans les domaines du management, du développement des talents, des relations sociales et du bien-être au travail.</br>
                            En tant que médiateur, mon champ d'intervention concerne aussi bien la résolution de conflits interpersonnels ou d'équipe, que le dialogue entre partenaires sociaux. 
                            J'interviens également en qualité de médiateur judiciaire pour les litiges du ressort de la Cour d'appel de Paris et de Versailles.</br>
                            J'accompagne les structures pour définir et mettre en œuvre des politiques d'innovation sociale et de développement RH :
                                diagnostic conseil, plan d'actions opérationnel, facilitation de projet, accompagnement des équipes de direction…</br> 
                                Ce sont autant de leviers utilisés pour les aider à devenir autonomes dans l'accompagnement des collaborateurs.
                            </blockquote>
                            <ul class="my-0">
                                <li>Formé en droit du travail à l'université Panthéon Sorbonne (Master 2)</li>
                                <li>Formé au coaching à HEC Paris (Executive Coaching)</li>
                                <li>Formé à la médiation à l'Institut Catholique de Paris (Master 2)</li>
                                <li>Certifié en intelligence émotionnelle (EQ-i Bar-On)</li>
                                <li>Praticien Programmation Neuro-Linguistique et Analyse Transactionnelle</li>
                                <li>Rédacteur auprès de la revue Inter-médiés et du Magazine de l'ANDRH</li>
                                <li>Anc. DRH, Publicis, Moody's, Candriam, Dexia</li></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <!-- Team -->
        <section id="team" class="row bg-light mx-auto">
            <div class="container">
                <div class="row my-4">
                    <div class="col-md-8 mx-auto text-center">
                        <h6>TEAM</h6>
                        <h1>EQUIPE</h1>
                    </div>
                </div>
                
                <div class="row g-3 my-2">

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team1.jpg" alt="">
                            <div class="overlay">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/samanthaandre/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Samantha ANDRE</h5>
                                <p>FACILITATRICE DESIGN THINKING ET INTELLIGENCE COLLECTIVE</p>
                                <ul class="text-left list-unstyled">
                                    <li>Anc. Diplomate au Consulat Général de France aux Etats-Unis</li>
                                    <li>Scrum Master, Design Thinking</li>
                                    <li>MSc International Business Skema / North Carolina State University</li>
                                    <li>Anglais</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team2.jpg" alt="">
                            <div class="overlay">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/caroline-bugelli-50889316/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Caroline BUGELLI</h5>
                                <p>CONSULTANTE, FORMATRICE</p>
                                <ul class="text-left pt-2 list-unstyled">
                                    <li>Performance managériale, commerciale et communication</li>
                                    <li>MBA Etats-Unis, ISTEC</li>
                                    <li>MHD Ecole coaching</li>
                                    <li>Anglais, Italien, Espagnol</li>
                                    <br><br>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team3.jpg" alt="">
                            <div class="overlay text-center">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/elid-conseil-rh-aude-grosjean-b8288762/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Aude GROSJEAN</h5>
                                <p>PSYCHOLOGUE DU TRAVAIL / IPRP</p>
                                <ul class="text-left pt-3 list-unstyled">
                                    <li>Recrutement, RPS et Bilan de compétence</li>
                                    <li>M2 Psychologie du travail et ergonomie cognitive</li>
                                    <li>M1 Responsable RH</li>
                                    <br><br>
                                    <br><br>      
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team4.jpg" alt="">
                            <div class="overlay text-center">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/ingrid-kandelman-5906221/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Ingrid KANDELMAN</h5>
                                <p>CONSULTANTE CONDUITE DU CHANGEMENT</p>
                                <ul class="text-left pt-2 list-unstyled">
                                    <li>Anc. Consultant Senior, Anc. Manager, CDC Ixis, Unibail Rodamnco, Groupe Alpha, thecamp</li>
                                    <li>Droit du travail, M2, Nanterre</li>
                                    <li>Essec, M1</li>
                                    <br><br>
                                    <br>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team5.jpg" alt="">
                            <div class="overlay text-center">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/martin-labrousse-3555071/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Martin LABROUSSE</h5>
                                <p>CONSULTANT, FACILITATEUR, PROJETS INNOVANTS & DIGITAUX</p>
                                <ul class="text-left list-unstyled">
                                    <li>Anc. Consultant et manager, BNP Paribas, PWC, Roland Berger</li>
                                    <li>Ecole Centrale Paris</li>
                                    <li>ENSCI Innovation by Design</li>
                                    <br><br>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team6.jpg" alt="">
                            <div class="overlay text-center">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/brice-ledoyen-b8aaa6201/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Brice LEDOYEN</h5>
                                <p>COACH, FORMATEUR</p>
                                <ul class="text-left pt-2 ms-3 list-unstyled">
                                    <li>Animation de groupes de travail</li>
                                    <li>Auteur et Metteur en scène</li>
                                    <li>Maître praticien PNL</li>
                                    <br><br>
                                    <br><br>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team7.jpg" alt="">
                            <div class="overlay text-center">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/isabelle-lemoine-09990b8/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Isabelle LEMOINE</h5>
                                <p>COACH - FACILITATRICE</p>
                                <ul class="text-left pt-2 list-unstyled">
                                    <li>Anc. Dir Stratégie et à l'optimisation des moyens de communication, Accenture, Initiave Paris</li>
                                    <li>DESU Coaching, Paris VIII</li>
                                    <li>Approche systémique / Intelligence collective / Co-développement</li>
                                    <br><br>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team8.jpg" alt="">
                            <div class="overlay text-center">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/louise-a-massing%F0%9F%92%ABl-action-entre-r%C3%AAves-et-r%C3%A9alit%C3%A9s-%F0%9F%92%AB-836ba154/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Louise MASSING</h5>
                                <p>CONSULTANTE PERFORMANCE RELATIONNELLE, QVT</p>
                                <ul class="text-left pt-3 list-unstyled">
                                    <li>Resp médiation et QVT AP/HP, Institut Curie</li>
                                    <li>M2 Médiation</li>
                                    <li>Lauréate du prix Médiation Entreprise APMCA 2019</li>
                                    <br><br>
                                    <br><br>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 text-center mb-2">
                        <div class="team-member card-effect h-100">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/team9.jpg" alt="">
                            <div class="overlay text-center">
                            </div>
                            <div class="social-icons">
                                <a href="https://www.linkedin.com/in/j%C3%A9r%C3%B4me-thomas-b9268687/"><i class='bx bxl-linkedin' ></i></a>
                            </div>
                            <div class="detail">
                                <h5>Jérôme THOMAS</h5>
                                <p>COACH</p>
                                <ul class="text-left pt-3 list-unstyled">
                                    <li>Anc. Avocat au Barreau de Paris</li>
                                    <li>Anc. Resp Juridique Baccardi, Orano (ex Areva)</li>
                                    <li>Linkup Coaching</li>
                                    <br><br>
                                    <br><br>
                                </ul>
                            </div>
                        </div>
                    </div>


                </div>

                

                


            </div>
        </section>
            


    </main>

<?php get_footer(); ?>