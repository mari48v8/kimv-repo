<?php get_header(); ?>



<div id="primary" class="content-area">
	<main id="main" class="site-main clearfix" role="main">
    <?php while ( have_posts() ) : the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-6"><h2>Movie Storyline</h2>
				<?php the_field('wysiwyg_test'); ?></div>
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-4"></div>
                <div class="col-8"></div>
                <div class="col-3"></div>
                <div class="col-3"></div>
                <div class="col-6"></div>
                <div class="col-6"></div>
                <div class="col-6"></div>
                <div class="col-12"></div>
                <div class="col-12"></div>
            </div> <!-- /row -->
        </div> <!-- /container -->
<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
