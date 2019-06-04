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
    
     <!-- Place somewhere in the <body> of your page -->
     <?php echo do_shortcode('[metaslider id="471"]'); ?>

			
			<div class="produkt-tainer">
				<div class="row">
        <div class="col-6 gphotos">
            <?php 

            $image = get_field('image_one');

            if( !empty($image) ): ?>

            <img class="prg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
              
            <div class="pg"><?php the_field('add_content'); ?></div>

            <?php endif; ?>

            <button onclick="window.location.href='http://localhost/kimv_wp/ringe?preview_id=329&preview_nonce=1a2f6f0bf1&_thumbnail_id=-1&preview=true'">Se Vielsringe</button>

        </div>

        <div class="col-6 gphotos">
            <?php 

            $image = get_field('image_two');

            if( !empty($image) ): ?>

              <img class="prg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

              <div class="pg"><?php the_field('add_content_two'); ?></div>

            <?php endif; ?>

            <button onclick="window.location.href='http://localhost/kimv_wp/ringe?preview_id=329&preview_nonce=1a2f6f0bf1&_thumbnail_id=-1&preview=true'">Se Ringe</button>

        </div>

        <div class="col-6 gphotos">
            <?php 

            $image = get_field('image_three');

            if( !empty($image) ): ?>

            <img class="prg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
            
            <div class="pg"><?php the_field('add_content_three'); ?></div>

            <?php endif; ?>

            <button onclick="window.location.href='http://localhost/kimv_wp/ringe?preview_id=329&preview_nonce=1a2f6f0bf1&_thumbnail_id=-1&preview=true'">Se Frierringe</button>

        </div>

        <div class="col-6 gphotos">
            <?php 

            $image = get_field('image_four');

            if( !empty($image) ): ?>

            <img class="prg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <div class="pg"><?php the_field('add_content_four'); ?></div>

            <?php endif; ?>

            <button onclick="window.location.href='http://localhost/kimv_wp/ringe?preview_id=329&preview_nonce=1a2f6f0bf1&_thumbnail_id=-1&preview=true'">Se Halskæder</button>

        </div>

        <div class="col-6 gphotos">
            <?php 

            $image = get_field('image_five');

            if( !empty($image) ): ?>

              <img class="prg" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

            <?php endif; ?>

            <button onclick="window.location.href='http://localhost/kimv_wp/ringe?preview_id=329&preview_nonce=1a2f6f0bf1&_thumbnail_id=-1&preview=true'">Se Accessories
</button>

        </div>

        <?php echo do_shortcode("[instagram-feed]"); ?>
       
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


