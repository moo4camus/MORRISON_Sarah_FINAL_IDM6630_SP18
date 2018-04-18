<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();
?>

  <div class="page-wrap">
      <main>
  <div <?php post_class(); ?>
  <div class="title">
    <a href='<?php the_permalink(); ?>'>
      <?php
        the_title('<h2>','</h2>');
     ?></a>
   </div>

  <div <?php body_class(); ?>>
    <?php
    the_content(); ?>
    <div class="author"> <?php
        echo '- ';
        the_author();
        ?>
    </div>
    <div class="category"><?php
    the_category( $separator, $parents, $post_id );
    ?>
    </div>
  </div>
</div>
</div>
</main>
<?php endwhile; else : ?>

  <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
