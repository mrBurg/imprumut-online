<?php
  $postFields = get_fields($post->ID);

  $news = $postFields['news'];
  $newsSlug = $news['rubrics']->slug;

  $newsList = new WP_Query(array('category_name' => $newsSlug, 'post_type' => 'post', 'posts_per_page' => 1));
?>

<h2 class="<?= _bem($post->post_name, 'news_title'); ?>">
  <?= $news['title']; ?>
</h2>
<div class="<?= _bem($post->post_name, 'news__content'); ?>">

  <?php
    if ($newsList->have_posts()) {
      while ($newsList->have_posts()) {
        $newsList->the_post();

        get_template_part('template-parts/blocks/latest/news');
      }
    }
    wp_reset_postdata();
  ?>

</div>