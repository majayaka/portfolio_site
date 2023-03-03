<?php

/**
 * Template Name: CONTACT
 *
 */

get_header();

require_once('components/navbar.inc.php'); ?>

<main>
    <!-- hero -->
    <div class="hero-general d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center py-5">
                    <h6>GET IN TOUCH</h6>
                    <h1 class="display-4 text-white">CONTACT</h1>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact  -->
    <section id="contact" class="bg-light">
        <div class="container mx-auto">
            <div class="row">
                <div class="col-md-8 mx-auto my-5 text-center">
                    <h6>GET IN TOUCH</h6>
                    <h1>FORMULAIRE DE CONTACT</h1>
                    <p>Nous reviendrons vers vous dès que possible.</p>
                </div>
            </div>

            <?php echo do_shortcode('[contact-form-7 id="157" title="CONTACT"]'); ?>

        </div>

    </section>


    <?php get_footer(); ?>