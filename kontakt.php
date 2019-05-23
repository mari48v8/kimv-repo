<?php
/*
Template Name: KontaktPage
*/
get_header(); ?>

<style>
.wrap{
	width:100%;
}
#primary {
  width: 102%;
  margin-left:-2%;
  margin-top:3%;
}
.custom-header{
	display:none;
}
.bbg{
	background:#000;
}
.googlemap-responsive{
		overflow: hidden;
    padding-bottom: 123.25%;
    position: relative;
    height: 0;
		margin-top: -3.5%;
		margin-left: 4%;
}
.googlemap-responsive iframe{
    left:0;
    top:0;
    height:100%;
    width:100%;
    position:absolute;
}
</style>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="container">
				<div class="row">
				<div class="col-6 p-unik-3"><?php the_field('add_content'); ?></div>

					<?php 

					$image = get_field('image_one');

					if( !empty($image) ): ?>

						<img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

					<?php endif; ?>

			
					<div class="col-6"><?php the_field('add_content_two'); ?></div>

				<div class="col-6" style="margin-bottom:4%;">
				<img id="contact-img" src="http://localhost/kimv_wp/wp-content/uploads/2019/05/kimv_logo-1.png">
				<?php echo do_shortcode( '[contact-form-7 id="289" title="Contact form 1"]' ); ?></div>
				</div> <!-- /row -->
			</div> <!-- /container -->
		<?php endwhile; ?>

    <?php
      // Get each of our panels and show the post data.
      if ( 0 !== twentyseventeen_panel_count() || is_customize_preview() ): // If we have pages to show.

        /**
         * Filter number of front page sections in Twenty Seventeen.
         *
         * @since Twenty Seventeen 1.0
         *
         * @param int $num_sections Number of front page sections.
         */
        $num_sections = apply_filters( 'twentyseventeen_front_page_sections', 4 );
        global $twentyseventeencounter;

        // Create a setting and control for each of the sections available in the theme.
        for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
          $twentyseventeencounter = $i;
          twentyseventeen_front_page_section( null, $i );
        }

    endif; // The if ( 0 !== twentyseventeen_panel_count() ) ends here. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
