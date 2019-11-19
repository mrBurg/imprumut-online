<?php
  $postFields = get_fields(get_the_ID());
?>

<section id="section-<?= the_ID(); ?>" class="section section-<?= $post->post_name; ?>">
    <h1 class="<?= _bem('section', 'title'); ?> <?= _bem($post->post_name, 'title'); ?>">
      <?= the_title(); ?>
    </h1>
    <div class="<?= _bem($post->post_name, 'content'); ?>">
      <?= the_content() ?>
    </div>
</section>