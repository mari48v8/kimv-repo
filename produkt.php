<?php
/*
Template Name: Produkt
*/
get_header(); ?>

<style>
.site-branding {
  display: none;
}

.home .site-branding {
  display: inherit;
}
</style>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="container">
				<div class="row">  
       
        <!-- Place somewhere in the <body> of your page -->
        <?php
        echo do_shortcode('[smartslider3 slider=2]');
        ?>

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


