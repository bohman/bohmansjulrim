<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
  <!-- taxonomy term.tpl.php -->
<?php }

hide($content['field_logo_initials']);

?>

  <h2 class="title">
    <?php if (render($content['field_logo_initials'])) { ?>
      <i class="tag-icon"><?php print render($content['field_logo_initials']); ?></i>
    <?php } ?>
    <?php print $term_name; ?>
  </h2>
  <?php print render($content); ?>

<?php if( theme_get_setting('mothership_poorthemers_helper') ){ ?>
  <!-- taxonomy term.tpl.php -->
<?php } ?>
