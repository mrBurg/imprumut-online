<?php
  $postFields = get_fields($post->ID);

  $rubrics = $postFields['rubrics']->slug;
  $bestPrices = new WP_Query(array('category_name' => $rubrics, 'post_type' => 'post', 'posts_per_page' => -1));
?>

<section id="section-<?= $post->ID; ?>" class="section section-<?= $post->post_name ?>">
    <h2 class="<?= _bem('section', 'title'); ?> <?= _bem($post->post_name, 'title'); ?>">
      <?= the_title(); ?>
    </h2>
    <div class="<?= _bem($post->post_name, 'content'); ?>">
        <div class="<?= _bem($post->post_name, 'data'); ?> js-<?= $post->post_name ?>-slick">

          <?php
            if ($bestPrices->have_posts()) {
              while ($bestPrices->have_posts()) {
                $bestPrices->the_post();
                ?>

                  <div class="<?= _bem($post->post_name, 'item'); ?>">

                    <?php get_template_part('template-parts/blocks/best-price'); ?>

                  </div>

                <?php
              }
            }
            wp_reset_postdata();
          ?>

        </div>
    </div>
</section>