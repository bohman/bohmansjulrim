<?php
  if ($classes) {
    $classes = ' class="' . $classes . '"';
  }

  if ($id_node) {
    $id_node = ' id="' . $id_node . '"';
  }

  hide($content['comments']);
  hide($content['links']);
  hide($content['field_ar']);
  hide($content['field_forfattare']);
  hide($content['field_julrim']);
  hide($content['field_svar']);
?>

<article <?php print $id_node . $classes . $attributes; ?> role="article">
  <?php if (!$page) { ?>
    <a class="rhyme" href="<?php print $node_url; ?>" rel="bookmark">
  <?php } else { ?>
    <section class="rhyme">
  <?php }

    print render($content['field_julrim']);

  if (!$page) { ?>
    </a>
  <?php } else { ?>
    </section>
  <?php } ?>

  <section class="answer">
    <?php print render($content['field_svar']); ?>
  </section>

  <?php if ($page) { ?>
    <p class="metadata"><?php print render($content['field_forfattare']); ?> <?php print render($content['field_ar']); ?></a></p>
  <?php } ?>

  <?php print render($content); ?>
</article>
