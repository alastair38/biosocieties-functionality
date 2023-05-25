<?php

/**
 * Adds content fields to the post type edit options
 *
 * @package blockhaus
 */

if( function_exists('acf_add_local_field_group') ):

  // acf_add_local_field_group(array(
  //   'key' => 'group_62b1e2cd90a7e',
  //   'title' => 'Header layout',
  //   'fields' => array(
  //     array(
  //       'key' => 'field_62b1e2d7fc282',
  //       'label' => 'Use header background image',
  //       'name' => 'background_image_layout',
  //       'type' => 'true_false',
  //       'instructions' => 'Turn this on if you are using the featured image header background for this page.',
  //       'required' => 0,
  //       'conditional_logic' => 0,
  //       'wrapper' => array(
  //         'width' => '',
  //         'class' => '',
  //         'id' => '',
  //       ),
  //       'message' => '',
  //       'default_value' => 0,
  //       'ui' => 1,
  //       'ui_on_text' => '',
  //       'ui_off_text' => '',
  //     ),
    
  //   ),
  //   'location' => array(
  //     array(
  //       array(
  //         'param' => 'post_type',
  //         'operator' => '!=',
  //         'value' => 'journal_editions',
  //       ),
  //     )
  //   ),
  //   'menu_order' => 0,
  //   'position' => 'side',
  //   'style' => 'default',
  //   'label_placement' => 'top',
  //   'instruction_placement' => 'label',
  //   'hide_on_screen' => '',
  //   'active' => true,
  //   'description' => '',
  //   'show_in_rest' => 0,
  // ));
  
  acf_add_local_field_group(array(
    'key' => 'group_629a6742c9307',
    'title' => 'Social Sharing',
    'fields' => array(
      array(
        'key' => 'field_629a6759f84f7',
        'label' => '',
        'name' => 'sharing_enabled',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 1,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '!=',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  
  acf_add_local_field_group(array(
    'key' => 'group_646f19c450c04',
    'title' => 'Article type',
    'fields' => array(
      array(
        'key' => 'field_646f19cbc11cd',
        'label' => '',
        'name' => 'type',
        'type' => 'button_group',
        'instructions' => 'Select the type of content',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'Blog' => 'Blog',
          'News' => 'News',
          'Event' => 'Event',
        ),
        'allow_null' => 0,
        'default_value' => 'blog',
        'layout' => 'horizontal',
        'return_format' => 'value',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'post',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  

  acf_add_local_field_group(array(
    'key' => 'group_62beb7b80c718',
    'title' => 'External Link',
    'fields' => array(
      array(
        'key' => 'field_62beb80218002',
        'label' => '',
        'name' => '',
        'type' => 'message',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => 'If this piece of content refers to an external blog post or something similar, add the external link here. This will override the \'View Article\' link and direct site visitors to the external content.',
        'new_lines' => 'wpautop',
        'esc_html' => 0,
      ),
      array(
        'key' => 'field_62beb88718003',
        'label' => 'Name of original site',
        'name' => 'external_site',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_62beb8bf18004',
        'label' => 'Link to original content',
        'name' => 'external_link',
        'type' => 'url',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '!=',
          'value' => 'page',
        ),
      ),
    ),
    'menu_order' => 10,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));

  acf_add_local_field_group(array(
    'key' => 'group_635021ec6a8d9',
    'title' => 'Showcase grid display settings',
    'fields' => array(
      array(
        'key' => 'field_63514c2dae525',
        'label' => 'Alternative layout',
        'name' => 'layout_alt',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 1,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_6351263ebc58a',
        'label' => 'Title Block',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_63512569962da',
        'label' => 'Title',
        'name' => 'showcase_title',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_63512585962db',
        'label' => 'Description',
        'name' => 'showcase_description',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => 3,
        'new_lines' => '',
      ),
      array(
        'key' => 'field_635125a2962dc',
        'label' => 'Link',
        'name' => 'showcase_link',
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
          1 => 'post',
          2 => 'articles-and-reviews',
          3 => 'journal_editions',
        ),
        'taxonomy' => '',
        'allow_null' => 1,
        'allow_archives' => 1,
        'multiple' => 0,
      ),
      array(
        'key' => 'field_63512672c4dd3',
        'label' => 'Content Block',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'top',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_6350221b6eac0',
        'label' => 'Items to show',
        'name' => 'items',
        'type' => 'number',
        'instructions' => 'Showcase up to 6 items of content',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => '',
        'max' => 7,
        'step' => '',
      ),
      array(
        'key' => 'field_63503203e3172',
        'label' => 'Grid columns',
        'name' => 'grid_columns',
        'type' => 'number',
        'instructions' => 'Choose the number of items to show per row (between 2 and 4)',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'min' => 2,
        'max' => 4,
        'step' => '',
      ),
      array(
        'key' => 'field_635022572d252',
        'label' => 'Content type',
        'name' => 'content_type',
        'type' => 'radio',
        'instructions' => 'Choose the content type you wish to showcase',
        'required' => 1,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'post' => 'News and Features',
          'articles-and-reviews' => 'Articles and Reviews',
          'journal_editions' => 'Journal Editions',
        ),
        'allow_null' => 0,
        'other_choice' => 0,
        'default_value' => '',
        'layout' => 'horizontal',
        'return_format' => 'array',
        'save_other_choice' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/showcase-grid',
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

  acf_add_local_field_group(array(
    'key' => 'group_63516f6fb8375',
    'title' => 'Showcase single content display settings',
    'fields' => array(
      array(
        'key' => 'field_63516f6fd1648',
        'label' => 'Select content item',
        'name' => 'showcase_content',
        'type' => 'post_object',
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
          1 => 'post',
          2 => 'articles-and-reviews',
          3 => 'journal_editions',
        ),
        'taxonomy' => '',
        'allow_null' => 0,
        'multiple' => 0,
        'return_format' => 'object',
        'ui' => 1,
      ),
      array(
        'key' => 'field_63516f6fca1db',
        'label' => 'Description',
        'name' => 'showcase_description',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/showcase-single',
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

  acf_add_local_field_group(array(
    'key' => 'group_6357c9b05c8dd',
    'title' => 'Set as featured',
    'fields' => array(
      array(
        'key' => 'field_6357c9c1343a9',
        'label' => 'Featured article',
        'name' => 'featured_article',
        'type' => 'button_group',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'yes' => 'Yes',
          'no' => 'No',
        ),
        'allow_null' => 0,
        'default_value' => 'no',
        'layout' => 'horizontal',
        'return_format' => 'value',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'articles-and-reviews',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'side',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  
  acf_add_local_field_group(array(
    'key' => 'group_63775bbae46db',
    'title' => 'Profile builder',
    'fields' => array(
      array(
        'key' => 'field_63775bc010bfb',
        'label' => 'Get user',
        'name' => 'user_profile',
        'type' => 'user',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'role' => '',
        'allow_null' => 0,
        'multiple' => 0,
        'return_format' => 'array',
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'block',
          'operator' => '==',
          'value' => 'acf/user-profile',
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
  
  acf_add_local_field_group(array(
    'key' => 'group_6377500df08ec',
    'title' => 'Profile Details',
    'fields' => array(
      array(
        'key' => 'field_6377525390bf9',
        'label' => 'Profile',
        'name' => '',
        'type' => 'message',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => 'acf-profile-label',
          'id' => '',
        ),
        'message' => '',
        'new_lines' => 'wpautop',
        'esc_html' => 0,
      ),
      array(
        'key' => 'field_637750e96b522',
        'label' => 'Image',
        'name' => 'profile_image',
        'type' => 'image',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'return_format' => 'array',
        'preview_size' => 'medium',
        'library' => 'all',
        'min_width' => '',
        'min_height' => '',
        'min_size' => '',
        'max_width' => '',
        'max_height' => '',
        'max_size' => '',
        'mime_types' => '',
      ),
      array(
        'key' => 'field_63775015b4fcb',
        'label' => 'Biography',
        'name' => 'profile_biography',
        'type' => 'wysiwyg',
        'instructions' => 'This content will appears on the individual biography page AND the main ABOUT page',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'basic',
        'media_upload' => 0,
        'delay' => 0,
      ),
      array(
        'key' => 'field_63c17a1581a5a',
        'label' => 'Additional Biography Content',
        'name' => 'profile_biography_extra',
        'type' => 'wysiwyg',
        'instructions' => 'This content will only appear on the individual biography page and not the main \'About\' page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'tabs' => 'all',
        'toolbar' => 'basic',
        'media_upload' => 0,
        'delay' => 0,
      ),
      array(
        'key' => 'field_63775b5571c0d',
        'label' => 'Quote',
        'name' => 'profile_quote',
        'type' => 'textarea',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => '',
        'new_lines' => '',
      ),
      array(
        'key' => 'field_637772ace2f85',
        'label' => 'Alternate profile link',
        'name' => 'profile_link',
        'type' => 'url',
        'instructions' => 'This will override the default link to your profile page on this website and instead point the link to an external website or your choosing.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_63775033b4fcc',
        'label' => 'Links',
        'name' => 'links',
        'type' => 'repeater',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'collapsed' => '',
        'min' => 0,
        'max' => 0,
        'layout' => 'row',
        'button_label' => 'Add link',
        'sub_fields' => array(
          array(
            'key' => 'field_6377503eb4fcd',
            'label' => 'Link text',
            'name' => 'link_text',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_6377504eb4fce',
            'label' => 'Link URL',
            'name' => 'link_url',
            'type' => 'url',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
          ),
          array(
            'key' => 'field_637e286cb71dd',
            'label' => 'Publication',
            'name' => 'link_publication',
            'type' => 'text',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'default_value' => '',
            'placeholder' => '',
            'prepend' => '',
            'append' => '',
            'maxlength' => '',
          ),
          array(
            'key' => 'field_637e286ab71dc',
            'label' => 'Image (optional)',
            'name' => 'link_image',
            'type' => 'image',
            'instructions' => '',
            'required' => 0,
            'conditional_logic' => 0,
            'wrapper' => array(
              'width' => '',
              'class' => '',
              'id' => '',
            ),
            'return_format' => 'array',
            'preview_size' => 'medium',
            'library' => 'all',
            'min_width' => '',
            'min_height' => '',
            'min_size' => '',
            'max_width' => '',
            'max_height' => '',
            'max_size' => '',
            'mime_types' => '',
          ),
        ),
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'user_form',
          'operator' => '==',
          'value' => 'all',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'seamless',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
    'show_in_rest' => 0,
  ));
  
  
  
  endif;		
