<?php
$plugin = array(
  'title' => t('Layout 4 (Three columns: Sidebar, Content, Sidebar)'),
  'category' => t('Builders'),
  'icon' => 'l4.png',
  'theme' => 'l4',
  'css' => 'l4.css',
  'regions' => array(
    'sidebar_first' => t('Left Sidebar'),
    'content' => t('Content'),
    'sidebar_second' => t('Right Sidebar')
  )
);