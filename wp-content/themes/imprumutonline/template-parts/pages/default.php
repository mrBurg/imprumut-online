<?php
  $page = get_query_var('postsItem');
  $pageFields = get_fields($page->ID);

  $pageName = $page->post_name;
?>

<h1>Default Template</h1>
<section id="section-<?= $page->ID; ?>" class="section section-<?= $pageName; ?>">
    <h2><?= $page->post_title; ?></h2>
    <div>
      <?= $page->post_content; ?>
    </div>
</section>

<pre>

  <?php
    print_r($page);
    print_r($pageFields);
  ?>

</pre>