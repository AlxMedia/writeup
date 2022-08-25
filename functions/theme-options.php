<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'writeup', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'writeup' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'writeup' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'writeup' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'writeup' ),
	'button_url'  => 'https://wordpress.org/support/theme/writeup/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'writeup' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'writeup' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'writeup' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'writeup' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'writeup' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_html__( 'Layout', 'writeup' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_html__( 'Sidebars', 'writeup' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'writeup' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'writeup' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Mobile Sidebar
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_html__( 'Mobile Sidebar Content', 'writeup' ),
	'description'	=> esc_html__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'writeup' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_html__( 'Show sidebars', 'writeup' ),
		's1'		=> esc_html__( 'Hide primary sidebar', 'writeup' ),
		's2'		=> esc_html__( 'Hide secondary sidebar', 'writeup' ),
		's1-s2'		=> esc_html__( 'Hide both sidebars', 'writeup' ),
	),
) );
// General: Post Comments
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_html__( 'Post Comments', 'writeup' ),
	'description'	=> esc_html__( 'Comments on posts', 'writeup' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_html__( 'Page Comments', 'writeup' ),
	'description'	=> esc_html__( 'Comments on pages', 'writeup' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'writeup' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'writeup' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_html__( 'Blog Layout', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> 'blog-list',
	'choices'		=> array(
		'blog-standard'	=> esc_html__( 'Standard', 'writeup' ),
		'blog-grid'		=> esc_html__( 'Grid', 'writeup' ),
		'blog-list'		=> esc_html__( 'List', 'writeup' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_html__( 'Heading', 'writeup' ),
	'description'	=> esc_html__( 'Your blog heading', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_html__( 'Subheading', 'writeup' ),
	'description'	=> esc_html__( 'Your blog subheading', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'writeup' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> '24',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Post Count
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'writeup' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '4',
		'step'	=> '4',
	),
) );
// Blog: Featured Category
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'writeup' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'writeup' ),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts', 'writeup' ),
	'description'	=> esc_html__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Highlight Category
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'select',
	'settings'		=> 'highlight-category',
	'label'			=> esc_html__( 'Highlight Category', 'writeup' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'writeup' ),
) );
// Blog: Highlights Category Count
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'highlight-posts-count',
	'label'			=> esc_html__( 'Highlight Post Count', 'writeup' ),
	'description'	=> esc_html__( 'Max number of highlight posts to display. Set it to 0 to disable.', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_html__( 'Frontpage Widgets Top', 'writeup' ),
	'description'	=> esc_html__( '2 columns of widgets', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_html__( 'Frontpage Widgets Bottom', 'writeup' ),
	'description'	=> esc_html__( '2 columns of widgets', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Comment Count
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Thumbnail Comment Count', 'writeup' ),
	'description'	=> esc_html__( 'Comment count on thumbnails', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'writeup' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'writeup' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'writeup' ),
		'categories'=> esc_html__( 'Related by categories', 'writeup' ),
		'tags'		=> esc_html__( 'Related by tags', 'writeup' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'writeup' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'writeup' ),
	'section'		=> 'blog',
	'default'		=> 's1',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'writeup' ),
		's1'		=> esc_html__( 'Sidebar Primary', 'writeup' ),
		's2'		=> esc_html__( 'Sidebar Secondary', 'writeup' ),
		'content'	=> esc_html__( 'Below content', 'writeup' ),
	),
) );
// Header: Ads
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_html__( 'Header Ads', 'writeup' ),
	'description'	=> esc_html__( 'Header widget ads area', 'writeup' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Search
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-search',
	'label'			=> esc_html__( 'Header Search', 'writeup' ),
	'description'	=> esc_html__( 'Header search button', 'writeup' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Header: Social Links
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'writeup' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'writeup' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_html__( 'Footer Ads', 'writeup' ),
	'description'	=> esc_html__( 'Footer widget ads area', 'writeup' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'writeup' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'writeup' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'writeup' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'writeup' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'writeup' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'writeup' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'writeup' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'writeup' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'writeup' ),
	'description'	=> esc_html__( 'Footer credit text', 'writeup' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_html__( 'Global Layout', 'writeup' ),
	'description'	=> esc_html__( 'Other layouts will override this option if they are set', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'col-2cl',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_html__( 'Home', 'writeup' ),
	'description'	=> esc_html__( '(is_home) Posts homepage layout', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_html__( 'Single', 'writeup' ),
	'description'	=> esc_html__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_html__( 'Archive', 'writeup' ),
	'description'	=> esc_html__( '(is_archive) Category, date, tag and author archive layout', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_html__( 'Archive - Category', 'writeup' ),
	'description'	=> esc_html__( '(is_category) Category archive layout', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_html__( 'Search', 'writeup' ),
	'description'	=> esc_html__( '(is_search) Search page layout', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_html__( 'Error 404', 'writeup' ),
	'description'	=> esc_html__( '(is_404) Error 404 page layout', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_html__( 'Default Page', 'writeup' ),
	'description'	=> esc_html__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'writeup' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );


function writeup_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_html__( 'Home', 'writeup' ),
		'description'	=> esc_html__( '(is_home) Primary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_html__( 'Home', 'writeup' ),
		'description'	=> esc_html__( '(is_home) Secondary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_html__( 'Single', 'writeup' ),
		'description'	=> esc_html__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_html__( 'Single', 'writeup' ),
		'description'	=> esc_html__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_html__( 'Archive', 'writeup' ),
		'description'	=> esc_html__( '(is_archive) Primary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_html__( 'Archive', 'writeup' ),
		'description'	=> esc_html__( '(is_archive) Secondary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'writeup' ),
		'description'	=> esc_html__( '(is_category) Primary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_html__( 'Archive - Category', 'writeup' ),
		'description'	=> esc_html__( '(is_category) Secondary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_html__( 'Search', 'writeup' ),
		'description'	=> esc_html__( '(is_search) Primary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_html__( 'Search', 'writeup' ),
		'description'	=> esc_html__( '(is_search) Secondary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_html__( 'Error 404', 'writeup' ),
		'description'	=> esc_html__( '(is_404) Primary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_html__( 'Error 404', 'writeup' ),
		'description'	=> esc_html__( '(is_404) Secondary', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_html__( 'Default Page', 'writeup' ),
		'description'	=> esc_html__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	Kirki::add_field( 'writeup_theme', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_html__( 'Default Page', 'writeup' ),
		'description'	=> esc_html__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'writeup' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_html__( 'Select a sidebar', 'writeup' ),
	) );
	
 } 
add_action( 'init', 'writeup_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'writeup' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'writeup' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'writeup' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'writeup' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'writeup' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'writeup' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'writeup' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'writeup' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'writeup' ) . ' <a href="https://fontawesome.com/v5/search?s=brands" target="_blank"><strong>' . esc_html__( 'View All', 'writeup' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'writeup' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'writeup' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'writeup' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'writeup' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'writeup' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'writeup' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_html__( 'Boxed Layout', 'writeup' ),
	'description'	=> esc_html__( 'Use a boxed layout', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'writeup' ),
	'description'	=> esc_html__( 'Select font for the theme', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> 'roboto',
	'choices'     => array(
		'titillium-web'			=> esc_html__( 'Titillium Web, Latin (Self-hosted)', 'writeup' ),
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'writeup' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'writeup' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'writeup' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'writeup' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'writeup' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'writeup' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'writeup' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'writeup' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'writeup' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'writeup' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'writeup' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'writeup' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'writeup' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'writeup' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'writeup' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'writeup' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'writeup' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'writeup' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'writeup' ),
		'arial'					=> esc_html__( 'Arial', 'writeup' ),
		'georgia'				=> esc_html__( 'Georgia', 'writeup' ),
		'verdana'				=> esc_html__( 'Verdana', 'writeup' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'writeup' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'writeup' ),
	'description'	=> esc_html__( 'Max-width of the container. Default: 1230px. If you use 2 sidebars, your container should be at least 1280px.', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '1230',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_html__( 'Sidebar Width', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_html__( '280px primary (30px padding)', 'writeup' ),
		'20'	=> esc_html__( '300px primary (20px padding)', 'writeup' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_html__( 'Primary Color', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '#ed2c4c',
) );
// Styling: Gradient Left
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-left',
	'label'			=> esc_html__( 'Gradient Color Left', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '#cc0099',
) );
// Styling: Gradient Right
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-right',
	'label'			=> esc_html__( 'Gradient Color Right', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '#ff4422',
) );
// Styling: Mobile Menu Color
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-mobile-menu',
	'label'			=> esc_html__( 'Mobile Menu Color', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Topbar Menu Color
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-topbar-menu',
	'label'			=> esc_html__( 'Topbar Menu Color', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Header Color
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-header',
	'label'			=> esc_html__( 'Header Color', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '',
) );
// Styling: Footer Menu Color
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer-menu',
	'label'			=> esc_html__( 'Footer Menu Color', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '#222222',
) );
// Styling: Footer Background
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_html__( 'Footer Background', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '#282828',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'writeup' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'writeup_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_html__( 'Image Border Radius', 'writeup' ),
	'description'	=> esc_html__( 'Give your thumbnails and layout images rounded corners', 'writeup' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );