<?php
  $postFields = get_fields($post->ID);

  $img = $postFields['image'];
  $link = $postFields['link'];
?>

<div id="news-<?= $post->ID; ?>" class="news-one news-<?= $post->post_name; ?>"
  style="background-image: url('<?= $img['url'] ?>');">
    <div class="<?= _bem('news-one', 'content'); ?>">
        <div class="<?= _bem('news-one', 'data'); ?>">
            <h3 class="<?= _bem('news-one', 'title'); ?>" title="<?= the_title(); ?>">
              <?= the_title(); ?>
            </h3>
            <div class="<?= _bem('news-one', 'text'); ?>">
              <?= the_content(); ?>
            </div>
        </div>
        <a class="<?= _bem('news-one', 'link'); ?>" href="<?= $link; ?>"></a>
    </div>
</div>