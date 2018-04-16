<?php 

/**
 * Proper way to enqueue scripts and styles
 */
function joetheme_scripts() {
    wp_enqueue_style( 'normalize', 'https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css' );

    wp_enqueue_style( 'style', get_stylesheet_uri(), array(), rand(1,9999) );
    // wp_enqueue_script( 'joetheme-jquery', get_template_directory_uri() . '/js/jquery-3.3.1.min.js', array(), true, true );
    // wp_enqueue_script( 'flowtype', get_template_directory_uri() . '/js/flowtype.js', array(), true, true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array(), true, true );
}
add_action( 'wp_enqueue_scripts', 'joetheme_scripts' );




// Changes the read more [...] to be a Read More link
function new_excerpt_more($more) {
    global $post;
    return ' <a class="moretag" href="'. get_permalink($post->ID) . '">Read More</a>'; //Change to suit your needs
}
 
add_filter( 'excerpt_more', 'new_excerpt_more' );




/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function joetheme_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'joetheme_custom_excerpt_length', 999 );






// Register Custom Post Type Work
// Post Type Key: work
function create_work_cpt() {

  $labels = array(
    'name' => __( 'Works', 'Post Type General Name', 'work' ),
    'singular_name' => __( 'Work', 'Post Type Singular Name', 'work' ),
    'menu_name' => __( 'Works', 'work' ),
    'name_admin_bar' => __( 'Work', 'work' ),
    'archives' => __( 'Work Archives', 'work' ),
    'attributes' => __( 'Work Attributes', 'work' ),
    'parent_item_colon' => __( 'Parent Work:', 'work' ),
    'all_items' => __( 'All Works', 'work' ),
    'add_new_item' => __( 'Add New Work', 'work' ),
    'add_new' => __( 'Add New', 'work' ),
    'new_item' => __( 'New Work', 'work' ),
    'edit_item' => __( 'Edit Work', 'work' ),
    'update_item' => __( 'Update Work', 'work' ),
    'view_item' => __( 'View Work', 'work' ),
    'view_items' => __( 'View Works', 'work' ),
    'search_items' => __( 'Search Work', 'work' ),
    'not_found' => __( 'Not found', 'work' ),
    'not_found_in_trash' => __( 'Not found in Trash', 'work' ),
    'featured_image' => __( 'Featured Image', 'work' ),
    'set_featured_image' => __( 'Set featured image', 'work' ),
    'remove_featured_image' => __( 'Remove featured image', 'work' ),
    'use_featured_image' => __( 'Use as featured image', 'work' ),
    'insert_into_item' => __( 'Insert into Work', 'work' ),
    'uploaded_to_this_item' => __( 'Uploaded to this Work', 'work' ),
    'items_list' => __( 'Works list', 'work' ),
    'items_list_navigation' => __( 'Works list navigation', 'work' ),
    'filter_items_list' => __( 'Filter Works list', 'work' ),
  );
  $args = array(
    'label' => __( 'Work', 'work' ),
    'description' => __( 'Projects I have worked on.', 'work' ),
    'labels' => $labels,
    'menu_icon' => 'dashicons-text',
    'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'revisions', 'custom-fields','page-attributes', ),
    'taxonomies'  => array('category',),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'show_in_admin_bar' => true,
    'show_in_nav_menus' => true,
    'can_export' => true,
    'has_archive' => false,
    'hierarchical' => false,
    'exclude_from_search' => false,
    'show_in_rest' => true,
    'publicly_queryable' => true,
    'capability_type' => 'post',
  );
  register_post_type( 'work', $args );

}
add_action( 'init', 'create_work_cpt', 0 );








if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 1600, 900, false ); 

}


/**
 * Removes junk from Wp-Header
 */

remove_action('wp_head', 'rsd_link'); // Removes the Really Simple Discovery link
remove_action('wp_head', 'wlwmanifest_link'); // Removes the Windows Live Writer link
remove_action('wp_head', 'wp_generator'); // Removes the WordPress version
remove_action('wp_head', 'start_post_rel_link'); // Removes the random post link
remove_action('wp_head', 'index_rel_link'); // Removes the index page link
remove_action('wp_head', 'adjacent_posts_rel_link'); // Removes the next and previous post links



// REMOVE WP EMOJI
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


// First, we remove all the RSS feed links from wp_head using remove_action
remove_action( 'wp_head','feed_links', 2 );
remove_action( 'wp_head','feed_links_extra', 3 );

// Resource Hints is a rather new W3C specification that “defines the dns-prefetch,
// preconnect, prefetch, and prerender relationships of the HTML Link Element (<link>)”.
// These can be used to assist the browser in the decision process of which origins it
// should connect to, and which resources it should fetch and preprocess to improve page performance.
remove_action( 'wp_head', 'wp_resource_hints', 2 );

// Sends a Link header for the REST API.
// https://developer.wordpress.org/reference/functions/rest_output_link_header/
remove_action( 'template_redirect', 'rest_output_link_header', 11, 0 );

// Outputs the REST API link tag into page header.
// https://developer.wordpress.org/reference/functions/rest_output_link_wp_head/
remove_action( 'wp_head', 'rest_output_link_wp_head', 10 );

// https://developer.wordpress.org/reference/functions/wp_oembed_add_discovery_links/
remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );

// WordPress Page/Post Shortlinks
// URL shortening is sometimes useful, but this automatic ugly url
// in your header is useless. There is no reason to keep this. None.
remove_action( 'wp_head', 'wp_shortlink_wp_head');

// Weblog Client Link
// Are you editing your WordPress blog using your browser?
// Then you are not using a blog client and this link can probably be removed.
// This link is also used by a few 3rd party sites/programs that use the XML-RPC request formats.
// One example is the Flickr API. So if you start having trouble with a 3rd party service that
// updates your blog, add this back in. Otherwise, remove it.
remove_action ('wp_head', 'rsd_link');

// Windows Live Writer Manifest Link
// If you don’t know what Windows Live Writer is (it’s another blog editing client), then remove this link.
remove_action( 'wp_head', 'wlwmanifest_link');

// WordPress Generator (with version information)
// This announces that you are running WordPress and what version you are using. It serves no purpose.
remove_action('wp_head', 'wp_generator');

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );




class mediumMetabox {
	private $screen = array(
		'work',
	);
	private $meta_fields = array(
		array(
			'label' => 'Medium',
			'id' => 'medium',
			'type' => 'text',
		),
	);
	public function __construct() {
		add_action( 'add_meta_boxes', array( $this, 'add_meta_boxes' ) );
		add_action( 'save_post', array( $this, 'save_fields' ) );
	}
	public function add_meta_boxes() {
		foreach ( $this->screen as $single_screen ) {
			add_meta_box(
				'medium',
				__( 'Medium', 'joemalott' ),
				array( $this, 'meta_box_callback' ),
				$single_screen,
				'advanced',
				'default'
			);
		}
	}
	public function meta_box_callback( $post ) {
		wp_nonce_field( 'medium_data', 'medium_nonce' );
		echo 'The medium of the piece';
		$this->field_generator( $post );
	}
	public function field_generator( $post ) {
		$output = '';
		foreach ( $this->meta_fields as $meta_field ) {
			$label = '<label for="' . $meta_field['id'] . '">' . $meta_field['label'] . '</label>';
			$meta_value = get_post_meta( $post->ID, $meta_field['id'], true );
			if ( empty( $meta_value ) ) {
				$meta_value = $meta_field['default']; }
			switch ( $meta_field['type'] ) {
				default:
					$input = sprintf(
						'<input %s id="%s" name="%s" type="%s" value="%s">',
						$meta_field['type'] !== 'color' ? 'style="width: 100%"' : '',
						$meta_field['id'],
						$meta_field['id'],
						$meta_field['type'],
						$meta_value
					);
			}
			$output .= $this->format_rows( $label, $input );
		}
		echo '<table class="form-table"><tbody>' . $output . '</tbody></table>';
	}
	public function format_rows( $label, $input ) {
		return '<tr><th>'.$label.'</th><td>'.$input.'</td></tr>';
	}
	public function save_fields( $post_id ) {
		if ( ! isset( $_POST['medium_nonce'] ) )
			return $post_id;
		$nonce = $_POST['medium_nonce'];
		if ( !wp_verify_nonce( $nonce, 'medium_data' ) )
			return $post_id;
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE )
			return $post_id;
		foreach ( $this->meta_fields as $meta_field ) {
			if ( isset( $_POST[ $meta_field['id'] ] ) ) {
				switch ( $meta_field['type'] ) {
					case 'email':
						$_POST[ $meta_field['id'] ] = sanitize_email( $_POST[ $meta_field['id'] ] );
						break;
					case 'text':
						$_POST[ $meta_field['id'] ] = sanitize_text_field( $_POST[ $meta_field['id'] ] );
						break;
				}
				update_post_meta( $post_id, $meta_field['id'], $_POST[ $meta_field['id'] ] );
			} else if ( $meta_field['type'] === 'checkbox' ) {
				update_post_meta( $post_id, $meta_field['id'], '0' );
			}
		}
	}
}
if (class_exists('mediumMetabox')) {
	new mediumMetabox;
};




?>
