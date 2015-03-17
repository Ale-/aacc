<?php

/**
 * Implements hook_panels_layouts().
 */
function aaccTheme_aaccPublicProfiles_panels_layouts() {
  $items['aaccPublicProfiles'] = array(
    'title' => t('Rejilla para los perfiles públicos de usuarios y colectivos'),
    'category' => t('AACC: Public Profiles'),
    'icon' => 'aaccHome.png',
    'theme' => 'aaccPublicProfiles',
    'admin css' => '../omega_panels_admin_12.css',
    'regions' => array(
      'top' => t('Top'),
      'left_top_left' => t('Left top left'),
      'left_top_right' => t('Left top right'),
      'left_bottom' => t('Left bottom'),
      'right' => t('Right'),
    ),
  );

  return $items;
}
