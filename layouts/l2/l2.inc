<?php
$plugin = array(
  'title' => t('Layout 2 (Two columns: Sidebar, Content)'),
  'category' => t('Builders'),
  'icon' => 'l2.png',
  'theme' => 'l2',
  'css' => 'l2.css',
  'regions' => array(
    'sidebar_first' => t('Left Sidebar'),
    'content' => t('Content')
  )
);