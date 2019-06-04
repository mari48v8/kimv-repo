<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet"> 

<?php wp_head(); ?>

<script>
! function (a) {
    "use strict";
    "function" == typeof define && define.amd ? define(["jquery"], a) : "object" == typeof exports ? module.exports = a(require("jquery")) : a(jQuery)
}(function (a) {
    "use strict";

    function b(a, b) {
        for (var c, d = a.split(";"), e = b.split(" "), f = "", g = 0, h = d.length; h > g; g++) {
            c = !0;
            for (var i = 0, j = e.length; j > i; i++)("" === d[g] || -1 !== d[g].indexOf(e[i])) && (c = !1);
            c && (f += d[g] + "; ")
        }
        return f
    }
    a.fn.bigSlide = function (c) {
        var d = this,
            e = a.extend({
                menu: "#menu",
                push: ".push",
                shrink: ".shrink",
                hiddenThin: ".hiddenThin",
                side: "left",
                menuWidth: "15.625em",
                semiOpenMenuWidth: "4em",
                speed: "300",
                state: "closed",
                activeBtn: "active",
                easyClose: !1,
                saveState: !1,
                semiOpenStatus: !1,
                semiOpenScreenWidth: 480,
                beforeOpen: function () {},
                afterOpen: function () {},
                beforeClose: function () {},
                afterClose: function () {}
            }, c),
            f = "transition -o-transition -ms-transition -moz-transitions webkit-transition " + e.side,
            g = {
                menuCSSDictionary: f + " position top bottom height width",
                pushCSSDictionary: f,
                state: e.state
            },
            h = {
                init: function () {
                    i.init()
                },
                _destroy: function () {
                    return i._destroy(), delete d.bigSlideAPI, d
                },
                changeState: function () {
                    "closed" === g.state ? g.state = "open" : g.state = "closed"
                },
                setState: function (a) {
                    g.state = a
                },
                getState: function () {
                    return g.state
                }
            },
            i = {
                init: function () {
                    this.$menu = a(e.menu), this.$push = a(e.push), this.$shrink = a(e.shrink), this.$hiddenThin = a(e.hiddenThin), this.width = e.menuWidth, this.semiOpenMenuWidth = e.semiOpenMenuWidth;
                    var b = {
                            position: "fixed",
                            top: "0",
                            bottom: "0",
                            height: "100%"
                        },
                        c = {
                            "-webkit-transition": e.side + " " + e.speed + "ms ease",
                            "-moz-transition": e.side + " " + e.speed + "ms ease",
                            "-ms-transition": e.side + " " + e.speed + "ms ease",
                            "-o-transition": e.side + " " + e.speed + "ms ease",
                            transition: e.side + " " + e.speed + "ms ease"
                        },
                        f = {
                            "-webkit-transition": "all " + e.speed + "ms ease",
                            "-moz-transition": "all " + e.speed + "ms ease",
                            "-ms-transition": "all " + e.speed + "ms ease",
                            "-o-transition": "all " + e.speed + "ms ease",
                            transition: "all " + e.speed + "ms ease"
                        },
                        g = !1;
                    b[e.side] = "-" + e.menuWidth, b.width = e.menuWidth;
                    var j = "closed";
                    e.saveState ? (j = localStorage.getItem("bigSlide-savedState"), j || (j = e.state)) : j = e.state, h.setState(j), this.$menu.css(b);
                    var k = a(window).width();
                    "closed" === j ? e.semiOpenStatus && k > e.semiOpenScreenWidth ? (this.$hiddenThin.hide(), this.$menu.css(e.side, "0"), this.$menu.css("width", this.semiOpenMenuWidth), this.$push.css(e.side, this.semiOpenMenuWidth), this.$shrink.css({
                        width: "calc(100% - " + this.semiOpenMenuWidth + ")"
                    }), this.$menu.addClass("semiOpen")) : this.$push.css(e.side, "0") : "open" === j && (this.$menu.css(e.side, "0"), this.$push.css(e.side, this.width), this.$shrink.css({
                        width: "calc(100% - " + this.width + ")"
                    }), d.addClass(e.activeBtn));
                    var l = this;
                    d.on("click.bigSlide touchstart.bigSlide", function (a) {
                        g || (l.$menu.css(c), l.$push.css(c), l.$shrink.css(f), g = !0), a.preventDefault(), "open" === h.getState() ? i.toggleClose() : i.toggleOpen()
                    }), e.semiOpenStatus && a(window).resize(function () {
                        var b = a(window).width();
                        b > e.semiOpenScreenWidth ? "closed" === h.getState() && (l.$hiddenThin.hide(), l.$menu.css({
                            width: l.semiOpenMenuWidth
                        }), l.$menu.css(e.side, "0"), l.$push.css(e.side, l.semiOpenMenuWidth), l.$shrink.css({
                            width: "calc(100% - " + l.semiOpenMenuWidth + ")"
                        }), l.$menu.addClass("semiOpen")) : (l.$menu.removeClass("semiOpen"), "closed" === h.getState() && (l.$menu.css(e.side, "-" + l.width).css({
                            width: l.width
                        }), l.$push.css(e.side, "0"), l.$shrink.css("width", "100%"), l.$hiddenThin.show()))
                    }), e.easyClose && a(document).on("click.bigSlide", function (b) {
                        a(b.target).parents().addBack().is(d) || a(b.target).closest(e.menu).length || "open" !== h.getState() || i.toggleClose()
                    })
                },
                _destroy: function () {
                    this.$menu.each(function () {
                        var c = a(this);
                        c.attr("style", b(c.attr("style"), g.menuCSSDictionary).trim())
                    }), this.$push.each(function () {
                        var c = a(this);
                        c.attr("style", b(c.attr("style"), g.pushCSSDictionary).trim())
                    }), this.$shrink.each(function () {
                        var c = a(this);
                        c.attr("style", b(c.attr("style"), g.pushCSSDictionary).trim())
                    }), d.removeClass(e.activeBtn).off("click.bigSlide touchstart.bigSlide"), this.$menu = null, this.$push = null, this.$shrink = null, localStorage.removeItem("bigSlide-savedState")
                },
                toggleOpen: function () {
                    e.beforeOpen(), h.changeState(), i.applyOpenStyles(), d.addClass(e.activeBtn), e.afterOpen(), e.saveState && localStorage.setItem("bigSlide-savedState", "open")
                },
                toggleClose: function () {
                    e.beforeClose(), h.changeState(), i.applyClosedStyles(), d.removeClass(e.activeBtn), e.afterClose(), e.saveState && localStorage.setItem("bigSlide-savedState", "closed")
                },
                applyOpenStyles: function () {
                    var b = a(window).width();
                    e.semiOpenStatus && b > e.semiOpenScreenWidth ? (this.$hiddenThin.show(), this.$menu.animate({
                        width: this.width
                    }, {
                        duration: Math.abs(e.speed - 100),
                        easing: "linear"
                    }), this.$push.css(e.side, this.width), this.$shrink.css({
                        width: "calc(100% - " + this.width + ")"
                    }), this.$menu.removeClass("semiOpen")) : (this.$menu.css(e.side, "0"), this.$push.css(e.side, this.width), this.$shrink.css({
                        width: "calc(100% - " + this.width + ")"
                    }))
                },
                applyClosedStyles: function () {
                    var b = a(window).width();
                    e.semiOpenStatus && b > e.semiOpenScreenWidth ? (this.$hiddenThin.hide(), this.$menu.animate({
                        width: this.semiOpenMenuWidth
                    }, {
                        duration: Math.abs(e.speed - 100),
                        easing: "linear"
                    }), this.$push.css(e.side, this.semiOpenMenuWidth), this.$shrink.css({
                        width: "calc(100% - " + this.semiOpenMenuWidth + ")"
                    }), this.$menu.addClass("semiOpen")) : (this.$menu.css(e.side, "-" + this.width), this.$push.css(e.side, "0"), this.$shrink.css("width", "100%"))
                }
            };
        return h.init(), this.bigSlideAPI = {
            settings: e,
            model: g,
            controller: h,
            view: i,
            destroy: h._destroy
        }, this
    }
});

</script>


<script>
// When the user scrolls down 80px from the top of the document, resize the navbar's padding and the logo's font size
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
    document.getElementsById("primary-menu").style.padding = "30px 10px";
    document.getElementById("logo").style.fontSize = "25px";
  } else {
    document.getElementsById("primary-menu").style.padding = "80px 10px";
    document.getElementById("logo").style.fontSize = "35px";
  }
}
</script>


</head>

<!--- Site Logo Section  -->



<body <?php body_class(); ?>><div id="page" class="hfeed site push">.
<?php wp_body_open(); ?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyseventeen' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">

				<?php if (get_theme_mod('site-logo-callout-display') == "Yes") { ?>
				<div id="mainlogo">
				<div class="mainlogo-callout-image">
				<img class="section-images" src="<?php echo wp_get_attachment_url(get_theme_mod('site-logo-callout-image'))?>">
				</div>
				</div>
				<?php } ?>
		
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu', 'menu_id' => 'primary-menu' ) ); ?>
				<img id="logo" src="http://localhost/kimv_wp/wp-content/uploads/2019/05/kimv_logo-1.png">
				<a href="#responsive-menu" class="menu-link">&#9776;</a>
				
				<img id="instagram" src="http://localhost/kimv_wp/wp-content/uploads/2019/05/instagram.jpg">
				<img id="telefon" src="http://localhost/kimv_wp/wp-content/uploads/2019/05/tlf.png">
				<img id="teletext" src="http://localhost/kimv_wp/wp-content/uploads/2019/05/teletxt.png">
				
            </nav>
			

	</header><!-- #masthead -->

	<?php

	/*
	 * If a regular post or page, and not the front page, show the featured image.
	 * Using get_queried_object_id() here since the $post global may not be set before a call to the_post().
	 */
	if ( ( is_single() || ( is_page() && ! twentyseventeen_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) ) :
		echo '<div class="single-featured-image-header">';
		echo get_the_post_thumbnail( get_queried_object_id(), 'twentyseventeen-featured-image' );
		echo '</div><!-- .single-featured-image-header -->';
	endif;
	?>

	<div class="site-content-contain">
		<div id="content" class="site-content">
