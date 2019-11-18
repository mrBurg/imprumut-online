<?php
  $postFields = get_fields($post->ID);

  $statistic = $postFields['statistic'];
  $footer = $postFields['footer'];
  $logo = $footer['logo'];
  $readMore = $footer['read_more'];
?>

<section id="section-<?= $post->ID; ?>" class="section section-<?= $post->post_name; ?>">
    <h2 class="<?= _bem('section', 'title'); ?> <?= _bem($post->post_name, 'title'); ?>">
      <?= the_title(); ?>
    </h2>
    <div class="<?= _bem($post->post_name, 'content'); ?>">
        <ul class="<?= _bem($post->post_name, 'list'); ?>">

          <?php
            foreach ($statistic as $singleStatistic) {
              $rubricFields = get_fields($singleStatistic->ID);
              ?>

                <li class="<?= _bem($post->post_name, 'list__item'); ?>">
                    <div class="<?= _bem($post->post_name, 'list__item__count'); ?>">
                      <?= $rubricFields['counter']; ?>
                        <hr class="<?= _bem($post->post_name, 'list__item__count__line'); ?>">
                    </div>
                    <div class="<?= _bem($post->post_name, 'list__item__title'); ?>">
                      <?= $singleStatistic->post_title; ?>
                    </div>
                </li>

            <?php } ?>

        </ul>
        <div class="<?= _bem($post->post_name, 'text'); ?>">
          <?= the_content(); ?>
        </div>
    </div>
    <div class="<?= _bem($post->post_name, 'footer'); ?>">
        <div class="logo">
            <a class="<?= _bem('logo', 'link'); ?>" href="<?= $footer['link']; ?>">
                <img class="<?= _bem('logo', 'img'); ?>" src="<?= $logo['url']; ?>"
                  alt="<?= $logo['alt']; ?>">
            </a>
        </div>
        <div class="<?= _bem($post->post_name, 'footer__text'); ?>">
          <?= $footer['text'] ?>
        </div>
        <div class="<?= _bem($post->post_name, 'footer__form'); ?>">
            <a class="ui-button-link" href="<?= $readMore['url']; ?>" target="<?= $readMore['target']; ?>">
              <?= $readMore['title']; ?>
            </a>
        </div>
    </div>
</section>