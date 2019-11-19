<?php
  $postFields = get_fields(get_the_ID());

  $background = $postFields['background'];
  $link = $postFields['link'];
?>

<section id="section-<?= the_ID(); ?>" class="section section-<?= $post->post_name; ?>"
  style="background-image: url('<?= $background['url']; ?>');">
    <svg class="<?= _bem($post->post_name, 'arc', 'top'); ?>" viewBox="0 0 800 69" xmlns="http://www.w3.org/2000/svg">
        <path fill="#ffffff" d="M0,0l800,0v54.9c0,0-178.6-34-400,0s-400,0-400,0L0,0z"/>
    </svg>
    <svg class="<?= _bem($post->post_name, 'arc', 'bottom'); ?>" viewBox="0 0 800 69" xmlns="http://www.w3.org/2000/svg">
        <path fill="#ffffff" d="M0,70h800V15.1c0,0-178.6,34-400,0s-400,0-400,0L0,70z"/>
    </svg>
    <div class="<?= _bem($post->post_name, 'content'); ?>">
        <div class="<?= _bem($post->post_name, 'content__inner'); ?>">
            <h2 class="<?= _bem('section', 'title'); ?> <?= _bem($post->post_name, 'title'); ?>">
              <?= the_title(); ?>
            </h2>
            <div class="<?= _bem($post->post_name, 'data'); ?>">
              <?= the_content(); ?>
            </div>
            <div class="<?= _bem($post->post_name, 'form'); ?>">
                <a class="ui-button-link" href="<?= $link['url']; ?>" target="<?= $link['target']; ?>">
                  <?= $link['title']; ?>
                </a>
            </div>
        </div>
    </div>
</section>