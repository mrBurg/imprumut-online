<?php
  get_header();

  $frontPageID = get_option('page_on_front');
  $frontPageFields = get_fields($frontPageID);

  $afterContent = $frontPageFields['after_content'];
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

            <hr class="divider">

          <?php
            if ($afterContent) {
              foreach ($afterContent as $content) {
                $contentQuery = new WP_Query(array('page_id' => $content->ID));

                if ($contentQuery->have_posts()) {
                  while ($contentQuery->have_posts()) {
                    $contentQuery->the_post();

                    $template = get_fields($content->ID)['section'];

                    get_template_part('template-parts/pages/' . $template);
                  }
                }
                wp_reset_postdata();
              }
            }
          ?>

        </main>
    </div>

<?php get_footer(); ?>