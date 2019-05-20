<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>


<div id="primary" class="content-area">
	<main id="main" class="site-main clearfix" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-6">
              <?php the_field('add_content'); ?></div>
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-4"></div>
                <div class="col-8"> <?php the_field('add_content_two'); ?></div>
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-6"><?php the_field('add_content_three'); ?></div>
                <div class="col-6"><?php the_field('add_content_four'); ?></div>
                <div class="col-6"></div>
                <div class="col-12"></div>
                <div class="col-12"></div>
            </div> <!-- /row -->
        </div> <!-- /container -->
        <?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
