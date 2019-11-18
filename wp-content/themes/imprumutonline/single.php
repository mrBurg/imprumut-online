<?php
  get_header();

  $frontPageID = get_option('page_on_front');
  $frontPageFields = get_fields($frontPageID);

  $afterPosts = $frontPageFields['after_content'];
?>

    <div class="container">

      <?php get_template_part('template-parts/header/header'); ?>

        <main class="main single-page">

          <?php
            if (have_posts()) {
              while (have_posts()) {
                the_post();

                $postName = $post->post_name;
                ?>

                  <section id="section-<?= $post->ID; ?>" class="section section-<?= $post->post_name; ?>">
                      <h1 class="<?= _bem('section', 'title') ?>"><?= the_title(); ?></h1>
                      <div class="<?= _bem('section', 'content') ?>">
                        <?= apply_filters('the_content', get_the_content()); ?>
                      </div>
                  </section>

                <?php
              }
            }
          ?>

          <?php
            if ($afterPosts) {
              foreach ($afterPosts as $afterPost) {
                $post = $afterPost;
                $template = get_fields($post->ID)['section'];

                get_template_part('template-parts/pages/' . $template);
              }
            }
            wp_reset_postdata();
          ?>

        </main>
    </div>

<?php get_footer(); ?>