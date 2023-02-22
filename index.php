<?php get_header(); ?>

<div class="container">
  <div class="row">
    <?php
      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => -1
      );
      $query = new WP_Query( $args );

      if ( $query->have_posts() ) :
        while ( $query->have_posts() ) : $query->the_post();
          $portfolio_image = get_field( 'portfolio_image' );
          $portfolio_url = get_field( 'portfolio_url' );
    ?>
      <div class="col-md-4">
        <div class="card mb-4 shadow-sm">
          <img class="card-img-top" src="<?php echo esc_url( $portfolio_image['url'] ); ?>" alt="<?php echo esc_attr( $portfolio_image['alt'] ); ?>">
          <div class="card-body">
            <p class="card-text"><?php the_title(); ?></p>
            <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                <a href="<?php echo esc_url( $portfolio_url ); ?>" class="btn btn-sm btn-outline-secondary">View</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php
        endwhile;
      endif;

      wp_reset_postdata();
    ?>
  </div>
</div>

<?php get_footer(); ?>
