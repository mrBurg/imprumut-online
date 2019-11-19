<?php
  $postFields = get_fields(get_the_ID());

  $background = $postFields['background'];
?>

<section id="section-<?= the_ID(); ?>" class="section section-<?= $post->post_name; ?>"
  style="background-image: url('<?= $background['url']; ?>');">
    <div class="<?= _bem($post->post_name, 'content'); ?>">
        <div class="<?= _bem($post->post_name, 'data'); ?>">

          <?php get_template_part('template-parts/blocks/social/social-default'); ?>
            
        </div>
    </div>
</section>