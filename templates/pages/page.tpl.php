<?php
  /**
   * @file
   * Main Page template file
   */

  /**
   * determine which page layout (as described in the CMS Spec) to use for the page.
   */
  $page_layout = 'l1'; // default to layout one: content column with no rails
  if ($page['sidebar_first'] && $page['sidebar_second']) {
    $page_layout = 'l4'; // layout four: three column layout
  } else if ($page['sidebar_second'] && !$page['sidebar_first']) {
    $page_layout = 'l3'; // layout three: content column and right rail
  } else if ($page['sidebar_first'] && !$page['sidebar_second']) {
    $page_layout = 'l2'; // layout two: left rail and content column
  }
?>
<div id="doc">
  <section id="pageGlobal">
    <?php if ($page['nav_global']) { ?>
      <div id="pageGlobalNavigation">
        <?php print render($page['nav_global']); ?>
      </div>
    <?php } ?>
    <?php if ($page['search']) { ?>
      <div id="pageGlobalSearch">
        <?php print render($page['search']); ?>
      </div>
    <?php } ?>
  </section>
  <header id="pageHeader">
    <?php if ($logo) { ?>
      <div class="logo">
        <a href="<?php print base_path(); ?>"><img src="<?php print $logo; ?>" alt="" /></a>
      </div>
    <?php } ?>
    <?php if ($site_name) { ?>
      <div class="name">
        <h1><?php print $site_name; ?></h1>
      </div>
    <?php } ?>
    <?php if ($site_slogan) { ?> 
      <div class="slogan">
        <?php print $site_slogan; ?>
      </div>
    <?php } ?>
    <?php if ($page['header']) { ?>
      <div id="pageHeaderContent"><?php print render($page['header']); ?></div>
    <?php } ?>
  </header>
  <?php if ($page['nav_main']) { ?>
    <section id="pageNavigation">
      <?php print render($page['nav_main']); ?>
    </section>
  <?php } ?>
  <?php if ($page['highlighted']) { ?>
    <div id="highlighted">
      <?php print render($page['highlighted']); ?>
    </div>
  <?php } ?>
  <div id="breadcrumb">
    <?php if ($breadcrumb) { print $breadcrumb; } ?>
  </div>
  <section id="pageBody" class="<?php print $page_layout; ?>">
    <?php if ($page['sidebar_first']) { ?>
      <div id="railLeft" class="rail contentRelated">
        <?php print render($page['sidebar_first']) ?>
      </div>
    <?php } ?>
    <div id="contentMain">
      <?php if ($page['help'] || ($show_messages && $messages)) { ?>
        <?php print render($page['help']); ?>
        <?php if ($show_messages && $messages) { print $messages; } ?>
      <?php } ?>
      <?php if ($title) { ?><h1><?php print $title ?></h1><?php } ?>
      <!-- page actions for editors/administrators -->
      <?php if ($tabs) { ?>
        <div class="tabs-main">
          <?php print render($tabs) ?>
        </div>
      <?php } ?>
      <?php if ($action_links) { ?>
        <div class="tabs-actions">
          <?php print render($action_links); ?>
        </div>
      <?php } ?>
      <!-- end of page actions for editors/administrators -->
      <?php print render($page['content']); ?>
      <?php /* print $feed_icons; */ ?>
    </div>
    <?php if ($page['sidebar_second']){ ?>
      <div id="railRight" class="rail contentRelated">
        <?php print render($page['sidebar_second']); ?>
      </div>
    <?php } ?>
  </section>
  <?php if ($page['featured']) { ?>
    <div id="featured">
      <?php print render($page['featured']); ?>
    </div>
  <?php } ?>
  <?php if ($page['triptych_first'] || $page['triptych_middle'] || $page['triptych_last']) { ?>
    <div id="triptych">
      <?php if ($page['triptych_first']) { ?>
        <div class="triptych" id="triptych1">
          <?php print render($page['triptych_first']); ?>
        </div>
      <?php } ?>
      <?php if ($page['triptych_middle']) { ?>
        <div class="triptych" id="triptych2">
          <?php print render($page['triptych_middle']); ?>
        </div>
      <?php } ?>
      <?php if ($page['triptych_last']) { ?>
        <div class="triptych" id="triptych3">
          <?php print render($page['triptych_last']); ?>
        </div>
      <?php } ?>
    </div>
  <?php } ?>
  <footer id="pageFooter">
    <?php if ($page['footer_firstcolumn'] || $page['footer_secondcolumn'] || $page['footer_thirdcolumn'] || $page['footer_fourthcolumn']){ ?>
      <div id="pageFooterColumns">
        <?php if ($page['footer_firstcolumn']) { ?>
          <div class="pageFooterColumn" id="pageFooterColumn1">
            <?php print render($page['footer_firstcolumn']); ?>
          </div>
        <?php } ?>
        <?php if ($page['footer_secondcolumn']) { ?>
          <div class="pageFooterColumn" id="pageFooterColumn2">
            <?php print render($page['footer_secondcolumn']); ?>
          </div>
        <?php } ?>
        <?php if ($page['footer_thirdcolumn']) { ?>
          <div class="pageFooterColumn" id="pageFooterColumn3">
            <?php print render($page['footer_thirdcolumn']); ?>
          </div>
        <?php } ?>
        <?php if ($page['footer_fourthcolumn']) { ?>
          <div class="pageFooterColumn" id="pageFooterColumn4">
            <?php print render($page['footer_fourthcolumn']); ?>
          </div>
        <?php } ?>
      </div>
    <?php } ?>
    <?php if ($page['footer']) { ?>
      <div id="pageFooterContent">
        <?php print render($page['footer']) ?>
      </div>
    <?php } ?>
  </footer>
</div>