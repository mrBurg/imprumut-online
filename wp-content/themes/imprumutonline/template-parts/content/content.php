<?php
  $frontPageID = get_option('page_on_front');
  $frontPageFields = get_fields($frontPageID);

  $mainContent = new WP_Query(array('post_type' => 'page', 'orderby' => 'menu_order', 'order' => 'ASC', 'posts_per_page' => -1, 'post__not_in' => array($frontPageID)));

  if ($mainContent->have_posts()) {
    while ($mainContent->have_posts()) {
      $mainContent->the_post();

      $postFields = get_fields($post->ID);
      $template = $postFields['section'];

      get_template_part('template-parts/pages/' . $template);
    }
  }
  wp_reset_postdata();
