# Skeleton Base Theme

## Key features

* Aggressive CSS normalization
  * Clips out a large number of default Drupal CSS files leaving in the pieces that are necessary to keep the admin/overlay interface running. 
  * Uses [Normalize.css](http://necolas.github.com/normalize.css/) to apply a basic standardized appearance cross-browser without a full reset/rebuild.
* HTML5 base markup
* Minimal Appearance CSS, just enough to hold the page structure in place with a wireframe-y grey color scheme, but not enough to imply it's official design. (That's what sub-themes are for!)

## Expects to be used with...

* [Menu_Block](http://drupal.org/project/menu_block)
* [Context](http://drupal.org/project/context) (and the Context_Layout submodule that is included in it)
  * [Context_Node](http://drupal.org/project/context_node)
  * [Context_Menu_Block](http://drupal.org/project/context_menu_block)

## Includes support for...

* [Panels](http://drupal.org/project/panels)
  * Includes 4 example Panels layouts to match the 4 potential automated outputs of `page.tpl.php`.
  * Includes an example Panel layout for building out a customizable homepage.
* Custom right rail content assignment through the [Block Reference](http://drupal.org/project/blockreference)/CCK Blocks method [I wrote about](http://writing.michaelraichelson.com/2011/10/29/managing-custom-block-assignments-in-drupal-with-automated-fallbacks/). (See code for `skeleton_preprocess_page()` in `template.php` for more information.)
* Node-specific layout control through the use of Context_Node.
  * Exported code for Contexts to control layouts are available in the `_exportables/context` directory.

## Todo

* Make a sub-theme toolkit/starter
* Drush/Rake sub-theme starter tool

## Changelog...

2011-11-12: MR - Still getting things started. Panels in place but still a little rough. 