<?php
  function attach_theme_scripts() {
    wp_enqueue_style('index-css', get_template_directory_uri() . '/bundle/css/index.css');
    wp_enqueue_script('manifest-js', get_template_directory_uri() . '/bundle/js/manifest.js');
    wp_enqueue_script('index-js', get_template_directory_uri() . '/bundle/js/chunks/index.js');
  }

  function in_array_r($needle, $haystack, $strict = false) {
    foreach ($haystack as $item) {
      if (($strict ? $item === $needle : $item == $needle) || (is_array($item) && in_array_r($needle, $item, $strict))) {
        return true;
      }
    }
    return false;
  }

  function true_russian_date_forms($the_date = '') {
    if (substr_count($the_date, '---') > 0) {
      return str_replace('---', '', $the_date);
    }
    // массив замен для русской локализации движка и для английской
    $replacements = array("Январь" => "января", // "Jan" => "января"
      "Февраль" => "февраля", // "Feb" => "февраля"
      "Март" => "марта", // "Mar" => "марта"
      "Апрель" => "апреля", // "Apr" => "апреля"
      "Май" => "мая", // "May" => "мая"
      "Июнь" => "июня", // "Jun" => "июня"
      "Июль" => "июля", // "Jul" => "июля"
      "Август" => "августа", // "Aug" => "августа"
      "Сентябрь" => "сентября", // "Sep" => "сентября"
      "Октябрь" => "октября", // "Oct" => "октября"
      "Ноябрь" => "ноября", // "Nov" => "ноября"
      "Декабрь" => "декабря" // "Dec" => "декабря"
    );

    return strtr($the_date, $replacements);
  }

  function _bem($block, $element, $modifier = null) {
    $result = '';
    $checkModifier = function ($modifier) {
      switch (true) {
        case is_string($modifier):
          return '_' . $modifier;
          break;
        case is_array($modifier):
          return '_' . implode('_', $modifier);
          break;
        default:
          return '';
      }
    };

    switch (true) {
      case $element:
        switch (true) {
          case is_string($element):
            $el = $block . '__' . $element;
            $mod = $modifier ? ' ' . $el . $checkModifier($modifier) : '';
            $result .= $el . $mod;
            break;
          case is_array($element):
            $count = count($element) - 1;

            foreach ($element as $key => $elementItem) {
              $el = $block . '__' . $elementItem;
              $mod = $modifier ? ' ' . $el . $checkModifier($modifier) : '';
              $blockElement = $el . $mod;

              $result .= $blockElement . ($key != $count ? ' ' : '');
            };
        };
        break;
      case $modifier:
        $result .= $block . $checkModifier($modifier);
        break;
      default:
        try {
          throw new Exception('Element must not be "NULL" without modifier');
        } catch (Exception $error) {
          echo 'Caught exception: ', $error->getMessage(), "\n";
        };
    };

    return $result;
  }