<?php

/**
 * Implements hook_panels_layouts().
 */
function aaccTheme_aaccHome_panels_layouts() {
  $items['aaccHome'] = array(
    'title' => t('Rejilla para la home de AACC'),
    'category' => t('AACC: home'),
    'icon' => 'aaccHome.png',
    'theme' => 'aaccHome',
    'admin css' => '../omega_panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'left_top' => t('Left top'),
      'left_bottom_left' => t('Left middle left'),
      'left_bottom_right' => t('Left middle right'),
      'left_bottom_bottom_left' => t('Left bottom left'),
      'left_bottom_bottom_right' => t('Left bottom right'),
      'right' => t('Right'),
      'bottom' => t('Bottom'),
    ),
  );

  return $items;
}
