<?php get_header();
require_once('components/navbar.inc.php'); ?>

<main>
    <!-- hero press -->
    <div class="hero-general d-flex align-items-center" id="home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mx-auto text-center py-5">
                    </br></br></br>
                </div>
            </div>
        </div>
    </div>

    <section id="result" class="bg-light d-flex">
        <!--Section: Article pickup-->
        <div class="container py-1">
            <!--Grid row-->
            <div class="row wow fadeIn">

                <?php


                if (have_posts()) {
                    $counter = 1;
                    while (have_posts()) {
                        the_post();
                ?>

                        <!--Section: Articles-->
                        <!--Grid column-->
                        <a href="<?php echo get_permalink(); ?>">
                            <div class="inner_card my-2 py-2 px-2 card-effect">
                                <h4 class="my-2 font-weight-bold">
                                    <?php $tags = get_the_terms($post->ID, 'offre_tag'); ?>

                                    <?php if ($tags) : ?>
                                        <strong><?php the_title(); ?></strong>
                                        <?php foreach ($tags as $tag) : ?>
                                            <span class="tag text-danger"><?php echo $tag->name; ?></span>
                                        <?php endforeach; ?>

                                    <?php else : ?>
                                        <strong><?php the_title(); ?></strong>
                                    <?php endif; ?>
                                </h4>
                                <p class=""><?php echo get_the_date(); ?></p>
                                <p class="my-0"><?php the_excerpt(); ?></p>
                                <a href="<?php echo get_permalink() ?>"><strong>Read more</strong></a>
                            </div>
                        </a>
                        <!--Grid column-->

                        <!--Section: Articles-->

                        <?php
                        if ($counter % 3 == 0) {
                        ?>

                <?php
                        }
                        $counter++;
                    } // end while
                } // end if
                ?>

            </div>

            <div class="row wow fadeIn">


            </div>
        </div>

        </div>

        <?php get_sidebar(); ?>

    </section>


    <?php mdb_pagination(); ?>



    </div>
</main>
<!--Main layout-->

<?php get_footer(); ?>