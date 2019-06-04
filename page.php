<?php
/*
Template Name: Produkt Page
*/

get_header(); ?>

<style>

.wrap{
	width:100%;
}

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
		  
		<?php if (get_theme_mod('tawy-hiw-callout-display') == "Yes") { ?>
			<div class="hiw-callout-image">
			<img class="section-images" src="<?php echo wp_get_attachment_url(get_theme_mod('tawy-hiw-callout-image'))?>">
			</div>
		<?php } ?>

			<div id="gallery-wrapper">
						<?php
						if ( function_exists( 'envira_gallery' ) ) { envira_gallery( '331' ); }
						?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
