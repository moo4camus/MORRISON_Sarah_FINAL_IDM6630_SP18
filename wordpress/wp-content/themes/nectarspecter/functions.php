<?php
  function create_product_post_type() {

    $labels = array(
      'name' => _x('Store Items', 'post_type_general_name')
    );

    $args = array(
      'labels' => $labels,
      'menu_position' => 5,
      'supports' => array('title', 'editor', 'thumbnail'),
      'public' => true
  );
  register_post_type( 'product', $args );
  }

  add_action( 'init', 'create_product_post_type');
  add_theme_support('post-thumbnails');
  add_action('wp_enqueue_scripts', 'loadCSS');
    function loadCSS() {
      wp_enqueue_style('theme-style', get_template_directory_uri() . '/css/theme-styles.css');
    }
  add_filter('body_class', 'customBodyClasses');
    function customBodyClasses($classes) {
      if (is_single()) {
        $classes[] = "my-single-post";
      }
      $classes[] = 'my-class';
      $classes[] = 'second';
      return $classes;
      }
  add_filter('show_admin_bar', '__return_false');
 ?>
