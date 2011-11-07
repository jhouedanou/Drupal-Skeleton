<?php
/**
 * @file
 * Template file for SKELETON base theme.
 *
 * @author
 * MRaichelson <mraichelson@navigationarts.com>
 */

/**
 * Helper functions are named with an initial underscore.
 * They are for completing special tasks and don't tie into the 
 * underlying Drupal core or theming APIs. 
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
}
