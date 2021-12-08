<?php
/*
 * Template Name: Stories Page
 */

get_header(''); ?>


<!-- Story Section Start -->
<section class="gf-story-section">
    <div class="container">
        <div class="row justify-content-center">
            <?php
                $args = array(  
                    'post_type' => 'story',
                    'post_status' => 'publish',
                    'posts_per_page' => -1, 
                    'orderby' => 'title', 
                    'order' => 'DESC',
                );
            
                $loop = new WP_Query( $args ); 
                    
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                    <div class="col col-12 col-md-6 col-lg-4">
                        <div class="gf-story-card">
                            <div class="gf-story-card-img">

                                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
                                <img src="<?php echo $image[0]; ?>" alt="storie-img" class="w-100 img-fluid">
                            </div>
                            <div class="gf-story-card-body">
                                <h3 class="gf-story-card-title"><?php the_title(); ?></h3>
                                <div class="gf-story-card-description"><?php the_excerpt(); ?></div>
                            </div>
                            <div class="gf-story-card-footer text-center">
                                <a href="<?php echo get_permalink();  ?>" class="btn btn-danger">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<!-- Story Section End -->

<!-- Our Serivces Section Start -->
<section class="gf-serivce-domain-section gf-our-serivces-section">
    <div class="container">
        <div class="gf-section-heading text-center">
            <h2 class="gf-section-title"><?php the_field('serivces_title'); ?></h2>
            <p class="gf-section-description"><?php the_field('serivces_description'); ?></p>
            <?php $read_more_button = get_field('read_more_button') ?>
            <a href="<?php echo $read_more_button['url']; ?>" class="btn btn-danger"><?php echo $read_more_button['title']; ?></a>
        </div>
    </div>
</section>
<!-- Our Serivces Section End -->

<?php get_footer(''); ?>
