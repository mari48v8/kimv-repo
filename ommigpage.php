<?php
/*
Template Name: OmMigPage
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

</style>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="container">
				<div class="row">
				<?php 

				$image = get_field('image_one');

				if( !empty($image) ): ?>

					<img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
				<div class="col-6 p-unik-3"><?php the_field('add_content'); ?></div>
				<div class="col-6 p-unik-3 bbg"><?php the_field('add_content_two'); ?></div>
				<?php 

				$image = get_field('image_two');

				if( !empty($image) ): ?>

					<img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
				<?php 

				$image = get_field('image_three');

				if( !empty($image) ): ?>

					<img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

				<?php endif; ?>
				<div class="col-6 p-unik-3"><?php the_field('add_content_three'); ?></div>
				<div class="col-6"></div>
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
