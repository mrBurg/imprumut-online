<?php
  $postFields = get_fields(get_the_ID());

  $social = $postFields['social']->slug;
  $socialList = new WP_Query(array('category_name' => $social, 'post_type' => 'post', 'posts_per_page' => -1));
?>

<ul class="social <?= _bem('social', 'default'); ?>">

  <?php
    if ($socialList->have_posts()) {
      while ($socialList->have_posts()) {
        $socialList->the_post();

        $itemFields = get_fields(get_the_ID());

        $icons = $itemFields['icons'];
        $link = $itemFields['link'];
        ?>

          <li class="<?= _bem('social', 'item'); ?>">
              <div class="<?= _bem('social', 'item__logo'); ?>">
                  <a class="<?= _bem('social', 'item__link'); ?>" href="<?= $link['url']; ?>"
                    target="<?= $link['target'] ?>">
                      <img class="<?= _bem('social', 'item__img'); ?>" src="<?= $icons['big']['url']; ?>"
                        alt="<?= $icons['big']['alt']; ?>">
                  </a>
              </div>
              <p class="<?= _bem('social', 'item__title'); ?>">
                <?= the_title(); ?>
              </p>
              <a class="<?= _bem('social', 'item__link'); ?>" href="<?= $link['url']; ?>"
                target="<?= $link['target'] ?>">
                <?= $link['title']; ?>
              </a>
          </li>

        <?php
      }
    }
    wp_reset_postdata();
  ?>

</ul>