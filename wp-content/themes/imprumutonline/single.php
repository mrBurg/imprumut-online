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

                  <section id="section-<?= $post->ID; ?>" class="section section-<?= $postName; ?>">
                      <h1 class="<?= _bem('section', 'title') ?>"><?= the_title(); ?></h1>
                      <div class="<?= _bem('section', 'content') ?>">
                        <?= apply_filters('the_content', get_the_content()); ?>
                      </div>
                  </section>

                <?php
              }
            }

            if ($afterPosts) {
              foreach ($afterPosts as $afterPost) {
                $template = get_fields($afterPost->ID)['section'];

                set_query_var('post', $afterPost);
                get_template_part('template-parts/pages/' . $template);
              }
            }
          ?>

        </main>
    </div>

<?php get_footer(); ?>