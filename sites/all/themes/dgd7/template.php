<?php

/**
 * Add body classes if certain regions have content.
 */
function dgd7_preprocess_html(&$variables) {
  if (!empty($variables['page']['featured'])) {
    $variables['classes_array'][] = 'featured';
  }

  if (!empty($variables['page']['triptych_first'])
    || !empty($variables['page']['triptych_middle'])
    || !empty($variables['page']['triptych_last'])) {
    $variables['classes_array'][] = 'triptych';
  }

  if (!empty($variables['page']['footer_firstcolumn'])
    || !empty($variables['page']['footer_secondcolumn'])
    || !empty($variables['page']['footer_thirdcolumn'])
    || !empty($variables['page']['footer_fourthcolumn'])) {
    $variables['classes_array'][] = 'footer-columns';
  }

  $viewport = array(
       '#tag' => 'meta',
       '#attributes' => array(
         'name' => 'viewport',
         'content' => 'width=device-width, initial-scale=1',
       ),
  );
  
  $noscript = array(
       '#tag' => 'noscript',
       '#value' => '<img height="1" width="1"
src="https://www.facebook.com/tr?id=1946794108938764&ev=PageView
&noscript=1"/>',
  );



  // Add conditional stylesheets for IE
  drupal_add_css(path_to_theme() . '/css/ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 7', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css(path_to_theme() . '/css/ie6.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'IE 6', '!IE' => FALSE), 'preprocess' => FALSE));
  drupal_add_css('.fieldset-description{color:red;font-weight:700;}');
  drupal_add_html_head($viewport, 'viewport');
  drupal_add_html_head($noscript, 'noscript');
  drupal_add_js('https://www.google.com/recaptcha/api.js', 'external');
  drupal_add_js('https://www.googletagmanager.com/gtag/js?id=UA-63014058-1', 'external');

  drupal_add_js(path_to_theme() . '/js/jquery.bootstrap.newsbox.min.js', array(
      'type' => 'file',
      'scope' => 'footer',
      'weight' => 1,));
  drupal_add_js(path_to_theme() . '/js/jquery.magnific-popup.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'weight' => 2,));
     drupal_add_js(path_to_theme() . '/assets/js/libs/handlebars.min.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'weight' => 3,));

     drupal_add_js(path_to_theme() . '/assets/js/plugins/storeLocator/jquery.storelocator.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'weight' => 5,));
  drupal_add_js(path_to_theme() . '/js/custom.js', array(
  'type' => 'file',
  'scope' => 'footer',
  'weight' => 6,));
  
  drupal_add_js(path_to_theme() . '/js/facebook.js', array(
  'type' => 'file',
  'scope' => 'header',
  ));
  
  
}

/**
 * Override or insert variables into the page template for HTML output.
 */
function dgd7_process_html(&$variables) {
  // Hook into color.module.
  if (module_exists('color')) {
    _color_html_alter($variables);
  }
}

/**
 * Override or insert variables into the page template.
 */
function dgd7_process_page(&$variables) {



  // Hook into color.module.
  if (module_exists('color')) {
    _color_page_alter($variables);
  }
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
  // Since the title and the shortcut link are both block level elements,
  // positioning them next to each other is much simpler with a wrapper div.
  if (!empty($variables['title_suffix']['add_or_remove_shortcut']) && $variables['title']) {
    // Add a wrapper div using the title_prefix and title_suffix render elements.
    $variables['title_prefix']['shortcut_wrapper'] = array(
      '#markup' => '<div class="shortcut-wrapper clearfix">',
      '#weight' => 100,
    );
    $variables['title_suffix']['shortcut_wrapper'] = array(
      '#markup' => '</div>',
      '#weight' => -99,
    );
    // Make sure the shortcut link is the first item in title_suffix.
    $variables['title_suffix']['add_or_remove_shortcut']['#weight'] = -100;
  }
}

/**
 * Implements hook_preprocess_maintenance_page().
 */
function dgd7_preprocess_maintenance_page(&$variables) {
    if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
  // By default, site_name is set to Drupal if no db connection is available
  // or during site installation. Setting site_name to an empty string makes
  // the site and update pages look cleaner.
  // @see template_preprocess_maintenance_page
  if (!$variables['db_is_active']) {
    $variables['site_name'] = '';
  }
  drupal_add_css(drupal_get_path('theme', 'dgd7') . '/css/maintenance-page.css');
}

/**
 * Override or insert variables into the maintenance page template.
 */
function dgd7_process_maintenance_page(&$variables) {
  // Always print the site name and slogan, but if they are toggled off, we'll
  // just hide them visually.
  $variables['hide_site_name']   = theme_get_setting('toggle_name') ? FALSE : TRUE;
  $variables['hide_site_slogan'] = theme_get_setting('toggle_slogan') ? FALSE : TRUE;
  if ($variables['hide_site_name']) {
    // If toggle_name is FALSE, the site_name will be empty, so we rebuild it.
    $variables['site_name'] = filter_xss_admin(variable_get('site_name', 'Drupal'));
  }
  if ($variables['hide_site_slogan']) {
    // If toggle_site_slogan is FALSE, the site_slogan will be empty, so we rebuild it.
    $variables['site_slogan'] = filter_xss_admin(variable_get('site_slogan', ''));
  }
}

/**
 * Override or insert variables into the node template.
 */
function dgd7_preprocess_node(&$variables) {
  if ($variables['view_mode'] == 'full' && node_is_page($variables['node'])) {
    $variables['classes_array'][] = 'node-full';
    $node =& $variables['node'];
    if ($node->type == 'admin') {
      drupal_add_css(path_to_theme() . '/css/general.css');
      drupal_add_css('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/bootstrap-material-design.min.css', 'external');
      drupal_add_css('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/css/ripples.min.css', 'external');
      drupal_add_css('https://fonts.googleapis.com/css?family=Roboto:400,500', 'external');
      drupal_add_css('https://fonts.googleapis.com/icon?family=Material+Icons', 'external');
      drupal_add_css(path_to_theme() . '/css/bootstrap-material-datetimepicker.css');

      drupal_add_js(path_to_theme() . '/js/dashboard.js', array(
      'type' => 'file',
      'scope' => 'footer',
      'weight' => 7,));


      drupal_add_js('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js', 'external');
      drupal_add_js('https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.5.10/js/ripples.min.js', 'external');
      drupal_add_js(path_to_theme() . '/js/moment-with-locales.min.js', array(
      'type' => 'file',
      'scope' => 'header'
      ));
      drupal_add_js(path_to_theme() . '/js/bootstrap-material-datetimepicker.js');
      drupal_add_js(path_to_theme() . '/js/jquery.tabletoCSV.js');
    }
  }
}

/**
 * Override or insert variables into the block template.
 */
function dgd7_preprocess_block(&$variables) {
  // In the header region visually hide block titles.
  if ($variables['block']->region == 'header') {
    $variables['title_attributes_array']['class'][] = 'element-invisible';
  }
}

/**
 * Implements theme_menu_tree().
 */
function dgd7_menu_tree($variables) {
  return '<ul class="menu clearfix">' . $variables['tree'] . '</ul>';
}

/**
 * Implements theme_field__field_type().
 */
function dgd7_field__taxonomy_term_reference($variables) {
  $output = '';

  // Render the label, if it's not hidden.
  if (!$variables['label_hidden']) {
    $output .= '<h3 class="field-label">' . $variables['label'] . ': </h3>';
  }

  // Render the items.
  $output .= ($variables['element']['#label_display'] == 'inline') ? '<ul class="links inline">' : '<ul class="links">';
  foreach ($variables['items'] as $delta => $item) {
    $output .= '<li class="taxonomy-term-reference-' . $delta . '"' . $variables['item_attributes'][$delta] . '>' . drupal_render($item) . '</li>';
  }
  $output .= '</ul>';

  // Render the top-level DIV.
  $output = '<div class="' . $variables['classes'] . (!in_array('clearfix', $variables['classes_array']) ? ' clearfix' : '') . '"' . $variables['attributes'] .'>' . $output . '</div>';

  return $output;
}


function dgd7_preprocess_page(&$variables,$hook) {
    global $base_url;
     $path = '/sites/default/files/';
    $theme = '/sites/all/themes/dgd7/img/';
    $file = '/sites/all/themes/dgd7/';
    $variables['image_url'] = $base_url.$path;
    $variables['theme_url'] = $base_url.$theme;
    $variables['file_url'] = $base_url.$file;
    $variables['base_url'] = $base_url;
     if (isset($variables['node']->type)) {
        $nodetype = $variables['node']->type;
        $variables['theme_hook_suggestions'][] = 'page__' . $nodetype;
    }
}
