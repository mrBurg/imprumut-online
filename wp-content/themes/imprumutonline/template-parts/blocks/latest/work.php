<?php
  $postFields = get_fields(get_the_ID());

  $img = $postFields['image'];
  $link = $postFields['link'];
?>

<div id="work-<?= the_ID(); ?>" class="work work-<?= $post->post_name; ?>">
    <a class="<?= _bem('work', 'link'); ?>" href="<?= $link; ?>">
        <img class="<?= _bem('work', 'img'); ?>" src="<?= $img['url']; ?>" alt="<?= $img['alt']; ?>">
    </a>
</div>