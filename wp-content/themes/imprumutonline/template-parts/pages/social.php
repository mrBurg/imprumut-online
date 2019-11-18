<?php
  $postFields = get_fields($post->ID);

  $background = $postFields['background'];
?>

<section id="section-<?= $post->ID; ?>" class="section section-<?= $post->post_name; ?>"
  style="background-image: url('<?= $background['url']; ?>');">
    <div class="<?= _bem($post->post_name, 'content'); ?>">
        <div class="<?= _bem($post->post_name, 'data'); ?>">

          <?php get_template_part('template-parts/blocks/social/social-default'); ?>
            
        </div>
    </div>
</section>