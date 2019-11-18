<?php
  $postFields = get_fields($post->ID);

  $img = $postFields['image'];
  $link = $postFields['link'];
?>

<div id="work-<?= $post->ID; ?>" class="work work-<?= $post->post_name; ?>">
    <a class="<?= _bem('work', 'link'); ?>" href="<?= $link; ?>">
        <img class="<?= _bem('work', 'img'); ?>" src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>">
    </a>
</div>