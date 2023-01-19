<?php

/**
 * Adds privacy fields to Theme Options
 *
 * @package blockhaus
 */

 if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_63850f8ec0ee0',
    'title' => 'Privacy',
    'fields' => array(
      array(
        'key' => 'field_6385348b5b320',
        'label' => 'Cookies Settings',
        'name' => 'cookies_settings',
        'aria-label' => '',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_63850f8f80106',
            'label' => 'Enable necessary cookies',
            'name' => 'cookies_set',
            'aria-label' => '',
            'type' => 'true_false',
            'instructions' => 'Select \'Yes\' to enable the cookies consent bar.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
            'ui' => 1,
          ),
        ),
      ),
      array(
        'key' => 'field_638535a9c9eda',
        'label' => 'Analytics',
        'name' => 'analytics_settings',
        'aria-label' => '',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_63850f8f80106',
              'operator' => '==',
              'value' => '1',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_638529c7df8a4',
            'label' => 'Analytics cookies',
            'name' => 'analytics_cookies_set',
            'aria-label' => '',
            'type' => 'true_false',
            'instructions' => 'Select \'Yes\' to enable the analytics cookies option in the consent bar.',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
            'ui' => 1,
          ),
          array(
            'key' => 'field_638532b97dd66',
            'label' => 'Analytics tracking code',
            'name' => 'analytics_tracking',
            'aria-label' => '',
            'type' => 'text',
            'instructions' => 'Add your analytics tracking code here',
            'required' => 0,
            'conditional_logic' => array(
              array(
                array(
                  'field' => 'field_638529c7df8a4',
                  'operator' => '==',
                  'value' => '1',
                ),
              ),
            ),
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'maxlength' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
          ),
        ),
      ),
      array(
        'key' => 'field_638534b23bfca',
        'label' => 'Consent panel settings',
        'name' => 'consent_panel_settings',
        'aria-label' => '',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => array(
          array(
            array(
              'field' => 'field_63850f8f80106',
              'operator' => '==',
              'value' => '1',
            ),
          ),
        ),
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_63851753514b8',
            'label' => 'Privacy page',
            'name' => 'privacy_page',
            'aria-label' => '',
            'type' => 'page_link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'post_type' => array(
              0 => 'page',
            ),
            'taxonomy' => '',
            'allow_archives' => 0,
            'multiple' => 0,
            'allow_null' => 0,
          ),
          array(
            'key' => 'field_63851779514b9',
            'label' => 'Contact page',
            'name' => 'contact_page',
            'aria-label' => '',
            'type' => 'page_link',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'post_type' => array(
              0 => 'page',
            ),
            'taxonomy' => '',
            'allow_archives' => 1,
            'multiple' => 0,
            'allow_null' => 0,
          ),
          array(
            'key' => 'field_6385cd5a3f53b',
            'label' => 'Theme',
            'name' => 'theme',
            'aria-label' => '',
            'type' => 'radio',
            'instructions' => 'Select a theme for the cookie consent panel',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'choices' => array(
              'light' => 'Light',
              'c_darkmode' => 'Dark',
              'theme_turquoise' => 'Turquoise',
              'theme_funky' => 'Light & Blue',
            ),
            'default_value' => 'light',
            'return_format' => 'value',
            'allow_null' => 0,
            'other_choice' => 0,
            'layout' => 'horizontal',
            'save_other_choice' => 0,
          ),
        ),
      ),
      array(
        'key' => 'field_63c6a981e2295',
        'label' => 'Social media privacy settings',
        'name' => 'social_media_settings',
        'aria-label' => '',
        'type' => 'group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'layout' => 'block',
        'sub_fields' => array(
          array(
            'key' => 'field_63c6a981e2296',
            'label' => 'Enhanced privacy',
            'name' => 'enhanced_privacy',
            'aria-label' => '',
            'type' => 'true_false',
            'instructions' => 'Enabling this setting will hide embedded content to users until they click a button to accept related cookies',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'message' => '',
            'default_value' => 0,
            'ui_on_text' => '',
            'ui_off_text' => '',
            'ui' => 1,
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'theme-options',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  
  endif;		