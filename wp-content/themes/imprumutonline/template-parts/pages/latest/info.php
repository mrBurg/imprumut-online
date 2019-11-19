<?php
  $postFields = get_fields(get_the_ID());

  $logo = $postFields['logo'];
  $mail = $postFields['mail'];
?>

<div class="<?= _bem($post->post_name, 'info__logo'); ?>">
    <img class="<?= _bem($post->post_name, 'info__logo__img'); ?>" src="<?= $logo['url']; ?>"
      alt="<?= $logo['alt']; ?>">
</div>
<div class="<?= _bem($post->post_name, 'info__data'); ?>">
    <a class="<?= _bem($post->post_name, 'info__data__link'); ?>" href="mailto:<?= $mail['link']; ?>">
      <?= $mail['link']; ?>
    </a>
    <div class="<?= _bem($post->post_name, 'info__data__text'); ?>">
        <img class="<?= _bem($post->post_name, 'info__data__img'); ?>" src="<?= $mail['icon']['url']; ?>"
          alt="<?= $mail['icon']['alt']; ?>">
      <?= the_content(); ?>
    </div>
</div>