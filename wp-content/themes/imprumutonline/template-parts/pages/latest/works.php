<?php
  $postFields = get_fields($post->ID);

  $works = $postFields['works'];
  $worksSlug = $works['rubrics']->slug;

  $worksList = new WP_Query(array('category_name' => $worksSlug, 'post_type' => 'post', 'posts_per_page' => 9));
?>

<h2 class="<?= _bem($post->post_name, 'works_title'); ?>">
  <?= $works['title']; ?>
</h2>
<div class="<?= _bem($post->post_name, 'works__content'); ?>">

  <?php
    if ($worksList->have_posts()) {
      while ($worksList->have_posts()) {
        $worksList->the_post();

        get_template_part('template-parts/blocks/latest/work');
      }
    }
    wp_reset_postdata();
  ?>

</div>