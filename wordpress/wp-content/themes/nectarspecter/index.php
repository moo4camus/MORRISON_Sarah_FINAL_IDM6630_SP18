

<!-- <?php echo basename(__FILE__); ?> -->
<html>
  <head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body <?php  body_class();
  ?>>

<?php
  define( 'WP_USE_THEMES', false );
  get_header();
  get_template_part('page-blog');
  get_footer();
?>
<!-- <?php echo "END OF " . basename(__FILE__); ?> -->
