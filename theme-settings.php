<?php

// Include the definition of zen_theme_get_default_settings().
include_once './' . drupal_get_path('theme', 'bootstrap') . '/template.theme-registry.inc';


/**
 * Implementation of THEMEHOOK_settings() function.
 *
 * @param $saved_settings
 *   An array of saved settings for this theme.
 * @param $subtheme_defaults
 *   Allow a subtheme to override the default values.
 * @return
 *   A form array.
 */
function bootstrap_settings($saved_settings, $subtheme_defaults = array()) {
  /*
   * The default values for the theme variables. Make sure $defaults exactly
   * matches the $defaults in the template.php file.
   */

  // Add CSS to adjust the layout on the settings page
  drupal_add_css(drupal_get_path('theme', 'bootstrap') . '/css/theme-settings.css', 'theme');

  // Add Javascript to adjust the layout on the settings page
  // drupal_add_js(drupal_get_path('theme', 'bootstrap') . '/css/theme-settings.js', 'theme');

  // Get the default values from the .info file.
  $defaults = bootstrap_theme_get_default_settings('bootstrap');

  // Allow a subtheme to override the default values.
  $defaults = array_merge($defaults, $subtheme_defaults);

  // Merge the saved variables and their default values.
  $settings = array_merge($defaults, $saved_settings);

  $form['bootstrap_dev'] = array(
    '#type' => 'fieldset',
    '#title' => t('Development Settings'),
    '#weight' => 5,
    '#collapsible' => TRUE,
    '#collapsed' => FALSE,
  );

  // Setting for flush all caches
  $form['bootstrap_dev']['bootstrap_block_edit_links'] = array(
     '#type'          => 'checkbox',
     '#title'         => t('Display block editing links.'),
     '#default_value' => $settings['bootstrap_block_edit_links'],
     '#description'   => t('When hovering over blocks, display edit links for the proper users.'),
    );

  // Setting for flush all caches
  $form['bootstrap_dev']['bootstrap_rebuild_registry'] = array(
     '#type'          => 'checkbox',
     '#title'         => t('Rebuild theme registry on every page.'),
     '#default_value' => $settings['bootstrap_rebuild_registry'],
     '#description'   => t('During theme development, it can be very useful to continuously <a href="!link">rebuild theme registry</a>. WARNING: this is a huge performance penalty and must be turned off on production websites.', array('!link' => 'http://drupal.org/node/173880#theme-registry')),
    );

  // Setting to add the showgrid class
  $form['bootstrap_dev']['bootstrap_showgrid'] = array(
     '#type'          => 'checkbox',
     '#title'         => t('Show the bootstrap Grid'),
     '#default_value' => $settings['bootstrap_showgrid'],
     '#description'   => t('During theme development, it can be very useful to turn on the display of the grid.'),
    );
  $form['bootstrap_animated_submit'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Prevent Duplicate Submits'),
    '#default_value' => $settings['bootstrap_animated_submit'],
    '#description'   => t('This can be helpful to prevent users from hitting the submit button twice.'),
    );

  // Return the additional form widgets
  return $form;
}
