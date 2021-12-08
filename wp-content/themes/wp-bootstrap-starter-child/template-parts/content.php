<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="gf-post-thumbnail">
		<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
		<img src="<?php echo $image[0]; ?>" alt="storie-img" class="w-100 img-fluid">

		<div class="gf-single-landing-content">
			<div class="container">
				<h1 class="gf-section-title"><?php the_title(); ?></h1>
				<p class="gf-single-author"><?php echo get_author_name(); ?>, <?php echo get_the_date() ?>, <?php echo get_the_time() ?></p>
				<p class="gf-description">India’s foremost wildlife cameraman- director S.Nallamuthu has been filming tigers in Ranthambore for the past ten years.</p>
			</div>
		</div>
	</div>
	<div class="entry-content gf-single-entry-content">
		<div class="container">
			<div class="row">
				<div class="col col-12 col-md-12 col-lg-10 mx-auto">
					<?php the_content(); ?>
				</div>
			</div>
		</div>

		<div class="gf-next-prev-post">
			<?php $prev_post = get_previous_post(); ?>
			<a href="<?php echo  get_permalink($prev_post->ID); ?>">
				<svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M0.500001 10.366C-0.166665 9.98113 -0.166667 9.01888 0.5 8.63398L14.75 0.406735C15.4167 0.0218347 16.25 0.50296 16.25 1.27276L16.25 17.7272C16.25 18.497 15.4167 18.9782 14.75 18.5933L0.500001 10.366Z" fill="#5E5E5E"/>
				</svg>
				<span>Previous</span>
			</a>
			<?php $next_post = get_next_post(); ?>
			<a href="<?php echo  get_permalink($next_post->ID); ?>">
				<span>Next</span>
				<svg width="17" height="19" viewBox="0 0 17 19" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path d="M16.5 8.63397C17.1667 9.01887 17.1667 9.98112 16.5 10.366L2.25 18.5933C1.58333 18.9782 0.749997 18.497 0.749997 17.7272L0.749998 1.27276C0.749998 0.502957 1.58333 0.021832 2.25 0.406732L16.5 8.63397Z" fill="#5E5E5E"/>
				</svg>
			</a>
		</div>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
