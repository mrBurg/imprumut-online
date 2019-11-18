<?php
  $postFields = get_fields($post->ID);

  $image = $postFields['image'];
  $takeLoan = $postFields['take_loan'];
  $blocks = $postFields['blocks'];
?>

<section id="section-<?= $post->ID; ?>" class="section section-<?= $post->post_name ?>">
    <h1 class="<?= _bem('section', 'title'); ?> <?= _bem($post->post_name, 'title'); ?>">
      <?= the_title(); ?>
    </h1>
    <div class="<?= _bem($post->post_name, 'content'); ?>">
        <aside class="<?= _bem($post->post_name, 'aside', 'left'); ?>">
            <div class="<?= _bem($post->post_name, 'aside__block'); ?>">
              <?= $blocks['schedule']; ?>
            </div>
            <div class="<?= _bem($post->post_name, 'aside__block'); ?>">
              <?= $blocks['loans']; ?>
            </div>
        </aside>
        <div class="<?= _bem($post->post_name, 'data'); ?>">
            <figure class="<?= _bem($post->post_name, 'figure'); ?>">
                <img src="<?= $image['url'] ?>" alt="<?= $image['link'] ?>"
                  class="<?= _bem($post->post_name, 'img'); ?>">
            </figure>
          <?php if (get_the_content()) : ?>
              <div class="<?= _bem($post->post_name, 'text'); ?>">
                <?= the_content(); ?>
              </div>
          <?php endif; ?>
            <div class="<?= _bem($post->post_name, 'form'); ?>">
                <a class="ui-button-link" href="<?= $postFields['take_loan']['url']; ?>"
                  target="<?= $postFields['take_loan']['target']; ?>">
                  <?= $takeLoan['title']; ?>
                </a>
            </div>
        </div>
        <aside class="<?= _bem($post->post_name, 'aside', 'right'); ?>">
            <div class="<?= _bem($post->post_name, 'aside__block'); ?>">
              <?= $blocks['expenses']; ?>
            </div>
            <div class="<?= _bem($post->post_name, 'aside__block'); ?>">
              <?= $blocks['give_out']; ?>
            </div>
        </aside>
    </div>
</section>