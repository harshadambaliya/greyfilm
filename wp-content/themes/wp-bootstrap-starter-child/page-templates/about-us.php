<?php
/*
 * Template Name: About Us Page
 */

get_header(''); ?>

<!-- Landing Section Start -->
<section class="gf-landing-section gf-about-landing-section">
    <div class="gf-landing-img">
        <?php
            $landing_image_one = get_field('landing_image_one');
            $landing_image_one_mobile = get_field('landing_image_one_mobile');
            $landing_image_two = get_field('landing_image_two');
        ?>
        <img src="<?php echo $landing_image_one['url']; ?>" alt="" class="img-fluid w-100 d-none d-md-block">
        <img src="<?php echo $landing_image_one_mobile['url']; ?>" alt="" class="img-fluid w-100 d-block d-md-none">
        <img src="<?php echo $landing_image_two['url']; ?>" alt="" class="img-fluid w-100">
    </div>
    <div class="gf-about-landing-content">
        <div class="container">
            <a href="#" class="btn btn-light">Know More</a>
        </div>
    </div>
    <div class="gf-landing-content">
        <div class="gf-landing-content-top">
            <h2 class="gf-section-title"><?php the_field('landing_title'); ?></h2>
            <p class="gf-section-description"><?php the_field('landing_description'); ?></p>
        </div>

        <div class="gf-section-description">
            <?php the_field('landing_bottom_description'); ?>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- About Team Section Start -->
<section class="gf-about-team-section">
    <div class="container">
        <?php if( have_rows('about') ): ?>
            <?php while( have_rows('about') ): the_row(); 
                $image = get_sub_field('image');
                $image_mobile = get_sub_field('image_mobile');
                ?>
                <div class="row">
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="gf-about-team-img">
                            <img src="<?php echo $image['url']; ?>" alt="subbiah-nallamuthu" class="img-fluid d-none d-md-block">
                            <img src="<?php echo $image_mobile['url']; ?>" alt="subbiah-nallamuthu" class="img-fluid d-block d-md-none">
                        </div>
                    </div>
                    <div class="col col-12 col-md-6 col-lg-6">
                        <div class="gf-about-team-content">
                            <div class="gf-about-team-content__inner">
                                <h3 class="gf-about-team-name"><?php the_sub_field('name'); ?></h3>
                                <p class="gf-about-team-designation"><?php the_sub_field('designation') ?></p>
                                <div class="gf-about-team-details">
                                    <?php the_sub_field('description'); ?>
                                </div>
                                <p class="gf-about-team-details-btn">+ Read More</p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <hr class="gf-nallamuthu-about-line">
    </div>
</section>
<!-- About Team Section End -->

<!-- What our Clients say Section Start -->
<section class="gf-client-say-sectionn">
    <div class="container">
        <h2 class="gf-section-title"><?php the_field('section_title' , 'option'); ?></h2>
    </div>
    <div class="gf-client-say-slider-content">
        <div class="gf-client-say-slider">
            <?php if( have_rows('testimonials' , 'option') ): ?>
                <?php while( have_rows('testimonials' , 'option') ): the_row(); 
                    $image = get_sub_field('image');
                    ?>
                    <div class="gf-client-say-slide">
                        <div class="gf-client-say-card">
                            <div class="gf-client-say-card-img">
                                <img src="<?php echo $image['url']; ?>" alt="" class="img-fluid">
                            </div>
                            <h3 class="gf-client-say-title"><?php the_sub_field('name'); ?></h3>
                            <p class="gf-client-say-text"><?php the_sub_field('description'); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- What our Clients say Section End -->

<!-- Natural History Section Start -->
<?php
    $history_image = get_field('history_image' , 'option');
?>
<section class="gf-natural-history-section" style="background-image: url(<?php echo $history_image['url']; ?>);">
    <div class="container">
        <div class="row">
            <div class="col col-6 col-md-6 col-lg-3">
                <div class="gf-natural-history-logo">
                    <?php
                        $history_logo = get_field('history_logo' , 'option');
                    ?>
                    <img src="<?php echo $history_logo['url']; ?>" alt="" class="img-fluid">
                </div>
            </div>
            <div class="col col-6 col-md-6 col-lg-6">
                <div class="gf-natural-history-content">
                    <h2 class="gf-section-title"><?php the_field('history_title' , 'option'); ?></h2>
                    <p class="gf-section-description"><?php the_field('history_label' , 'option'); ?></p>
                </div>
            </div>
            <div class="col col-12 col-md-6 col-lg-3">
                <div class="gf-natural-history-content">
                    <p class="gf-section-description"><?php the_field('history_description' , 'option'); ?></p>
                    <?php
                        $history_button = get_field('history_button' , 'option');
                    ?>
                    <a href="<?php echo $history_button['url']; ?>" class="btn btn-danger"><?php echo $history_button['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Natural History Section End -->

<?php get_footer(''); ?>
