<?php
  /**
   * @file
   * Page template used with Panels content.
   */
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
  <?php if ($page['help'] || ($show_messages && $messages)) { ?>
    <div id="panelHelp" class="clearfix">
      <?php print render($page['help']); ?>
      <?php if ($show_messages && $messages) { print $messages; } ?>
    </div>
  <?php } ?>
  <!-- page actions for editors/administrators -->
  <?php if ($tabs) { ?>
    <div class="tabs-main clearfix">
      <?php print render($tabs) ?>
    </div>
  <?php } ?>
  <?php if ($action_links) { ?>
    <div class="tabs-actions clearfix">
      <?php print render($action_links); ?>
    </div>
  <?php } ?>
  <!-- end of page actions for editors/administrators -->
  <!-- content here from panels template -->
  <?php print render($page['content']); ?>
  <!-- /content here from panels template -->
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