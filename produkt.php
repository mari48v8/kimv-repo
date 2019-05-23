<?php
/*
Template Name: Produkt
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

@keyframes slidy {
0% { left: 0%; }
20% { left: 0%; }
25% { left: -100%; }
45% { left: -100%; }
50% { left: -200%; }
70% { left: -200%; }
75% { left: -300%; }
95% { left: -300%; }
100% { left: -400%; }
}

body { margin: 0; } 
div#slider { overflow: hidden; }
div#slider figure img { width: 20%; float: left; }
div#slider figure { 
  position: relative;
  width: 500%;
  margin: 0;
  left: 0;
  text-align: left;
  font-size: 0;
  animation: 30s slidy infinite; 
}

</style>


<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="container">
				<div class="row">  
       
        <!-- Place somewhere in the <body> of your page -->

        <div id="slider">
      <div class="slider-container">
        <!-- Start Slides -->
          <div id="slides">
            <div class="slide">
            <?php 

            $image = get_field('slider_1');

            if( !empty($image) ): ?>

              <img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
            </div>
              <div class="slide">
              <?php 

              $image = get_field('slider_1');

              if( !empty($image) ): ?>

                <img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <?php endif; ?>
              </div>
                <div class="slide">
                <?php 

            $image = get_field('slider_1');

            if( !empty($image) ): ?>

              <img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>
                </div>
                    </div> 
                </div>   
          </div>   

      

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


