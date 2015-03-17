<?php

/**
 * Template del tema AACC
 */

/**
 * Implements hook_form_alter()
 * Modifica los formularios por defecto
 */

function aaccTheme_form_alter(&$form, &$form_state, $form_id) {

 /**
   * Bloque de búsqueda
  */

  if ($form_id == 'search_block_form') {
    $form['search_block_form']['#title'] = t('Search'); // Change the text on the label element
    $form['search_block_form']['#title_display'] = 'invisible'; // Toggle label visibilty
    $form['search_block_form']['#default_value'] = t('Buscar'); // Set a default value for the textfield
    //$form['actions']['submit']['#value'] = t('GO!'); // Change the text on the submit button
    $form['actions']['submit'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/assets/lupa.png');

    // Prevent user from searching the default text
    $form['#attributes']['onsubmit'] = "if(this.search_block_form.value=='Buscar'){ alert('Introduce un término de búsqueda!'); return false; }";

    // Alternative (HTML5) placeholder attribute instead of using the javascript
    $form['search_block_form']['#attributes']['placeholder'] = t('Buscar');
  
 /**
   * Bloque de login
  */

  } else if ($form_id == 'user_login_block') {
    //Pasamos los títulos de los inputs a los placeholders
    $form['name']['#title'] = Null;
    $form['name']['#attributes'] = array('placeholder' => t('Usuario'));
    $form['pass']['#title'] = Null;
    $form['pass']['#attributes'] = array('placeholder' => t('Contraseña'));
    //Cambiamos los textos de los links a una línea
    $form['links']['#markup'] = '<a class="user-register" href="/user/register">'.t('Regístrate').'</a>'.' · <a class="user-password" href="/user/password">'.t('¿Olvidaste tu contraseña?').'</a>';
    //Quitamos el submit
    //$form['actions']['#attributes']['class'][] = 'invisible';
  } 
}


/**
 * Implements hook_preprocess_block()
 * http://atendesigngroup.com/blog/adding-css-classes-blocks-drupal
 * Procesa el bloque de login para añadir clases que lo hacen desplegable mediante jQuery
 */
 
function aaccTheme_preprocess_block(&$vars) {
  /* Creamos variables para hacer el código más legible */
  $block_id = $vars['block']->module . '-' . $vars['block']->delta;
  $classes = &$vars['classes_array'];
  $title_classes = &$vars['title_attributes_array']['class'];
  $content_classes = &$vars['content_attributes_array']['class'];
  $content = &$vars['content_attributes_array'];

  /* Add global classes to all blocks */
  $title_classes[] = 'block-title';
  $content_classes[] = 'block-content';
 
  /* Uncomment the line below to see variables you can use to target a field */
  //print $block_id . '<br/>';
 
  /* Add classes based on the block delta. */
  switch ($block_id) {
    /* System Navigation block */
    case 'user-login':
      $title_classes[] = 'collapsable iconic';
      $content_classes[] = 'closed';
      break;
    case 'system-user-menu':
      $content_classes[] = 'iconic';
      break;
  }
}


/**
 * Implements hook_menu_local_tasks ()
 * Invisibiliza los tabs primarios en las páginas de usuario
 */

function aaccTheme_menu_local_tasks(&$variables) {
  $output = '';
  
  if (arg(0) == 'user' || arg(1) == 'colectivos' || arg(1) == 'grupos') {
    return;
  }

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<h2 class="element-invisible">' . t('Primary tabs') . '</h2>';
    $variables['primary']['#prefix'] .= '<ul class="tabs primary">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<h2 class="element-invisible">' . t('Secondary tabs') . '</h2>';
    $variables['secondary']['#prefix'] .= '<ul class="tabs secondary">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }

  return $output;
}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function aaccTheme_preprocess_maintenance_page(&$variables) {
  drupal_add_css(drupal_get_path('theme', 'aaccTheme') . '/css/global.css');
}

function aaccTheme_preprocess_node(&$variables) {
  $variables['custom_submitted'] = t('Artículo escrito el · !datetime', array('!datetime' => $variables['date']));
  
  //Social networks links --> links to be rendered with font-awesome
  global $base_url;
  $u = $base_url . $variables['node_url'];
  $prefix   = t('Comparte ');
  $twitter  = "http://twitter.com/share?url=" . $u . "&text=" . $variables['title'];
  $facebook = "http://facebook.com/sharer.php?u=" . $u . "&t=" . $variables['title'];
  $google   = "http://plus.google.com/share?url=" . $u; 
  $output   = "<span class='social icon'><span>" . $prefix . "<a href='" . $twitter . "'></a><a href='". $facebook . "'></a><a href='" . $google . "'></a></span></span>";
  $variables['share'] = $output;
}

