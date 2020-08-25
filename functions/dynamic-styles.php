<?php
/* ------------------------------------------------------------------------- *
 *  Dynamic styles
/* ------------------------------------------------------------------------- */

/*  Convert hexadecimal to rgb
/* ------------------------------------ */
if ( ! function_exists( 'writeup_hex2rgb' ) ) {

	function writeup_hex2rgb( $hex, $array=false ) {
		$hex = str_replace("#", "", $hex);

		if ( strlen($hex) == 3 ) {
			$r = hexdec(substr($hex,0,1).substr($hex,0,1));
			$g = hexdec(substr($hex,1,1).substr($hex,1,1));
			$b = hexdec(substr($hex,2,1).substr($hex,2,1));
		} else {
			$r = hexdec(substr($hex,0,2));
			$g = hexdec(substr($hex,2,2));
			$b = hexdec(substr($hex,4,2));
		}

		$rgb = array( $r, $g, $b );
		if ( !$array ) { $rgb = implode(",", $rgb); }
		return $rgb;
	}
	
}	


/*  Google fonts
/* ------------------------------------ */
if ( ! function_exists( 'writeup_enqueue_google_fonts' ) ) {

	function writeup_enqueue_google_fonts () {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { wp_enqueue_style( 'titillium-web-ext', '//fonts.googleapis.com/css?family=Titillium+Web:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }		
			if ( get_theme_mod( 'font' ) == 'droid-serif' )	{ wp_enqueue_style( 'droid-serif', '//fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700' ); }				
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' )	{ wp_enqueue_style( 'source-sans-pro', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,300italic,300,400italic,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'lato' ) { wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700' ); }
			if ( get_theme_mod( 'font' ) == 'raleway' )	{ wp_enqueue_style( 'raleway', '//fonts.googleapis.com/css?family=Raleway:400,300,600' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu' ) { wp_enqueue_style( 'ubuntu', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) { wp_enqueue_style( 'ubuntu-cyr', '//fonts.googleapis.com/css?family=Ubuntu:400,400italic,300italic,300,700&subset=latin,cyrillic-ext' ); }
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) ) { wp_enqueue_style( 'roboto', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-cyr' ) { wp_enqueue_style( 'roboto-cyr', '//fonts.googleapis.com/css?family=Roboto:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed' ) { wp_enqueue_style( 'roboto-condensed', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) { wp_enqueue_style( 'roboto-condensed-cyr', '//fonts.googleapis.com/css?family=Roboto+Condensed:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab' ) { wp_enqueue_style( 'roboto-slab', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) { wp_enqueue_style( 'roboto-slab-cyr', '//fonts.googleapis.com/css?family=Roboto+Slab:400,300italic,300,400italic,700&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display' ) { wp_enqueue_style( 'playfair-display', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) { wp_enqueue_style( 'playfair-display-cyr', '//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700&subset=latin,cyrillic' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans' ) { wp_enqueue_style( 'open-sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) { wp_enqueue_style( 'open-sans-cyr', '//fonts.googleapis.com/css?family=Open+Sans:400,400italic,300italic,300,600&subset=latin,cyrillic-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif' ) { wp_enqueue_style( 'pt-serif', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,latin-ext' ); }
			if ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) { wp_enqueue_style( 'pt-serif-cyr', '//fonts.googleapis.com/css?family=PT+Serif:400,700,400italic&subset=latin,cyrillic-ext' ); }
		}
	}	
	
}
add_action( 'wp_enqueue_scripts', 'writeup_enqueue_google_fonts' ); 


/*  Dynamic css output
/* ------------------------------------ */
if ( ! function_exists( 'writeup_dynamic_css' ) ) {

	function writeup_dynamic_css() {
		if ( get_theme_mod('dynamic-styles', 'on') == 'on' ) {
		
			// rgb values
			$color_1 = get_theme_mod('color-1');
			$color_1_rgb = writeup_hex2rgb($color_1);
			
			// start output
			$styles = '';	
			
			// google fonts
			if ( get_theme_mod( 'font' ) == 'titillium-web-ext' ) { $styles .= 'body { font-family: "Titillium Web", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'droid-serif' ) { $styles .= 'body { font-family: "Droid Serif", serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'source-sans-pro' ) { $styles .= 'body { font-family: "Source Sans Pro", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'lato' ) { $styles .= 'body { font-family: "Lato", Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'raleway' ) { $styles .= 'body { font-family: "Raleway", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'ubuntu' ) || ( get_theme_mod( 'font' ) == 'ubuntu-cyr' ) ) { $styles .= 'body { font-family: "Ubuntu", Arial, sans-serif; }'."\n"; }	
			/*default*/ if ( ( get_theme_mod( 'font' ) == '' ) || ( get_theme_mod( 'font' ) == 'roboto' ) || ( get_theme_mod( 'font' ) == 'roboto-cyr' ) ) { $styles .= 'body { font-family: "Roboto", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-condensed' ) || ( get_theme_mod( 'font' ) == 'roboto-condensed-cyr' ) ) { $styles .= 'body { font-family: "Roboto Condensed", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'roboto-slab' ) || ( get_theme_mod( 'font' ) == 'roboto-slab-cyr' ) ) { $styles .= 'body { font-family: "Roboto Slab", Arial, sans-serif; }'."\n"; }			
			if ( ( get_theme_mod( 'font' ) == 'playfair-display' ) || ( get_theme_mod( 'font' ) == 'playfair-display-cyr' ) ) { $styles .= 'body { font-family: "Playfair Display", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'open-sans' ) || ( get_theme_mod( 'font' ) == 'open-sans-cyr' ) )	{ $styles .= 'body { font-family: "Open Sans", Arial, sans-serif; }'."\n"; }
			if ( ( get_theme_mod( 'font' ) == 'pt-serif' ) || ( get_theme_mod( 'font' ) == 'pt-serif-cyr' ) ) { $styles .= 'body { font-family: "PT Serif", serif; }'."\n"; }	
			if ( get_theme_mod( 'font' ) == 'arial' ) { $styles .= 'body { font-family: Arial, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'georgia' ) { $styles .= 'body { font-family: Georgia, serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'verdana' ) { $styles .= 'body { font-family: Verdana, sans-serif; }'."\n"; }
			if ( get_theme_mod( 'font' ) == 'tahoma' ) { $styles .= 'body { font-family: Tahoma, sans-serif; }'."\n"; }
			
			// container width
			if ( get_theme_mod('container-width') != '1230' ) {			
				if ( get_theme_mod( 'boxed' ) ) { 
					$styles .= '.boxed #wrapper, .container { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
				else {
					$styles .= '.container { max-width: '.esc_attr( get_theme_mod('container-width') ).'px; }'."\n";
				}
			}
			// sidebar padding
			if ( get_theme_mod('sidebar-padding') != '30' ) {
				$styles .= '.sidebar .widget { padding-left: '.esc_attr( get_theme_mod('sidebar-padding') ).'px; padding-right: '.esc_attr( get_theme_mod('sidebar-padding') ).'px; }'."\n";
			}
			// primary color
			if ( get_theme_mod('color-1','#ed2c4c') != '#ed2c4c' ) {
				$styles .= '
::selection { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }
::-moz-selection { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }

a,
.themeform label .required,
.post-hover:hover .post-title a,
.post-title a:hover,
.post-nav li a:hover span,
.post-nav li a:hover i,
.widget a:hover,
.widget > ul li a:hover:before,
.widget_rss ul li a,
.widget_calendar a,
.alx-tabs-nav li.active a,
.alx-tab .tab-item-category a,
.alx-posts .post-item-category a,
.alx-tab li:hover .tab-item-title a,
.alx-tab li:hover .tab-item-comment a,
.alx-posts li:hover .post-item-title a,
.dark .widget a:hover,
.dark .widget_rss ul li a,
.dark .widget_calendar a,
.dark .alx-tabs-nav li.active a,
.dark .alx-tab .tab-item-category a,
.dark .alx-posts .post-item-category a,
.dark .alx-tab li:hover .tab-item-title a,
.dark .alx-tab li:hover .tab-item-comment a,
.dark .alx-posts li:hover .post-item-title a,
.comment-tabs li.active a,
.comment-awaiting-moderation,
.child-menu a:hover,
.child-menu .current_page_item > a,
.wp-pagenavi a { color: '.esc_attr( get_theme_mod('color-1') ).'; }

.themeform input[type="button"],
.themeform input[type="reset"],
.themeform input[type="submit"],
.themeform button[type="button"],
.themeform button[type="reset"],
.themeform button[type="submit"],
.sidebar-toggle,
.post-tags a:hover,
.widget_calendar caption,
.dark .widget_calendar caption,
.commentlist li.bypostauthor > .comment-body:after,
.commentlist li.comment-author-admin > .comment-body:after { background-color: '.esc_attr( get_theme_mod('color-1') ).'; }

.widget > h3 > span,
.alx-tabs-nav li.active a,
.dark .alx-tabs-nav li.active a,
.comment-tabs li.active a,
.wp-pagenavi a:hover,
.wp-pagenavi a:active,
.wp-pagenavi span.current { border-bottom-color: '.esc_attr( get_theme_mod('color-1') ).'!important; }					
				'."\n";
			}
			// gradient left
			if ( get_theme_mod('gradient-left','#cc0099') != '#cc0099' ) {
				$styles .= '
#header,
#owl-featured .owl-buttons div,
.sidebar-toggle,
.grad-line,
.post-date .date-divider,
.alx-posts .post-item-inner:before,
.themeform input[type="submit"],
.themeform button[type="submit"],
.post-tags a:hover,
.widget_calendar caption,
.dark .widget_calendar caption,
.commentlist li.bypostauthor > .comment-body:after,
.commentlist li.comment-author-admin > .comment-body:after { 
background: -webkit-linear-gradient(right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%);
background: -moz-linear-gradient(right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%);
background: -o-linear-gradient(right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%);
background: linear-gradient(to right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%); }	
				'."\n";
			}
			// gradient right
			if ( get_theme_mod('gradient-right','#ff4422') != '#ff4422' ) {
				$styles .= '
#header,
#owl-featured .owl-buttons div,
.sidebar-toggle,
.grad-line,
.post-date .date-divider,
.alx-posts .post-item-inner:before,
.themeform input[type="submit"],
.themeform button[type="submit"],
.post-tags a:hover,
.widget_calendar caption,
.dark .widget_calendar caption,
.commentlist li.bypostauthor > .comment-body:after,
.commentlist li.comment-author-admin > .comment-body:after {
background: -webkit-linear-gradient(right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%);
background: -moz-linear-gradient(right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%);
background: -o-linear-gradient(right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%);
background: linear-gradient(to right,'.esc_attr( get_theme_mod('gradient-left') ).','.esc_attr( get_theme_mod('gradient-right') ).' 85%); }			
				'."\n";
			}	
			// topbar menu color
			if ( get_theme_mod('color-topbar-menu','') != '' ) {
				$styles .= '#wrap-nav-topbar { background: '.esc_attr( get_theme_mod('color-topbar-menu') ).'; }'."\n";
			}
			// header color
			if ( get_theme_mod('color-header','') != '' ) {
				$styles .= '#header-top { background: '.esc_attr( get_theme_mod('color-header') ).'; border-bottom: 1px solid rgba(255,255,255,0.2) }'."\n";
			}
			// mobile menu color
			if ( get_theme_mod('color-mobile-menu','') != '' ) {
				$styles .= '
#wrap-nav-mobile .nav-menu.mobile { background-color: '.esc_attr( get_theme_mod('color-mobile-menu') ).'; }
				'."\n";
			}
			// footer menu color
			if ( get_theme_mod('color-footer-menu','#222222') != '#222222' ) {
				$styles .= '
#wrap-nav-footer,
#wrap-nav-footer .nav-menu.mobile { background-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; }
#wrap-nav-footer .nav-menu:not(.mobile) .menu ul { background: '.esc_attr( get_theme_mod('color-footer-menu') ).';  }
#wrap-nav-footer .nav-menu:not(.mobile) .menu ul:after { border-top-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; border-bottom-color: transparent;  }
#wrap-nav-footer .nav-menu:not(.mobile) .menu ul ul:after { border-right-color: '.esc_attr( get_theme_mod('color-footer-menu') ).'; border-top-color: transparent; }
				'."\n";
			}				
			// footer color
			if ( get_theme_mod('color-footer','#282828') != '#282828' ) {
				$styles .= '#footer-bottom { background-color: '.esc_attr( get_theme_mod('color-footer') ).'; }'."\n";
			}			
			// header logo max-height
			if ( get_theme_mod('logo-max-height','60') != '60' ) {
				$styles .= '.site-title a img { max-height: '.esc_attr( get_theme_mod('logo-max-height') ).'px; }'."\n";
			}
			// image border radius
			if ( get_theme_mod('image-border-radius') != '0' ) {
				$styles .= 'img { -webkit-border-radius: '.esc_attr( get_theme_mod('image-border-radius') ).'px; border-radius: '.esc_attr( get_theme_mod('image-border-radius') ).'px; }'."\n";
			}
			// header text color
			if ( get_theme_mod( 'header_textcolor' ) != '' ) {
				$styles .= '.site-title a, .site-description { color: #'.esc_attr( get_theme_mod( 'header_textcolor' ) ).'; }'."\n";
			}
			wp_add_inline_style( 'writeup-style', $styles );	
		}
	}
	
}
add_action( 'wp_enqueue_scripts', 'writeup_dynamic_css' );
