<?php
/**
 * @file
 * Template file used for blocks created with the menu_block module. 
 * 
 * Module Page: http://drupal.org/project/menu_block
 * Documentation: http://drupal.org/node/748022
 */
?>

<nav id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
  <?php if ($block->subject){ ?>
    <header<?php print $title_attributes; ?>><?php print $block->subject ?></header>
  <?php } ?>
  <div class="content">
    <?php print $content; ?>
  </div>
</nav>