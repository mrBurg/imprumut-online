<?php
  $postFields = get_fields($post->ID);

  $background = $postFields['background'];

  $_post = $post;
?>

<section id="section-<?= $post->ID; ?>" class="section section-<?= $post->post_name ?>"
  style="background-image: url('<?= $background['url'] ?>');">
    <div class="<?= _bem($post->post_name, 'content'); ?>">
        <div class="<?= _bem($post->post_name, 'data'); ?>">
            <div class="<?= _bem($post->post_name, ['item', 'info']); ?>">
                <div class="<?= _bem($post->post_name, ['item__data', 'info__data']); ?>">

                  <?php get_template_part('template-parts/pages/latest/info'); ?>

                </div>
            </div>
            <div class="<?= _bem($post->post_name, ['item', 'news']); ?>">
                <div class="<?= _bem($post->post_name, ['item__data', 'news__data']); ?>">

                  <?php
                    get_template_part('template-parts/pages/latest/news');

                    $post = $_post;
                  ?>

                </div>
            </div>
            <div class="<?= _bem($post->post_name, ['item', 'works']); ?>">
                <div class="<?= _bem($post->post_name, ['item__data', 'works__data']); ?>">

                  <?php
                    get_template_part('template-parts/pages/latest/works');

                    $post = $_post;
                  ?>

                </div>
            </div>
            <div class="<?= _bem($post->post_name, ['item', 'contacts']); ?>">
                <div class="<?= _bem($post->post_name, ['item__data', 'contacts__data']); ?>">

                  <?php get_template_part('template-parts/pages/latest/contacts'); ?>

                </div>
            </div>
        </div>
    </div>
</section>