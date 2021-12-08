<?php

/*
 * Template Name: Corporate Page
 */

get_header('');
 ?>

<!-- Landing Section Start -->

<?php
    $landing_image = get_field('landing_image');
    $landing_image_mobile = get_field('landing_image_mob');
    $section_link = get_field('section_link');
?>
<section class="gf-landing-section gf-work-landing-section">
    <div class="gf-landing-section-content-area">
        <img src="<?php echo $landing_image['url']; ?>" alt="landing-img" class="landing-img w-100 d-none d-md-block">
        <img src="<?php echo $landing_image_mobile['url']; ?>" alt="landing-img" class="landing-img w-100 d-block d-md-none">
        <div class="gf-landing-section-content-area__inner">
            <div class="container">
                <div class="gf-landing-section-heading">
                    <div class="gf-landing-section-heading__inner">
                        <h1 class="gf-section-title"><?php the_field('section_title'); ?></h1>
                        <p class="gf-section-description"><?php the_field('section_description'); ?></p>
                    </div>
                    <?php 
                        $our_service_link = get_field('our_service_link'); 
                        $contact_us_link = get_field('contact_us_link'); 
                    ?>
                    <div class="landing-link-content">
                        <a href="<?php echo $our_service_link['url']; ?>" class="gf-landing-link"><?php echo $our_service_link['title']; ?> <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/11/arrow.png" alt=""></a>
                        <a href="<?php echo $contact_us_link['url']; ?>" class="gf-landing-link"><?php echo $contact_us_link['title']; ?> <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/11/arrow.png" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="gf-works-menu">
                <ul class="gf-work-menu-list">
                    <?php
                        $work_wildlife_link = get_field('work_wildlife_link', 'option');
                        $work_documentaries_link = get_field('work_documentaries_link', 'option');
                        $work_television_shows_link = get_field('work_television_shows_link', 'option');
                        $work_feature_films_link = get_field('work_feature_films_link', 'option');
                        $work_corporate_films_link = get_field('work_corporate_films_link', 'option');
                        $work_adventure_travel_link = get_field('work_adventure_travel_link', 'option');
                    ?>
                    <li class="gf-work-menu-item">
                        <a href="#" class="gf-work-menu-link">All Work</a>
                    </li>
                    <li class="gf-work-menu-item ">
                        <a href="<?php echo $work_wildlife_link['url']; ?>" class="gf-work-menu-link"><?php echo $work_wildlife_link['title']; ?></a>
                    </li>
                    <li class="gf-work-menu-item">
                        <a href="<?php echo $work_documentaries_link['url']; ?>" class="gf-work-menu-link"><?php echo $work_documentaries_link['title']; ?></a>
                    </li>
                    <li class="gf-work-menu-item ">
                        <a href="<?php echo $work_television_shows_link['url']; ?>" class="gf-work-menu-link"><?php echo $work_television_shows_link['title']; ?></a>
                    </li>
                    <li class="gf-work-menu-item ">
                        <a href="<?php echo $work_feature_films_link['url']; ?>" class="gf-work-menu-link"><?php echo $work_feature_films_link['title']; ?></a>
                    </li>
                    <li class="gf-work-menu-item active">
                        <a href="<?php echo $work_corporate_films_link['url']; ?>" class="gf-work-menu-link"><?php echo $work_corporate_films_link['title']; ?></a>
                    </li>
                    <li class="gf-work-menu-item ">
                        <a href="<?php echo $work_adventure_travel_link['url']; ?>" class="gf-work-menu-link"><?php echo $work_adventure_travel_link['title']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- Landing Section End -->

<!-- Our Work Section Start -->
<section class="gf-works-section">
    <div class="container">
        <div class="gf-works-content">
        <?php
                $args = array(  
                    'post_type' => 'work',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                    'orderby' => 'title', 
                    'order' => 'DESC',
                    'cat' => '1',
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="gf-works-content__inner">
                        <div class="row">
                            <div class="col col-12 col-md-6 col-lg-6">
                                <div class="gf-works-img">
                                    <?php $works_image = get_field('works_image'); ?>
                                    <img src="<?php echo $works_image['url']; ?>" alt="<?php echo $works_image['title']; ?>" class="img-fluid">
                                </div>
                            </div>
                            <div class="col col-12 col-md-6 col-lg-6">
                                <div class="gf-works-details">
                                    <div class="gf-works-detail-heading">
                                        <span class="gf-works-since"><?php the_field('work_since') ?></span>
                                        <button type="button" class="btn btn-small btn-danger gf-works-video-modal-btn" data-toggle="modal" data-target="#worksVideoModal">Watch Trailer</button>
                                    </div>
                                    <input type="hidden" class="gf_works_tailer_video_id" value="<?php the_field('work_video_id') ?>">
                                    <h3 class="gf-works-title"><?php the_title() ?></h3>
                                    <label class="gf-works-label"><?php the_field('works_label') ?></label>
                                    <div class="gf-works-description">
                                        <?php the_field('work_description') ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if( have_rows('accolades') ): ?>
                            <div class="gf-works-accolades">
                                <h4 class="gf-works-accolades-title">Accolades</h4>
                                <div class="gf-works-accolades__inner">
                                    <?php while( have_rows('accolades') ): the_row(); 
                                            $image = get_sub_field('image');
                                        ?>
                                        <div class="gf-works-accolades-card">
                                            <div class="gf-works-accolades-img">
                                                <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/11/accolades.png" alt="accolades Star" class="img-fluid">
                                            </div>
                                            <div class="gf-works-accolades-description">
                                                <?php the_sub_field('accolades_description'); ?>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- Our Work Section Start -->

<!-- Our Services Section Start -->
<section class="gf-our-service-section">
    <div class="gf-our-service-heading">
        <h2 class="gf-section-title text-center">Other Works</h2>
    </div>
    <div class="gf-our-service-slider-content">
        <div class="gf-our-service-slider">
            <?php
                $args = array(  
                    'post_type' => 'work',
                    'post_status' => 'publish',
                    'posts_per_page' => 5, 
                    'orderby' => 'title', 
                    'order' => 'DESC',
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    
                    <div class="gf-our-service-slide">
                        <div class="gf-our-service-card">
                            
                            <?php $works_image = get_field('works_image'); ?>
                            <img src="<?php echo $works_image['url']; ?>" alt="<?php echo $works_image['title']; ?>" class="img-fluid">

                            <a href="#" class="gf-our-service-card-title"><?php the_title() ?></a>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- Our Services Section End -->

<!-- Modal Content Start -->
<div class="modal fade works-video-modal" id="worksVideoModal" tabindex="-1" role="dialog" aria-labelledby="worksVideoModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title mt-0" id="exampleModalLongTitle">Trailer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="works-video-container">
            <iframe src="https://player.vimeo.com/video/32826978" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Modal Content End -->
<?php get_footer(''); ?>