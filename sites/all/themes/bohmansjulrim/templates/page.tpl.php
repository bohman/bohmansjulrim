<header class="introduction-pane">
  <?php if($site_name) { ?>
    <h1 class="site-name">
      <a href="<?php print $front_page; ?>" title="<?php print $site_name; ?>" rel="home" class="sitename">
        <?php print $site_name; ?>
      </a>
    </h1>
  <?php } ?>

  <p class="tagline">Vår familj har samlat alla julrim vi skrivit sedan 1989. Somliga är kassa, somliga är bra, men tillsammans är de en riktig skatt.</p>

  <nav class="primary-menu">
    <?php print l('Sök', 'sok', array('attributes' => array('class' => array('button')))); ?>
    <?php print l('Om', 'node/84', array('attributes' => array('class' => array('button')))); ?>
    <?php// print l('Nytt julrim', '/node/add/julrim', array('attributes' => array('class' => array('button')))); ?>
  </nav>

  <?php if (isset($tabs) && $tabs) {
    print render($tabs);
  } ?>
</header>

<section class="content-pane">
  <?php if($page['highlighted'] OR $page['help'] OR $messages) { ?>
    <div class="drupal-messages">
      <?php
        print render($page['highlighted']);
        print render($page['help']);
        print $messages;
      ?>
    </div>
  <?php }

  if ($title && !$is_front) {
    if((isset($node->type) && $node->type == 'julrim') || (arg(0) == 'taxonomy' && arg(1) == 'term' && is_numeric(arg(2)))) {
      // Don't do jack
    } else {
      print render($title_prefix); ?>
        <h2 class="title"><?php print $title; ?></h2>
      <?php print render($title_suffix);
    }
  }

  print render($page['content_pre']);
  print render($page['content']);
  print render($page['content_post']); ?>
</section>