<?php
  $postFields = get_fields(get_the_ID());

  $findUs = $postFields['find_us'];

  $_post = $post;
?>

<h2 class="<?= _bem($post->post_name, 'title'); ?>">
  <?= $post->post_title; ?>
</h2>

<?php
  get_template_part('template-parts/blocks/social/social-' . $post->post_name);

  $post = $_post;
?>

<div class="<?= _bem($post->post_name, 'contacts__content'); ?>">
    <p class="<?= _bem($post->post_name, 'contacts__phone'); ?>">
      <?= $findUs['phone']; ?>
    </p>
    <address class="<?= _bem($post->post_name, 'contacts__address'); ?>">
        <p class="<?= _bem($post->post_name, 'contacts__address__feedback'); ?>">
          <?= $findUs['feedback']; ?>
        </p>
        <p class="<?= _bem($post->post_name, 'contacts__address__position'); ?>">
          <?= $findUs['address']; ?>
        </p>
    </address>
</div>