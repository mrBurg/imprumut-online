<?php
  $postFields = get_fields($post->ID);

  $social = $postFields['social']->slug;
  $socialList = new WP_Query(array('category_name' => $social, 'post_type' => 'post', 'posts_per_page' => -1));
?>

<ul class="social <?= _bem('social', 'latest'); ?>">

  <?php
    if ($socialList->have_posts()) {
      while ($socialList->have_posts()) {
        $socialList->the_post();

        $socialPostFields = get_fields($post->ID);

        $icons = $socialPostFields['icons'];
        $link = $socialPostFields['link'];
        ?>

          <li class="<?= _bem('social', 'item'); ?>">
              <a class="<?= _bem('social', 'item__link'); ?>" href="<?= $link['url']; ?>"
                target="<?= $link['target'] ?>">
                  <img class="<?= _bem('social', 'item__img'); ?>" src="<?= $icons['small']['url']; ?>"
                    alt="<?= $icons['small']['alt']; ?>">
              </a>
          </li>

        <?php
      }
    }
    wp_reset_postdata();
  ?>

</ul>
