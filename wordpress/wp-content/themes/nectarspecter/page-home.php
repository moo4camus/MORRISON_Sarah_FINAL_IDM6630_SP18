<!-- <?php echo basename(__FILE__); ?> -->
<html>
  <head>
    <title><?php echo get_bloginfo('name'); ?></title>
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="main">
      <div class="page-wrap">
      <?php
        define( 'WP_USE_THEMES', false ); ?>
      <div class="logo">
        <?php the_post_thumbnail(); ?>
      </div>
        <?php get_template_part('nav'); ?>
      ?>
    </div>
  </div>
  </main>
<!-- <?php echo "END OF " . basename(__FILE__); ?> -->
