<?php

/**
 * Implements hook_panels_layouts().
 */
function aaccTheme_aaccItem_panels_layouts() {
  $items['aaccItem'] = array(
    'title' => t('Rejilla para la home de AACC'),
    'category' => t('AACC: item'),
    'icon' => 'aaccItem.png',
    'theme' => 'aaccItem',
    'admin css' => '../omega_panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'left_top' => t('Left top'),
      'left_bottom_left' => t('Left bottom left'),
      'left_bottom_right' => t('Left bottom right'),
      'right' => t('Right'),
      'bottom' => t('Bottom'),
    ),
  );

  return $items;
}
