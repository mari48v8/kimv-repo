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
                <div class="col-6 p4"><?php the_field('add_content'); ?></div>
                <?php 

                $image = get_field('image_one');

                if( !empty($image) ): ?>

                    <img class="col-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_two');

                if( !empty($image) ): ?>

                    <img class="col-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_three');

                if( !empty($image) ): ?>

                    <img class="col-4" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_seven');

                if( !empty($image) ): ?>

                    <img class="r1" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <div class="col-8 p-unik"> <?php the_field('add_content_two'); ?></div>
                <?php 

                $image = get_field('image_four');

                if( !empty($image) ): ?>

                    <img class="col-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_five');

                if( !empty($image) ): ?>

                    <img class="col-3" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <div class="col-6 p4"><?php the_field('add_content_three'); ?></div>
                <div class="col-6 p-unik-2"><?php the_field('add_content_four'); ?></div>
                <?php 

                $image = get_field('image_six');

                if( !empty($image) ): ?>

                    <img class="col-6" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <div class="add">
               <?php 

                $image = get_field('image_add_one');

                if( !empty($image) ): ?>

                    <img class="col-2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_add_two');

                if( !empty($image) ): ?>

                    <img class="col-2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_add_three');

                if( !empty($image) ): ?>

                    <img class="col-2 " src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_add_four');

                if( !empty($image) ): ?>

                    <img class="col-2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                <?php 

                $image = get_field('image_add_five');

                if( !empty($image) ): ?>

                    <img class="col-2" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                <?php endif; ?>
                </div>
                <div class="col-12"></div>
                
            </div> <!-- /row -->
        </div> <!-- /container -->
        <?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
