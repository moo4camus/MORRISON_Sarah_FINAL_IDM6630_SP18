<?php
  the_title('<h2>','</h2>'); ?>
  <?php
  wp_reset_query(); // necessary to reset query
  while ( have_posts() ) : the_post();
      the_content();
  endwhile; // End of the loop.
  ?>
