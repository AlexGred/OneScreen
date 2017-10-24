<?php

/**
 * @file
 * Theme setting callbacks for the Adminimal theme.
 */

/**
 * Implements hook_form_FORM_ID_alter().
 *
 * @param $form
 *   The form.
 * @param $form_state
 *   The form state.
 */

function onescreen_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['onescreen_settings'] = array(
    '#type' => 'fieldset',
    '#title' => t('onescreen Settings'),
    '#collapsible' => FALSE,
    '#collapsed' => FALSE,
  );
  $form['onescreen_settings']['show_breadcrumbs'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show breadcrumbs in a page'),
    '#default_value' => theme_get_setting('show_breadcrumbs', 'onescreen'),
    '#description'   => t("Check this option to show breadcrumbs in page. Uncheck to hide."),
  );
  $form['onescreen_settings']['slideshow'] = array(
    '#type' => 'fieldset',
    '#title' => t('Front Page Slideshow'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['onescreen_settings']['slideshow']['slideshow_display'] = array(
    '#type' => 'checkbox',
    '#title' => t('Show slideshow'),
    '#default_value' => theme_get_setting('slideshow_display', 'onescreen'),
    '#description'   => t("Check this option to show Slideshow in front page. Uncheck to hide."),
  );
  $form['onescreen_settings']['slideshow']['slide'] = array(
    '#markup' => t('You can change the description and URL of each slide in the following Slide Setting fieldsets.'),
  );
  $form['onescreen_settings']['slideshow']['slide1'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 1'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['onescreen_settings']['slideshow']['slide1']['slide1_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide1_head', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide1']['slide1_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide1_desc', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide1']['slide1_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide1_url', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide1']['slide1_img'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Img'),
    '#default_value' => theme_get_setting('slide1_img', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide2'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 2'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['onescreen_settings']['slideshow']['slide2']['slide2_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide2_head', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide2']['slide2_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide2_desc', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide2']['slide2_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide2_url', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide2']['slide2_img'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Img'),
    '#default_value' => theme_get_setting('slide1_img', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide3'] = array(
    '#type' => 'fieldset',
    '#title' => t('Slide 3'),
    '#collapsible' => TRUE,
    '#collapsed' => TRUE,
  );
  $form['onescreen_settings']['slideshow']['slide3']['slide3_head'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Headline'),
    '#default_value' => theme_get_setting('slide3_head', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide3']['slide3_desc'] = array(
    '#type' => 'textarea',
    '#title' => t('Slide Description'),
    '#default_value' => theme_get_setting('slide3_desc', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide3']['slide3_url'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide URL'),
    '#default_value' => theme_get_setting('slide3_url', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slide3']['slide3_img'] = array(
    '#type' => 'textfield',
    '#title' => t('Slide Img'),
    '#default_value' => theme_get_setting('slide1_img', 'onescreen'),
  );
  $form['onescreen_settings']['slideshow']['slideimage'] = array(
    '#markup' => t('To change the Slide Images, Replace the slide-image-1.jpg, slide-image-2.jpg and slide-image-3.jpg in the images folder of the theme folder.'),
  );
}
