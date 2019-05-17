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

<script>

$(function()
{
    window.onorientationchange = OrientationChanged;
    window.setTimeout(OrientationChanged, 0);
}
function OrientationChanged(e)
{
    $('body').css('-webkit-transform', window.orientation % 180 == 0 ? '' : 'rotate(-90deg)');
}

</script>


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
<p>hej mor dette er et test side for at vise sass</p>
    

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
