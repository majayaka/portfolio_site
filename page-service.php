<?php  
/**
* Template Name: ABOUT
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
                                <h6>SERVICES</h6>
                                <h1 class="display-4 text-white">NOS EXPERTISES</h1>
                            </div>
                        </div>
                    </div>
            </div>
            
            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 mx-auto text-center">
                            <h6>SERVICES</h6>
                            <h1>EXPERTISES</h1>
                            <p>Nos experts mettons à votre disposition tout notre savoir-faire,<br>quel que soit le lieu où vous êtes implantés.</p>
                        </div>  
                    </div>

                    <div class="row g-4 mt-4">
                        <div class="col-lg-4 col-sm-6 h-100 mt-2">
                                <div class="service card-effect">
                                <a href="/service#hrc">
                                    <div class="iconbox">
                                        <i class='bx bx-user-voice'></i>
                                    </div>
                                    <h5 class="mt-4 mb-2">Enquête interne <br> harcèlement moral/sexuel</h5>
                                </a>
                                </div>    
                        </div>

                        <div class="col-lg-4 col-sm-6 h-100 mt-2">
                            <a href="/service#mediation">
                                <div class="service card-effect">
                                    <div class="iconbox">
                                        <i class='bx bxs-analyse'></i>
                                    </div>
                                    <h5 class="mt-4 mb-2">Médiation</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-6 h-100 mt-2">
                            <a href="/service#audit">
                                <div class="service card-effect">
                                    <div class="iconbox">
                                        <i class='bx bx-search-alt-2' ></i>
                                    </div>
                                    <h5 class="mt-4 mb-2">Audit social /<br>Conseil managérial</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-6 h-100 mt-2">
                            <a href="/service#coaching">
                                <div class="service card-effect">
                                    <div class="iconbox">
                                        <i class='bx bxs-clinic' ></i>
                                    </div>
                                    <h5 class="mt-4 mb-2">Coaching individuel /<br>Facilitation collective</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-6 h-100 mt-2">
                            <a href="/service#rh">
                                <div class="service card-effect">
                                    <div class="iconbox">
                                        <i class='bx bx-award'></i>
                                    </div>
                                    <h5 class="mt-4 mb-2">Programme d'Excellence<br>en Ressources Humaines</h5>
                                </div>
                            </a>
                        </div>

                        <div class="col-lg-4 col-sm-6 h-100 mt-2">
                            <a href="<?php echo get_template_directory_uri(); ?>/recrutement">
                                <div class="service card-effect">
                                    <div class="iconbox">
                                        <i class='bx bxs-business'></i>
                                    </div>
                                    <h5 class="mt-4 mb-2">Recrutement /<br>Assessment</h5>
                                </div>
                            </a>
                        </div>

                    </div>
                </div>
            </section>
            
            
            <!-- harcelement -->
            <section id="hrc" class="row py-0 px-2 bg-light mx-auto service-card mb-3">
                <div class="col-lg-7">
                    <div class="hrc container" >
                        <div class="row py-3">
                            <div class="col-md-10 pt-5 pb-2 offset-md-1">
                                <h2 class="title">
                                Enquête interne harcèlement moral/sexuel
                                </h2>
                            </div>
                            <div class="container col-md-10">
                            <p class="h5 w-70 pb-2">
                                Nos consultants-experts sont désignés par les entreprises  
                                qui souhaitent <strong>une enquête fiable, extérieure et impartiale</strong>
                                pour déterminer s'il y a, ou non, harcèlement moral ou sexuel
                                entre collègues de travail afin de prendre les mesures adaptées à la situation. 
                            </p>
                            <h5 class="pt-2 ps-5 vert">
                                Nous sommes sollicités dans les cas suivant :
                            </h5>
                            <div class="list">
                                <ul class="py-3 ps-5 lead">
                                    <li>Manque d'expertise en interne sur les RPS et la procédure d'enquête</li>
                                    <li>Complexité et sensibilité de l'affaire lorsque de nombreux acteurs sont impliqués ou en raison de leur fonction</li>
                                    <li>Personne en interne ne souhaite y participer</li>
                                    <li>Assurance d'une totale indépendance et impartialité du consultant externe, notamment lorsque l'affaire risque d'être portée en justice </li>
                                    <li>Echec de l'enquête interne</li>
                                </ul>
                            </div>
                            <p class="py-3 ps-5 mb-4 h5">
                                Les organisations décident de nous confier leurs enquêtes internes 
                                en harcèlement moral ou sexuel pour davantage de sécurité juridique
                                et de simplicité d'utilisation.
                            </p>                                    
                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 hrc-img"></div>
            </section>


            <!-- mediation -->
            <section id="mediation" class="row my-2 py-0 px-2 bg-light service-card mb-3 mx-auto">
                <div class="col-lg-5 media-img"></div>
                <div class="col-lg-7">
                    <div class="media container" >
                        <div class="row py-3">
                            <div class="col-md-10 pt-5 pb-2 offset-md-1">
                                <h2 class="title">
                                Médiation
                                </h2>
                            </div>
                            <div class="container col-md-10">
                                <h3 class="py-3 h5 vert"><strong>Comment déclencher une médiation ?</strong></h3>
                                <p class="body-phrase h5 w-70">
                                    La médiation est généralement proposée directement par la direction aux salariés.
                                    Ces derniers peuvent également prendre l'initiative de proposer ce dispositif.<br>
                                    La médiation reposant sur le principe du volontariat, chaque partie (et la direction) est libre de l'accepter ou non,
                                    et d'en sortir à tout moment. <br>
                                    Le médiateur signera deux contrats distincts : un qui le lie à l'entreprise 
                                    (dont l'objet est de décrire la mission et les honoraires), 
                                    et un autre qui le lie aux parties (conditions de procédure, confidentialité, libre adhésion au dispositif...).<br>
                                    Le choix du médiateur doit être consensuel et réfléchi.
                                    Il est conseillé d'opter pour un professionnel ayant le titre de médiateur niveau 1 au RNCP (Répertoire National des Certifications Professionnelles).<br><br>
                                </p>                                    
                                <h6 class="text-grey">*Etude menée par le cabinet européen OPP 2008.<br>
                                    ** Communiqué de presse du Ministère de l'économie du 1er juillet 2020.
                                </h6>
                                
                                <p class="py-3 h5">
                                    Nous réalisons également des <strong>médiations entre salariés ou au sein d'équipes</strong> 
                                    pour sortir des situations de harcèlement (art. code du travail L1152-6). <br><br>
                                    Avec taux de 75% de réussite en matière sociale, 
                                    la médiation se développe rapidement et soulage salariés, managers,
                                    RH et collectif de travail.
                                </p>                          
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Audit -->
            <section id="audit" class="row my-2 py-0 px-2 bg-light service-card mb-3 mx-auto">
                <div class="col-lg-7">
                    <div class="audit container" >
                        <div class="row py-3">
                            <div class="col-md-10 pt-5 pb-2 offset-md-1">
                                <h2 class="title">
                                Audit social / Conseil managérial
                                </h2>
                            </div>
                            <div class="content-body container col-md-10">
                                <h5 class="py-3">
                                    AUDIT SOCIAL: DES ENTREPRISES PERFORMANTES GRACE A DES SALARIES MOTIVES
                                </h5>
                                <p class="w-70 py-3 h5">
                                <strong>Nos études quantitatives</strong> (sur la base de questionnaires anonymes sur mesure) et qualitatives (via des entretiens)
                                offrent un diagnostic fiable de l'état réel du climat social, de la qualité de vie au travail et des irritants.
                                </p>
                                <p class="py-3 text-grey h5">
                                Ce constat permet d' <strong>objectiver les points forts</strong> de l'organisation, <strong>de chasser les freins à la motivation</strong> des collaborateurs, 
                                voire d'<strong>identifier des risques psychosociaux.</strong>  
                                En dévoilant l'état réel du collectif de travail, nos audits sociaux permettent de choisir en toute connaissance de cause les actions adéquates 
                                pour améliorer l'implication individuelle et la performance globale.
                                </p>
                                <h5 class="py-2">
                                    PRECONISATIONS ET CONSEIL MANAGERIAL : 
                                </h5>
                                <p class="py-3 text-grey h5">
                                    Que ce soit après un audit social ou sur simple demande, <strong>nos recommandations sont toujours faites en tenant compte de votre contexte 
                                    afin d'être concrètement actionnables.</strong> <br>En cas de nécessité, nous pouvons vous accompagner et intervenir opérationnellement grâce à nos experts en gestion des conflits/médiation, 
                                    gestion de crise/enquête harcèlement, RH/Relations sociales/procédures disciplinaires, coaching/facilitation collective.
                                </p>
                                <p class="py-3 text-grey h5">
                                    Notre expérience nous a permis d'appréhender de nombreux secteurs différents et des organisations de toutes tailles, 
                                    ce qui nous permet d'offrir un conseil concret qui tient compte de votre singularité.
                                    Nous intervenons auprès du ou des dirigeants en mode expert ou collaboratif. 
                                </p>                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 audit-img"></div>
            </section>

            <!-- coaching -->
            <section id="coaching" class="row my-2 py-0 px-2 bg-light service-card mb-3 mx-auto">
                <div class="col-lg-5 coach-img"></div>
                <div class="col-lg-7">
                    <div class="coach container" >
                        <div class="row py-3">
                            <div class="col-md-10 pt-5 pb-2 offset-md-1">
                                <h2 class="title">
                                Coaching individuel / Facilitation collective
                                </h2>
                            </div>
                            <div class="content-body container col-md-10">
                                <h5 class="py-3">
                                    <span>ACCOMPAGNEMENT INDIVIDUEL</span> 
                                </h5>
                                <p class="text-grey py-3 h5">
                                    Chaque accompagnement est différent. Il dépend de la thématique ou des enjeux apportés par le collaborateur 
                                    et aussi parfois de ceux que son manager ou son entreprise considèrent comme des axes de travail. 
                                </p>
                                <p class="text-grey py-3 h5">
                                    Le coach aide son client à trouver progressivement sa voie pour atteindre ses objectifs. 
                                    Le cadre bienveillant et sécurisant permet un travail en profondeur et pérenne qui confronte souvent la personne à elle-même et à ses comportements habituels.
                                </p>
                                <h5 class="py-3">
                                   FACILITATION COLLECTIVE / MEDIATION DE PROJET 
                                </h5>
                                <p class="text-grey py-3 h5">
                                    La direction, par sa stature d'exemplarité, joue un rôle fondamental sur les comportements et les habitudes de travail de l'ensemble des salariés.
                                    En initiant des actions favorisant la coopération, la direction créé les conditions pour que, par effet d'entraînement,
                                    la collaboration cascade à tous les échelons.
                                </p>
                                <h5 class="py-3">La facilitation est adaptée aux situations dans lesquels :</h5>                     
                                <ul class="text-grey py-3 lead">
                                    <li>Une équipe dysfonctionne et que les relations interpersonnelles sont atteintes ou</li>
                                    <li>En anticipation, comme outil de conduite du changement par lequel un facilitateur externe s'assure que le facteur humain est pris en compte dans un projet à réaliser.</li>
                                </ul>
                                <p class="text-grey py-3 h5">
                                    Ces techniques mettent du liant entre des individus ayant parfois des intérêts divergents pour limiter les résistances au changement,
                                    les mauvaises volontés ou les sabotages liés à des rivalités ou à des peurs.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- RH -->
            <section id="rh" class="row my-2 py-0 px-2 bg-light service-card mb-3 mx-auto">
                <div class="col-lg-7">
                    <div class="hrc container" >
                        <div class="row py-3">
                            <div class="col-md-10 pt-5 pb-2 offset-md-1">
                                <h2 class="title">
                                Programme d'Excellence<br>en Ressources Humaines
                                </h2>
                            </div>
                            <div class="content-body container col-md-10">
                                <p class="h5 w-70">
                                    <span>Les particularités des métiers RH exposent les personnes qui y travaillent à des contraintes très spécifiques</span>  
                                            (relationnel singulier avec les autres collègues, solitude d'un métier parfois mal connu et mal considéré, charge émotionnelle forte,
                                            modification des attentes des directions comme des salariés, stress …).
                                            Ces caractéristiques sont diversement vécues selon leur intensité et leur durée, 
                                            et peuvent entraîner diverses conséquences négatives 
                                            (sentiment d'incompréhension, frustration, baisse de la motivation et de la performance, situations de mal-être voire de risques psycho-sociaux).
                                </p>
                                <h5 class="pt-3 pb-2">
                                    MENTORING ET FORMATION RH
                                </h4>
                                <h5 class="py-3 text-grey ">
                                    <span class="vert"><a href="index.html#feature">Gildas Majault,</a></span> ancien DRH ayant près de 20 ans d'expérience opérationnelle, coach et médiateur, propose un accompagnement externe sur-mesure aux professionnels de la fonction RH 
                                    et leur offre les outils techniques et comportementaux indispensables pour exercer leurs missions avec plaisir et confiance sur le long terme soit sous la forme de mentorings/coachings pour un accompagnement individuel,
                                    soit via des formations sur-mesure ou d'AFEST pour une équipe RH . 
                                </h5>
                                <h4 class="py-3">
                                    <span>EXEMPLES DE FORMATIONS RH ET D'AFEST :</span> 
                                </h4>                     
                                <ul class="py-3">
                                    <li class="lead">Conseiller, accompagner et coacher les managers (postures et outils)</li>
                                    <li class="lead">Comprendre le fonctionnement des Instances Représentatives du Personnel et développer un dialogue social sain et constructif</li>
                                    <li class="lead">Adopter la bonne posture et savoir négocier avec les salariés et leurs représentants</li>
                                    <li class="lead">Prévenir et gérer les risques psychosociaux et les conflits au travail</li>
                                </ul>
                                <h5 class="py-3">
                                    Ces techniques mettent du liant entre des individus ayant parfois des intérêts divergents pour limiter les résistances au changement,
                                    les mauvaises volontés ou les sabotages liés à des rivalités ou à des peurs.
                                </h5>                         
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 rh-img"></div>
            </section>



       
            
<?php

get_footer(); 
?>