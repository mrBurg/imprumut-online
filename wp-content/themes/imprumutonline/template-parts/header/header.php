<?php
  $frontPageID = get_option('page_on_front');
  $frontPage = get_post($frontPageID);
  $frontPageFields = get_fields($frontPageID);

  $header = $frontPageFields['header'];
  $logo = $header['logo'];
?>

<header class="header">
    <div class="logo">
        <a class="<?= _bem('logo', 'link'); ?>" href="<?= $header['link']; ?>">
            <img src="<?= $logo['url']; ?>" alt="<?= $logo['alt']; ?>" class="<?= _bem('logo', 'img'); ?>">
        </a>
    </div>
    <!--<div class="header__data">
        <div class="header__title"><? //= $frontPage->post_title; ?></div>
        <div class="header__content"><? //= $frontPage->post_content; ?></div>
    </div>-->
</header>