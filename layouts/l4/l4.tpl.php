<?php
/**
 * @file
 * Skeleton layout 3 panels template file
 */
?>
<section id="pageBody" class="l4">
  <div id="railLeft" class="rail contentRelated">
    <div class="region region-sidebar-first panel-region">
      <?php print $content['sidebar_first']; ?>
    </div>
  </div>
  <div id="contentMain">
    <?php print $content['content']; ?>
  </div>
  <div id="railRight" class="rail contentRelated">
    <div class="region region-sidebar-second panel-region">
      <?php print $content['sidebar_second']; ?>
    </div>
  </div>
</section>