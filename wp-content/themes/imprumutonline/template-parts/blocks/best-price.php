<?php
  $bestPriceFields = get_fields(get_the_ID());

  $link = $bestPriceFields['link'];
?>

<div class="best-price">
    <div class="<?= _bem('best-price', 'content'); ?>">
        <h3 class="<?= _bem('best-price', 'title'); ?>">
          <?= the_title(); ?>
        </h3>
        <div class="<?= _bem('best-price', 'data'); ?>">
          <?= the_content() ?>
        </div>
    </div>
    <div class="<?= _bem('best-price', 'form'); ?>">
        <a class="ui-button-link" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>">
          <?= $link['title']; ?>
        </a>
    </div>
</div>