<?php

/**
 * Implements hook_panels_layouts().
 */
function aaccTheme_aaccBcn_panels_layouts() {
  $items['aaccBcn'] = array(
    'title' => t('Rejilla para el encuentro de Barcelona'),
    'category' => t('AACC: barcelona'),
    'icon' => 'aaccBcn.png',
    'theme' => 'aaccBcn',
    'admin css' => '../omega_panels_admin_12.css',
    'regions' => array(
      'sidebar' => t('Sidebar'),
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
      'bottom' => t('Bottom'),
    ),
  );

  return $items;
}
