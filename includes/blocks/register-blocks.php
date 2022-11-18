<?php
function register_acf_block_types() {

    acf_register_block_type(array(
        'name'              => 'social-media-links',
        'title'             => __('Social Media Links'),
        'description'       => __('Link to any of your social media profiles'),
        'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/content-link.php',
        'category'          => 'widgets',
        'icon' => array(
        // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
          'foreground' => '#ff005d',
        // Specifying a dashicon for the block
          'src' => 'admin-links',
        ),
        'mode' => 'preview',
      'supports' => array( 
          'align' => false,
          'customClassName'	=> true,
          'color' => true,
		      'jsx' 			=> true,
      ),
        //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
        'keywords'          => array( 'content', 'link' ),
    ));

    acf_register_block_type(array(
      'name'              => 'content-links-grid',
      'title'             => __('Content Links Grid'),
      'description'       => __('Link to multiple content items using a grid layout'),
      'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/content-links-grid.php',
      'category'          => 'widgets',
      'icon' => array(
      // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
        'foreground' => '#ff005d',
      // Specifying a dashicon for the block
        'src' => 'admin-links',
      ),
      'mode' => 'preview',
    'supports' => array( 
        'align' => false,
    ),
      //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
      'keywords'          => array( 'content', 'link', 'links' ),
  ));

  acf_register_block_type(array(
    'name'              => 'archive-links-grid',
    'title'             => __('Archive Links Grid'),
    'description'       => __('Link to multiple archive pages using a grid layout'),
    'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/archive-links-grid.php',
    'category'          => 'widgets',
    'icon' => array(
    // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
      'foreground' => '#ff005d',
    // Specifying a dashicon for the block
      'src' => 'admin-links',
    ),
    'mode' => 'preview',
  'supports' => array( 
      'align' => false,
  ),
    //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
    'keywords'          => array( 'archive', 'link', 'links' ),
));

acf_register_block_type(array(
  'name'              => 'external-links-grid',
  'title'             => __('External Links Grid'),
  'description'       => __('Link to multiple external web pages and resources using a grid layout'),
  'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/external-links-grid.php',
  'category'          => 'widgets',
  'icon' => array(
  // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    'foreground' => '#ff005d',
  // Specifying a dashicon for the block
    'src' => 'admin-links',
  ),
  'mode' => 'preview',
'supports' => array( 
    'align' => false,
),
  //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
  'keywords'          => array( 'link', 'links' ),
));

acf_register_block_type(array(
  'name'              => 'latest-edition',
  'title'             => __('Latest edition'),
  'description'       => __('Automatically show link to latest journal edition'),
  'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/latest-edition.php',
  'category'          => 'widgets',
  'icon' => array(
  // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    'foreground' => '#ff005d',
  // Specifying a dashicon for the block
    'src' => 'admin-links',
  ),
  'mode' => 'preview',
'supports' => array( 
    'align' => false,
    'jsx'   => true,
    'color' => true,
    'jsx' 	=> true,
),
  //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
  'keywords'          => array( 'content', 'link', 'links' ),
));

acf_register_block_type(array(
  'name'              => 'showcase-grid',
  'title'             => __('Showcase content grid'),
  'description'       => __('Display any content type in a grid layout'),
  'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/showcase-grid.php',
  'category'          => 'widgets',
  'icon' => array(
  // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    'foreground' => '#ff005d',
  // Specifying a dashicon for the block
    'src' => 'admin-links',
  ),
  'mode' => 'preview',
'supports' => array( 
    'align' => false,
    'jsx'   => true,
    'color' => true,
),
  //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
  'keywords'          => array( 'content', 'link', 'links' ),
));

acf_register_block_type(array(
  'name'              => 'showcase-single',
  'title'             => __('Showcase single content item'),
  'description'       => __('Display a single content item alongside the featured image'),
  'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/showcase-single.php',
  'category'          => 'widgets',
  'icon' => array(
  // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    'foreground' => '#ff005d',
  // Specifying a dashicon for the block
    'src' => 'admin-links',
  ),
  'mode' => 'preview',
'supports' => array( 
    'align' => false,
    'jsx'   => true,
    'color' => true,
),
  //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
  'keywords'          => array( 'content', 'link', 'links' ),
));

acf_register_block_type(array(
  'name'              => 'user-profile',
  'title'             => __('User Profile'),
  'description'       => __('Display a selected user\'s profile'),
  'render_template' => plugin_dir_path( __FILE__ ) . '/layouts/user-profile.php',
  'category'          => 'widgets',
  'icon' => array(
  // Specifying a color for the icon (optional: if not set, a readable color will be automatically defined)
    'foreground' => '#ff005d',
  // Specifying a dashicon for the block
    'src' => 'admin-users',
  ),
  'mode' => 'preview',
'supports' => array( 
    'align' => false,
    'jsx'   => true,
    'color' => true,
),
  //'enqueue_style' => get_template_directory_uri() . '/assets/css/style.css',
  'keywords'          => array( 'user', 'profile'),
));

}



// Check if function exists and hook into setup.
if( function_exists('acf_register_block_type') ) {
    add_action('acf/init', 'register_acf_block_types');
}