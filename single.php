<?php  get_header(); 

/* Template Name: RECRUTEMENT single page */

require_once('components/navbar.inc.php'); ?>

<main>
        <!-- hero press -->
        <div class="hero-general d-flex align-items-center" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 mx-auto text-center py-5">
                        <h6>JOB OFFERS</h6>
                        <h1 class="display-4 text-white">OFFRES D'EMPLOI</h1>
                    </div>
                </div>
            </div>
        </div>

    
        <!--Section: Main Article-->
        <section id="press" class="bg-light d-flex">
    
            <div class="container single-post-container py-1">
                
                <div class="row wow fadeIn">

                <?php
                            

                if ( have_posts() ) {
                $counter = 1;
                while ( have_posts() ) {
                the_post();
                ?>

                    <!--Section: Article-->
                    <article class="single-post-wrap col">
                        <div class="font-weight-bold entry-header py-0">
                            <div class="title-meta-wrap mb-0">
                                <?php $tags = get_the_terms( $post->ID, 'offre_tag' ); ?>

                                            <?php if ( $tags ) : ?>
                                            <h1 class="title entry-title">
                                            <strong><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></strong>
                                            </h1>
                                            <?php foreach ( $tags as $tag ) : ?>
                                            <h2 class="tag text-danger"><?php echo $tag->name; ?></h2>
                                            <?php endforeach; ?>

                                            <?php else : ?>
                                            <h1 class="title entry-title">
                                            <strong><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></strong>
                                            </h1>
                                            <?php endif; ?>
                        
                                <ul class="meta-list list-unstyled d-flex justify-content-center">
                                    <li class="meta date flex-fill mb-0">
                                        <?php echo get_the_date(); ?>
                                    </li>
                                    <li class="meta author flex-fill mb-0">
                                        by <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>"><?php the_author(); ?></a>, 
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="thum-wrap text-center mt-0">
                            <img src="<?php the_post_thumbnail('thumbnail'); ?>" alt="" class="skip-lazy wp-post-image">
                        </div>
                        <div class="content-wrap entry-content">
                            <?php the_content(); ?>
                        </div>
                    </article>
                    <!--Section: Articles-->

                 <?php
                  if ($counter % 3 == 0) { 
                  ?>
                  </div>
                  
                  <div class="row wow fadeIn">
                  <?php
                        }
                        $counter++;                  
                        } // end while
                        } // end if
                  ?>

                  </div>

                </div>

            <?php get_sidebar(); ?>

        </section>
                  

            <?php mdb_pagination(); ?>

            

        </div>
    </main>
    <!--Main layout-->

<?php  get_footer(); ?>