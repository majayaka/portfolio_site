<?php  get_header(); 

/* Template Name: 404 */

require_once('components/navbar.inc.php');?>


    <main>
        <!-- hero -->
            <div class="hero vh-100 d-flex align-items-center" id="home">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 mx-auto text-center my-5">
                            <h1 class="display-4 text-white">404</h1>
                            <p>Sorry, the page does not exist.</p>
                            <a href="<?php echo home_url(); ?>" class="btn btn-outline-light mt-5">Go back</a>
                        </div>
                    </div>
                </div>
            </div>
    
    </main>
        
<?php get_footer(); ?>
        
       
