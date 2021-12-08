<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer  class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col col-12 col-md-6 col-lg-3">
                    <div class="gf-footer-content">
                        <h3 class="gf-footer-title">Grey Films India <br/>Pvt. Ltd.</h3>
                        <div class="gf-social-media">
                            <label>Follow us</label>
                            <ul class="gf-social-media-list">
                                <li class="gf-social-media-link">
                                    <a href="#" class="gf-social-media-link">
                                        <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2021/11/instagram-icon.png" alt="" class="img-fluid">
                                    </a>
                                </li>
                                <li class="gf-social-media-link">
                                    <a href="#" class="gf-social-media-link">
                                        <img src="<?php echo SITE_URL(); ?>/wp-content/uploads/2021/11/facebook-icon.png" alt="" class="img-fluid">
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="gf-footer-menu">
                            <h3 class="gf-footer-menu-title">About us</h3>
                            <ul class="gf-footer-menu-list">
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Who are we?</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">What do we do?</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Nalla S</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-12 col-md-6 col-lg-3">
                    <div class="gf-footer-content">
                        <div class="gf-footer-menu">
                            <h3 class="gf-footer-menu-title">Services</h3>
                            <ul class="gf-footer-menu-list">
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Film Production</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Television Programming & Production</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Co-productions</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Cinematography on HD, Film & Video</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Research</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Line Production</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Location Scouting</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Concepts & Content</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Technical Support</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Post Production & Allied Services</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Stock Footage & Images</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-6 col-lg-3">
                    <div class="gf-footer-content">
                        <div class="gf-footer-menu">
                            <h3 class="gf-footer-menu-title">Work</h3>
                            <ul class="gf-footer-menu-list">
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Wildlife & Environment</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Documentaries</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Television Shows</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Feature Films</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Corporate Films</a>
                                </li>
                                <li class="gf-footer-menu-item">
                                    <a href="#" class="gf-footer-menu-link">Adventure & Travel</a>
                                </li>
                                <li class="gf-footer-menu-item gf-footer-menu-terms-item">
                                    <a href="#" class="gf-footer-menu-link">Terms of Service</a>
                                </li>
                            </ul>

                            <h3 class="gf-footer-menu-title">Collaborations</h3>
                            <ul class="gf-footer-menu-list">
                                <li class="gf-footer-menu-item">
                                    <span class="gf-footer-menu-link">Nallas Ark Foundation</span>
                                    </li>
                                <li class="gf-footer-menu-item">
                                    <span class="gf-footer-menu-link">Natural History Unit India</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col col-6 col-md-6 col-lg-3">
                    <div class="gf-footer-content">
                        <div class="gf-footer-menu">
                            <h3 class="gf-footer-menu-title">Office Address</h3>
                            <p class="gf-footer-menu-description">E 402, Central Park South,<br/> Elcot Avenue,<br/> Sholinganallur,<br/> Chennai - 600119, India </p>
                        </div>
                        <div class="gf-footer-menu">
                            <h3 class="gf-footer-menu-title">Call:</h3>
                            <p class="gf-footer-menu-description">
                                <a href="tel:04443563993">044 4356 3993 </a>
                                <a href="tel:+919810001716">+91 98100 01716</a>
                            </p>
                        </div>
                        <div class="gf-footer-menu">
                            <h3 class="gf-footer-menu-title">Email</h3>
                            <p class="gf-footer-menu-description">
                                <a href="mailto:nalla@greyfilms.com">nalla@greyfilms.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <p class="gf-site-info">Regd. Off: E-390, Pocket 11, DDA Flats, Jasola, New Delhi – 110025, India.</p>
        </div>
	</footer><!-- #colophon -->
<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>