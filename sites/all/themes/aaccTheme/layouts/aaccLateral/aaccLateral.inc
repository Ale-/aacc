<?php

/**
 * Implements hook_panels_layouts().
 */
function aaccTheme_aaccLateral_panels_layouts() {
  $items['aaccLateral'] = array(
    'title' => t('Rejilla para la home de AACC'),
    'category' => t('AACC: lateral'),
    'icon' => 'aaccLateral.png',
    'theme' => 'aaccLateral',
    'admin css' => '../omega_panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'left' => t('Left'),
      'right' => t('Right'),
    ),
  );

  return $items;
}
