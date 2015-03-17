<?php

/**
 * Implements hook_panels_layouts().
 */
function aaccTheme_aaccDashboardsSimple_panels_layouts() {
  $items['aaccDashboardsSimple'] = array(
    'title' => t('Rejilla simple para los escritorios de AACC'),
    'category' => t('AACC: dashboards simple'),
    'icon' => 'aaccDashboardsSimple.png',
    'theme' => 'aaccDashboardsSimple',
    'admin css' => '../omega_panels_admin_12.css',
    'regions' => array(
      'left' => t('Left'),
      'right' => t('Right'),
    ),
  );

  return $items;
}
