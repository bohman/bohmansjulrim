<?php
  if ($classes) {
    $classes = ' class="' . $classes . '"';
  }

  if ($id_node) {
    $id_node = ' id="' . $id_node . '"';
  }

  hide($content['comments']);
  hide($content['links']);
?>

<article <?php print $id_node . $classes . $attributes; ?> role="article">
  <?php if (!$page) {
    print render($title_prefix); ?>
      <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
    <?php print render($title_suffix);
  }

  print render($content); ?>
</article>
