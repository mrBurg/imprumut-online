<?php
  $frontPageID = get_option('page_on_front');
  $frontPageFields = get_fields($frontPageID);

  $mainContent = new WP_Query(array('post_type' => 'page', 'orderby' => 'menu_order', 'post_parent' => 0, 'order' => 'ASC', 'posts_per_page' => -1, 'post__not_in' => array($frontPageID)));

  function get_sub_post_recursively($ID) {
    global $post;

    $subContent = new WP_Query(array('post_type' => 'page', 'orderby' => 'menu_order', 'post_parent' => $ID, 'order' => 'ASC', 'posts_per_page' => -1));

    if ($subContent->have_posts()) {
      while ($subContent->have_posts()) {
        $subContent->the_post();

        get_template_part('template-parts/pages/default');
        get_sub_post_recursively($post->ID);
      }
    }
    wp_reset_postdata();
  }

  if ($mainContent->have_posts()) {
    while ($mainContent->have_posts()) {
      $mainContent->the_post();

      $postID = $post->ID;
      $postFields = get_fields($postID);
      $template = $postFields['section'];

      get_template_part('template-parts/pages/' . $template);

      get_sub_post_recursively($postID);
    }
  }
  wp_reset_postdata();
