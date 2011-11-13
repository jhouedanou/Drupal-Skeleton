<?php
/**
 * @file panels-pane.tpl.php
 * Main panel pane template
 *
 * Variables available:
 * - $pane->type: the content type inside this pane
 * - $pane->subtype: The subtype, if applicable. If a view it will be the
 *   view name; if a node it will be the nid, etc.
 * - $title: The title of the content
 * - $content: The actual content
 * - $links: Any links associated with the content
 * - $more: An optional 'more' link (destination only)
 * - $admin_links: Administrative links associated with the content
 * - $feeds: Any feed icons or associated with the content
 * - $display: The complete panels display object containing all kinds of
 *   data including the contexts and all of the other panes being displayed.
 */
?>
<div class="<?php print $classes; ?>" <?php print $id; ?>>
  <?php if ($admin_links): ?>
    <div class="panel-admin">
      <?php print $admin_links; ?>
    </div>
  <?php endif; ?>
  <?php if ($title): ?>
    <div class="panel-header">
      <?php print $title; ?>
    </div>
  <?php endif; ?>
  <div class="panel-content">
    <?php print render($content); ?>
  </div>
  <?php if ($feeds): ?>
    <div class="panel-feeds">
      <?php print $feeds; ?>
    </div>
  <?php endif; ?>
  <?php if ($links): ?>
    <div class="panel-links">
      <?php print $links; ?>
    </div>
  <?php endif; ?>
  <?php if ($more): ?>
    <div class="panel-more">
      <?php print $more; ?>
    </div>
  <?php endif; ?>
</div>