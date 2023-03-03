<!-- Footer -->
<footer class="bd-footer text-center text-lg-start my-2">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <div class="me-4 d-none d-lg-block">
            <span>Get connected with me on social networks:</span>
        </div>
        <div>
            <a href="https://www.facebook.com/ayakayumoto" class="me-4 link-secondary">
                <i class='bx bxl-facebook-circle'></i>
            </a>
            <a href="https://github.com/majayaka" class="me-4 link-secondary">
                <i class='bx bxl-github'></i>
            </a>
            <a href="https://instagram.com/ayakamaj?igshid=YmMyMTA2M2Y=" class="me-4 link-secondary">
                <i class='bx bxl-instagram-alt'></i>
            </a>
            <a href="https://www.linkedin.com/in/amajault/" class="me-4 link-secondary">
                <i class='bx bxl-linkedin-square'></i>
            </a>
        </div>
    </section>

    <section class="footer-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
                    <a class="" href="<?php echo get_home_url(); ?>">
                        <img class="footer-logo" src="<?php echo get_template_directory_uri(); ?>/img/AyakaLogo_nobg.png" class="img-fluid" alt="Ayaka logo">
                    </a>
                </div>

                <div class="col-lg-6 mx-auto align-items-center mt-5 footer-items">
                    <p>
                        <a href="<?php echo get_home_url(); ?>" class="text-reset">TOP</a>
                    </p>
                    <p>
                        <a href="<?php echo home_url(); ?>/#about" class="text-reset">ABOUT</a>
                    </p>
                    <p>
                        <a href="<?php echo home_url(); ?>/contact" class="text-reset">CONTACT</a>
                    </p>
                    <p>
                        <a href="<?php echo home_url(); ?>/#portfolio" class="text-reset">PORTFOLIO</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>
<script>

</script>
<?php wp_footer(); ?>

</body>

</html>