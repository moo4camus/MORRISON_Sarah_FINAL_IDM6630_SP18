<?php

  $product_post_type_query = array(
    'post_type' => 'product',
    'post_statues' => 'publish'
  );

  $get_products = new WP_Query($product_post_type_query);

if ( $get_products->have_posts() ) : while ( $get_products->have_posts() ) : $get_products->the_post();
?>
  <div <?php post_class(); ?>
  <div class="title">
    <a href='<?php the_permalink(); ?>'>
      <?php
        the_post_thumbnail();
        the_title('<h2>','</h2>');
     ?></a>
     <p><?php the_field('weight'); ?></p>
     <p><?php the_field('price'); ?></p>
  </div>

<?php endwhile; else : ?>

  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
