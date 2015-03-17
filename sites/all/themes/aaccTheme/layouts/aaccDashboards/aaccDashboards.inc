<?php

/**
 * Implements hook_panels_layouts().
 */
function aaccTheme_aaccDashboards_panels_layouts() {
  $items['aaccDashboards'] = array(
    'title' => t('Rejilla para los dashboards de AACC'),
    'category' => t('AACC: dashboards'),
    'icon' => 'aaccDashboards.png',
    'theme' => 'aaccDashboards',
    'admin css' => '../omega_panels_admin_12.css',
    'regions' => array(
      'left' => t('Left'),
      'center' => t('Center'),
      'right' => t('Right'),  
      'bottom_left' => t('Bottom left'), 
      'bottom_right' => t('Bottom right'), 
    ),
  );

  return $items;
}
