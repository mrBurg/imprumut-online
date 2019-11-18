<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head>
    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>"/>

    <title><?php echo wp_get_document_title(); ?></title>
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>

  <?php
    add_action('wp_enqueue_scripts', 'attach_theme_scripts');
    wp_head();
  ?>

</head>
<body <?php body_class(); ?>>

