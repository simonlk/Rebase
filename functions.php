<?php

/*=========================================
	Enqueue scripts and styles
======================================== */
add_action( 'wp_enqueue_scripts', 're_add_my_stylesheet', 100 ); // high number priority queues them last
function re_add_my_stylesheet() {
    // Respects SSL, Style.css is relative to the current file
    wp_enqueue_style( 'variations', get_stylesheet_directory_uri() . '/assets/css/variations.css' );
    wp_enqueue_style( 'base', get_stylesheet_directory_uri() . '/assets/css/base.css' );
    wp_enqueue_style('font-awesome', '//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css');
    wp_enqueue_script('smooth-scrolling', get_stylesheet_directory_uri() . '/assets/js/smooth-scrolling.js');

}


/*=========================================
	Header CTA
======================================== */
/* add_action( 'woo_header_inside', 'woo_custom_head_right', 100);

function woo_custom_head_right () { ?>
    <div id="above-menu-widget" class="above-menu-widget fr">
        <?php the_field("header_cta", 'option'); ?>
    </div>
<?php 
} 
*/

/*=========================================
	Move menu to right of logo
======================================== */
add_action( 'init', 'woo_custom_move_navigation', 10 );
 
function woo_custom_move_navigation () {
    // Remove main nav from the woo_header_after hook
    remove_action( 'woo_header_after','woo_nav', 10 );
    // Add main nav to the woo_header_inside hook
    add_action( 'woo_header_inside','woo_nav', 10 );
} // End woo_custom_move_navigation()




/*=========================================
	Full width body
======================================== */

// Add body container
add_action( 'woo_content_before', 'body_container_start' );
function body_container_start() { ?>
    <!--#body-container-->
    <div id="body-container">
<?php
}

// Finish body container
add_action( 'woo_content_after', 'body_container_end', 8 );
function body_container_end() { ?>
    </div><!--/#body-container-->
<?php
}


/*=========================================
	Custom widget areas
======================================== */
// register_sidebar( array( 'name' => __( 'Above Menu', 'woothemes' ), 'id' => 'abovemenu', 'description' => __( 'Displays above the menu', 'woothemes' ), 'before_widget' => '<div id="%1$s" class="%2$s">', 'after_widget' => '</div>', 'before_title' => '<h3>', 'after_title' => '</h3>' ) );    


/*=========================================
	Visual Editor customisations
======================================== */

// Use editor-style.css style for the editor
add_editor_style();

// Add the Style Dropdown Menu to the second row of visual editor buttons
function my_mce_buttons_2($buttons)
{
	array_unshift($buttons, 'styleselect');
	return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Add the style options
function my_mce_before_init($init_array)
	{
		// Now we add classes with title and separate them with;
		$init_array['theme_advanced_styles'] = "Large text=large-text;Button=woo-sc-button;Box=woo-sc-box normal";
	return $init_array;
}

add_filter('tiny_mce_before_init', 'my_mce_before_init');



/*=========================================
	Change name of Black Studio Tiny MCE
======================================== */

function change_tinymce_widget_title($translation, $text, $domain) {
    if ($text == 'Black Studio TinyMCE')
        $translation = 'Text - Visual Editor';
    return $translation;
}
add_filter('gettext', 'change_tinymce_widget_title', 10, 3);




/*=========================================
	Re-create logo function
======================================== */

if ( ! function_exists( 'woo_logo' ) ) {
function woo_logo () {
	$settings = woo_get_dynamic_values( array( 'logo' => '' ) );
	// Setup the tag to be used for the header area (`h1` on the front page and `span` on all others).
	$heading_tag = 'span';
	if ( is_home() || is_front_page() ) { $heading_tag = 'h1'; }

	// Get our website's name, description and URL. We use them several times below so lets get them once.
	$site_title = get_bloginfo( 'name' );
	$site_url = home_url( '/' );
	$site_description = get_bloginfo( 'description' );
?>
<div id="logo">
<?php
	// Website heading/logo and description text.
	if (get_field('logo')) { ?>
		<img src="<?php the_field('logo'); ?>" alt="<?php echo get_the_title(get_field('logo')) ?>" />
	<?php 
	} elseif ( ( '' != $settings['logo'] ) ) {
		$logo_url = $settings['logo'];
		if ( is_ssl() ) $logo_url = str_replace( 'http://', 'https://', $logo_url );

		echo '<a href="' . esc_url( $site_url ) . '" title="' . esc_attr( $site_description ) . '"><img src="' . esc_url( $logo_url ) . '" alt="' . esc_attr( $site_title ) . '" /></a>' . "\n";
	} // End IF Statement

	echo '<' . $heading_tag . ' class="site-title"><a href="' . esc_url( $site_url ) . '">' . $site_title . '</a></' . $heading_tag . '>' . "\n";
	if ( $site_description ) { echo '<span class="site-description">' . $site_description . '</span>' . "\n"; }
?>
</div>
<?php
} // End woo_logo()
}

add_action( 'woo_header_inside', 'woo_logo', 10 );


/*=========================================
	Content wrap
======================================== */
add_action( 'woo_post_inside_before', 're_content_wrap', 11);

function re_content_wrap() {
	echo '<div class="col-full content">';
}

add_action( 'woo_post_inside_after', 're_content_wrap_end', 11);

function re_content_wrap_end() {
	echo '</div>';
}



/*=========================================
	ACF Page settings
======================================== */
/* add_action( 'woo_post_inside_before', 're_acf_page_settings', 10);
function re_acf_page_settings() { ?>
	<style type="text/css" media="screen">
		.col-full.content {background: url(<?php the_field('background_image'); ?>) #fff top center no-repeat;}
	</style>
<?php }
*/

/*=========================================
	ACF Slider
======================================== */

add_action( 'woo_post_inside_before', 're_acf_slider', 10);

function re_acf_slider () { ?>
<?php if(get_field('slides')): ?> 
	<div class="slides">
	<?php
		while(has_sub_field('slides')):
	?>
		<div class="slide" style="background-color:<?php the_sub_field('bg_colour'); ?>">
			<div class="col-full">
				<div class="threecol-two image">
					<img class="" src="<?php the_sub_field('image'); ?>">
				</div>
				<div class="threecol-one last text">
		 			<h2><?php the_sub_field('title'); ?></h2>
		 			<p class="content"><?php the_sub_field('text'); ?></p>
		 		<?php if(get_sub_field('button_text')): ?>
					<p><a href="<?php the_sub_field('link'); ?>" class="btn btn-<?php the_sub_field('button_colour'); ?>"><?php the_sub_field('button_text'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-chevron-right"></i></a></p>
				<?php endif; ?>
				</div>
			</div>
 		</div>
	<?php
		endwhile; 
	?>
	</div> 
<?php endif; ?> 
<?php }


/*=========================================
	ACF Page Headings
======================================== */
/*add_action( 'woo_post_inside_after', 're_acf_page_heading', 9);

function re_acf_page_heading() {
	$values = get_field('hide_title');
	$hide_title = $values['0'];
	if ($hide_title != 'Yes') {
		$heading_tag = 'h1';
		if ( is_front_page() ) { $heading_tag = 'h2'; }
		$title_before = '<' . $heading_tag . ' class="title">';
		$title_after = '</' . $heading_tag . '>';
		?>
		<header>
			<?php the_title( $title_before, $title_after ); ?>
			<p class="subtitle"><?php the_field("page_subtitle"); ?></p>
		</header>
<?php
	} 
}
*/

/*=========================================
	ACF Flexible Content
======================================== */

add_action( 'woo_post_inside_after', 're_acf_content', 10);

function re_acf_content () { ?>
<?php while(has_sub_field("content")): ?>
<section class="entry">
	<?php if(get_row_layout() == "paragraph"): // layout: Content ?>
 
		<div>
			<?php the_sub_field("content"); ?>
		</div>
 
	<?php elseif(get_row_layout() == "file"): // layout: File ?>
 
		<div>
			<a href="<?php the_sub_field("file"); ?>" ><?php the_sub_field("name"); ?></a>
		</div>

	<?php elseif(get_row_layout() == "call_to_action"): // layout: Call to action ?>

		<div class="cta"><span class="cta-text text-black"><?php the_sub_field('text'); ?></span><a href="<?php the_sub_field('link'); ?>" class="btn btn-<?php the_sub_field('button_colour'); ?>"><?php the_sub_field('button_text'); ?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="icon-chevron-right"></i></a></div>

	<?php elseif(get_row_layout() == "featured_posts"): // layout: Featured Posts ?>
 
		<div>
			<h2><?php the_sub_field("title"); ?></h2>
			<?php the_sub_field("content"); ?>
 
			<?php if(get_sub_field("posts")): ?>
				<ul>
				<?php foreach(get_sub_field("posts") as $p): ?>
					<li><a href="<?php echo get_permalink($p->ID); ?>"><?php echo get_the_title($p->ID); ?></a></li>
				<?php endforeach; ?>
				</ul>
			<?php endif; ?>
 
		</div>
 
	<?php endif; ?>
</section>
<?php endwhile; ?> 
<?php }

?>