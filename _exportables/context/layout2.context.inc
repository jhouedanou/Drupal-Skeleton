$context = new stdClass;
$context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
$context->api_version = 3;
$context->name = 'layout_2';
$context->description = 'A two-column layout (sidebar, content)';
$context->tag = 'Layout Contexts';
$context->conditions = array();
$context->reactions = array(
  'region' => array(
    'bartik' => array(
      'disable' => array(
        'header' => 0,
        'help' => 0,
        'page_top' => 0,
        'page_bottom' => 0,
        'highlighted' => 0,
        'featured' => 0,
        'content' => 0,
        'sidebar_first' => 0,
        'sidebar_second' => 0,
        'triptych_first' => 0,
        'triptych_middle' => 0,
        'triptych_last' => 0,
        'footer_firstcolumn' => 0,
        'footer_secondcolumn' => 0,
        'footer_thirdcolumn' => 0,
        'footer_fourthcolumn' => 0,
        'footer' => 0,
        'dashboard_main' => 0,
        'dashboard_sidebar' => 0,
        'dashboard_inactive' => 0,
      ),
    ),
    'seven' => array(
      'disable' => array(
        'content' => 0,
        'help' => 0,
        'page_top' => 0,
        'page_bottom' => 0,
        'sidebar_first' => 0,
        'dashboard_main' => 0,
        'dashboard_sidebar' => 0,
        'dashboard_inactive' => 0,
      ),
    ),
    'skeleton' => array(
      'disable' => array(
        'sidebar_second' => 'sidebar_second',
        'sidebar_second_custom' => 'sidebar_second_custom',
        'header' => 0,
        'help' => 0,
        'page_top' => 0,
        'page_bottom' => 0,
        'highlighted' => 0,
        'featured' => 0,
        'content' => 0,
        'sidebar_first' => 0,
        'triptych_first' => 0,
        'triptych_middle' => 0,
        'triptych_last' => 0,
        'footer_firstcolumn' => 0,
        'footer_secondcolumn' => 0,
        'footer_thirdcolumn' => 0,
        'footer_fourthcolumn' => 0,
        'footer' => 0,
        'nav_main' => 0,
        'nav_global' => 0,
        'search' => 0,
        'dashboard_main' => 0,
        'dashboard_sidebar' => 0,
        'dashboard_inactive' => 0,
      ),
    ),
  ),
);
$context->condition_mode = 0;

// Translatables
// Included for use with string extractors like potx.
t('A two-column layout (sidebar, content)');
t('Layout Contexts');
