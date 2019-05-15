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
    <section>
    <div class="container">
  <div class="row">
    <div class="col-sm">
      <p>One of three columns
      ioafjaojfjaofja</p>
    </div>
    <div class="col-sm">
    <p>One of three columns
      afafapfa</p>
    </div>
    <div class="col-sm">
    <p>One of three columns</p>
    </div>
  </div>
</div>
</section>

	
	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_footer();
