<?php
/**
 * @file
 * Template file for SKELETON base theme.
 *
 * @author
 * MRaichelson <mraichelson@navigationarts.com>
 */

/**
 * _na_include
 * 
 * Simplifies doing an include() to compensate for varying server 
 * configuration (differences in PHP.INI default include path).
 *
 * Note that this code will be directly output to the page and will not be 
 * held in a RETURN value or a variable.
 *
 * @param $filepath
 *  The path (within the theme folder structure) to the file that is meant to
 *  be included.
 * 
 * Example usage:
 * @code
 *   _na_include('_res/inc/example.inc');
 * @endcode
 */
function _na_include($filepath) {
  include($_SERVER['DOCUMENT_ROOT'] . base_path() . path_to_theme() . '/' . $filepath);
} // _na_include

/**
 * Implements theme_breadcrumb()
 */
function skeleton_breadcrumb(&$variables) {
  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $output = implode(' &rarr; ', $breadcrumb);
  } else {
    $output = '&nbsp;';
  }
  return $output;
} // skeleton_breadcrumb

/**
 * Implements theme_preprocess_page()
 */
function skeleton_preprocess_page(&$variables) {
  // if there is custom second sidebar content use it to replace the default 
  // second sidebar content.
  if (!empty($variables['page']['sidebar_second_custom'])) {
    $variables['page']['sidebar_second'] = $variables['page']['sidebar_second_custom'];
  }
  // provide a lower-to-the-ground page template when rendering panels nodes so 
  // we can fake our different layouts as panel sets.
  if (!empty($variables['node'])) {
    $node = $variables['node'];
    if ($node->type == 'panel') {
      $variables['theme_hook_suggestions'][] = 'page__panel'; // -> uses page--panel.tpl.php
    }
  }
} // skeleton_preprocess_page