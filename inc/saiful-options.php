<?php 
 // Control core classes for avoid errors
if( class_exists( 'CSF' ) ) {

    //
    // Set a unique slug-like ID
    $prefix = 'saiful_options';
  
    //
    // Create options
    CSF::createOptions( $prefix, array(
      'menu_title' => 'Inspire One Options',
      'menu_slug'  => 'inspire-one',
      'menu_type'  => 'submenu',
      'sticky_header'  => true,
      'theme'  => 'dark',
      'ajax_save'  => true,
      'menu_parent'  => 'themes.php',
      'framework_title' => 'Inspire One -<small> Saiful Kader </small>',
    ) );
  
    //
    // Create a section
    CSF::createSection( $prefix, array(
        'id' => 'header_options',
      'title'  => 'Header Options',
    ));

CSF::createSection($prefix , array(
    'parent' => 'header_options',
    'title' => 'Header Left',
    'fields' => array(
  
        //switcher
        array(
            'id'    => 'header_op_switch',
            'type'  => 'switcher',
            'title' => 'Header Email/Phone',
            'default'    => true
          ),
        // A text field
        array(
          'id'    => 'header_email',
          'type'  => 'text',
          'title' => 'Header Email',
          'dependency' => array( 'header_op_switch', '==', 'true' ) // check for true/false by field id
        ),
        array(
            'id'    => 'header_phone',
            'type'  => 'text',
            'title' => 'Header Phone',
            'dependency' => array( 'header_op_switch', '==', 'true' ) // check for true/false by field id
          ),
  
      )
));


CSF::createSection($prefix , array(
    'parent' => 'header_options',
    'title' => 'Header Right',
    'fields' => array(
  
        //
        // A text field
        array(
          'id'    => 'header_icons',
          'type'  => 'group',
          'title' => 'Header Icons',
          
          'fields' => array(
            array(
                'id' => 'social_title',
                'title' => 'Socail Title',
                'type' => 'text'
            ),
            array(
                'id' => 'social_icon',
                'title' => 'Socail Icon',
                'type' => 'icon'
            ),
            array(
                'id' => 'social_link',
                'title' => 'Socail link',
                'type' => 'text'
            ),
          )
        )
        
  
      )
));
CSF::createSection($prefix , array(
    'parent' => 'header_options',
    'title' => 'Header Logo',
    'fields' => array(
        array(
            'id' => 'header_logo',
            'type' => 'media',
            'title' => 'Upload Your Logo ',
            // 'dependency' => array('header_logo_text' ,'==', 'true')
        ),
        array(
            'id' => 'header_logo_text',
            'type' => 'text',
            'title' => 'Write Your Logo Text ',
            // 'dependency' => array('header_logo' ,'==', 'true')
        
    ),
    )
));


CSF::createSection($prefix, array(
  'parent' => 'header_options',
  'title' => 'Header Background & Color',
  'fields' => array(
    array(
      'id' => 'header_back',
      'type' => 'background',
      'title' => 'Header Background',
      'output' => array('.header-top')
    ),
    array(
      'id' => 'header_typography',
      'type' => 'typography',
      'title' => 'Header Typography & Color',
      'output' => array('.header-top a')
    ),
    array(
      'id' => 'header_color_hover',
      'type' => 'color',
      'title' => 'Header Hover Color',
      'output' => array('.header-top a:hover')
    ),
  )

));
 // Create a about section
 CSF::createSection( $prefix, array(
  'id' => 'about_options',
'title'  => 'About Section',
));
CSF::createSection($prefix , array(
      'parent' => 'about_options',
      'title' => 'About Heading',
      'fields' => array(
        array(
          'id' => 'about_sub_title',
          'title' => 'About Sub Title',
          'type' => 'text',
        ),
        array(
          'id' => 'about_title',
          'title' => 'About Title',
          'type' => 'text',
        ),
        array(
          'id' => 'about_desc',
          'title' => 'About Description',
          'type' => 'textarea',
        ),

      )
));

CSF::createSection($prefix, array(
  'parent' => 'about_options',
  'title' => 'About Info',
  'fields' => array(
    array(
      'id'    => 'about_section_switch',
      'type'  => 'switcher',
      'title' => 'About Section ON/OFF',
      'default'    => true
    ),
    array(
      'id' => 'about_heading_title',
      'type' => 'text',
      'title' => 'About Heading Title',
      'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
        ),
    array(
      'id' => 'about_heading_desc',
      'type' => 'textarea',
      'title' => 'About Heading Description',
      'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
        ),
     array(
       'id' => 'about_heading_btn_text',
        'type' => 'text',
        'title' => 'About Heading Btn Text',
        'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
           ),
      array(
        'id' => 'about_heading_btn_link',
        'type' => 'text',
        'title' => 'About Heading Btn Link',
        'dependency' => array( 'about_section_switch', '==', 'true' ) // check for true/false by field id
          ),
  )
));
      
    CSF::createSection($prefix , array(
      'parent' => 'about_options',
      'title' => 'Single About Section',
      'fields' => array(
        array(
          'id'        => 'single_group',
          'type'      => 'group',
          'title'     => 'Single Section',
          'fields'    => array(
            array(
              'id' => 'single_title',
              'type' => 'text',
              'title' => 'About Single Title'
            ),
            array(
              'id' => 'single_icon',
              'type' => 'icon',
              'title' => 'About Single Icon'
            ),
            array(
              'id' => 'single_desc',
              'type' => 'textarea',
              'title' => 'About Single Description'
            )
          )
        )
      )
    ));
CSF::createSection($prefix ,array(
  'parent' => 'about_options',
  'title' => 'About FAQ Section',
  'fields' => array(
    array(
      'id' => 'about_faq_list',
      'title' => 'About Faq',
      'type' => 'group',
      'button_title' => 'Add New FAQ',
      'fields' => array(
          array(
              'id' => 'faq_title',
              'title' => 'Faq Title',
              'type' => 'text'
          ),
          array(
              'id' => 'faq_des',
              'title' => 'Faq Description', 
              'type' => 'textarea'
          )
      )
  )
    
  )
));


CSF::createSection($prefix, array(
  'parent' => 'about_options',
  'title'=> 'About Skill Section',
  'fields' => array(
    array(
      'id' => 'about_skill_group',
    'type' => 'group',
    'title' => 'About Skill Group',
    'fields' => array(
      array(
        'id' => 'skill_title',
        'type' => 'text',
        'title' => 'Skill Title'
      ),
      array(
        'id' => 'skill_num',
        'type' => 'text',
        'title' => 'Skill Number'
      ),

    )
    )
  )
));
  
 // Create a Services section
 CSF::createSection( $prefix, array(
  'id' => 'services_options',
'title'  => 'Services Section',
));
CSF::createSection($prefix , array(
      'parent' => 'services_options',
      'title' => 'Services Heading',
      'fields' => array(
        array(
          'id' => 'services_sub_title',
          'title' => 'Services Sub Title',
          'type' => 'text',
        ),
        array(
          'id' => 'services_title',
          'title' => 'Services Title',
          'type' => 'text',
        ),
        array(
          'id' => 'services_desc',
          'title' => 'Services Description',
          'type' => 'textarea',
        ),

      )
));

  CSF::createSection($prefix , array(
    'id' => 'counter_options',
    'title' => 'Counter Section'
  ));

  CSF::createSection($prefix , array(
      'parent' => 'counter_options',
      'title' => 'Counter Section',
      'fields' => array(
        array(
          'id' => 'counter_group',
        'type' => 'group',
        'title' => 'Counter List',
        'fields' => array(
          array(
            'id' => 'counter_name',
           'type' => 'text',
           'title' => 'Counter Name'
          ),
          array(
            'id' => 'counter_num',
           'type' => 'text',
           'title' => 'Counter Number'
          ),
          array(
            'id' => 'counter_icon',
           'type' => 'icon',
           'title' => 'Counter Icon'
          ),
        )
        )
      )

  ));

   // Create a Teams section
 CSF::createSection( $prefix, array(
  'id' => 'team_options',
'title'  => 'Team Section',
));
CSF::createSection($prefix , array(
      'parent' => 'team_options',
      'title' => 'Team Heading',
      'fields' => array(
        array(
          'id' => 'team_sub_title',
          'title' => 'Team Sub Title',
          'type' => 'text',
        ),
        array(
          'id' => 'team_title',
          'title' => 'Team Title',
          'type' => 'text',
        ),
        array(
          'id' => 'team_desc',
          'title' => 'Team Description',
          'type' => 'textarea',
        ),

      )
));


 // Create a Testimonials section
 CSF::createSection( $prefix, array(
  'id' => 'testimonial_options',
'title'  => 'Testimonial Section',
));
CSF::createSection($prefix , array(
      'parent' => 'testimonial_options',
      'title' => 'Testimonial Heading',
      'fields' => array(
        array(
          'id' => 'testimonial_sub_title',
          'title' => 'Testimonial Sub Title',
          'type' => 'text',
        ),
        array(
          'id' => 'testimonial_title',
          'title' => 'Testimonial Title',
          'type' => 'text',
        ),
        array(
          'id' => 'testimonial_desc',
          'title' => 'Testimonial Description',
          'type' => 'textarea',
        ),

      )
));

// Create a Blog section
CSF::createSection( $prefix, array(
  'id' => 'blog_options',
'title'  => 'Blog Section',
));
CSF::createSection($prefix , array(
      'parent' => 'blog_options',
      'title' => 'Blog Heading',
      'fields' => array(
        array(
          'id' => 'blog_sub_title',
          'title' => 'Blog Sub Title',
          'type' => 'text',
        ),
        array(
          'id' => 'blog_title',
          'title' => 'Blog Title',
          'type' => 'text',
        ),
        array(
          'id' => 'blog_desc',
          'title' => 'Blog Description',
          'type' => 'textarea',
        ),

      )
));

      CSF::createSection($prefix, array(
        'id' => 'cta_options',
        'title' => 'CTA OPTION',
      ));
      CSF::createSection($prefix, array(
        'parent' => 'cta_options',
        'title' => 'CTA OPTION',
        'fields' => array(
          array(
            'id'    => 'cta_switcher',
            'type'  => 'switcher',
            'title' => 'CTA Switcher ON / OFF',
            'default'    => true
          ),
          array(
            'id' => 'cta_title',
            'title' => 'CTA Title',
            'type' => 'text',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
          array(
            'id' => 'cta_desc',
            'title' => 'CTA Description',
            'type' => 'textarea',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
          array(
            'id' => 'cta_btn_text',
            'title' => 'CTA Button Text',
            'type' => 'text',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
          array(
            'id' => 'cta_btn_link',
            'title' => 'CTA Button Link',
            'type' => 'text',
            'dependency' => array( 'cta_switcher', '==', 'true' ) // check for true/false by field id
          ),
        )
      ));
      CSF::createSection($prefix , array(
        'id' => 'contact_options',
        'title' => 'Contact Options'

      ));
       // Contact Options
    CSF::createSection($prefix, array(
      'parent' => 'contact_options',
      'title' => __('Contact Options', 'inspireone'),
      'icon' => 'fas fa-bullhorn',
      'fields' => array(
          array(
              'id' => 'contact_info',
              'title' => __('Contact Info', 'inspireone'),
              'type' => 'group',
              'button_title' => __('Add New Concatc Items', 'inspireone'),
              'fields' => array(
                  array(
                      'id' => 'contact_info_title',
                      'type' => 'text',
                      'title' => __('Contact Info Title', 'inspireone')
                  ),
                  array(
                      'id' => 'contact_info_icon',
                      'type' => 'icon',
                      'title' => __('Contact Info Icon', 'inspireone')
                  ),
                  array(
                      'id' => 'contact_info_des',
                      'type' => 'text',
                      'title' => __('Contact Info Description', 'inspireone')
                  )
              )
          ),
          array(
              'id' => 'contact_map',
              'type' => 'map',
              'title' => __('Contact Map', 'inspireone')
          )

      )
  ));


      CSF::createSection($prefix , array(
        'id' => 'footer_options',
        'title' => 'Footer Options'

      ));
      // Footer Options
    CSF::createSection($prefix, array(
      'id' => 'footer_options',
      'title' => __('Footer Options', 'inspireone'),
      'icon' => 'fas fa-rocket',
      'fields' => array(
          array(
              'id' => 'footer_text',
              'type' => 'text',
              'title' => __('Copyright Text' , 'inspireone'),
              'default' => __('&copy; All Rights Reserved 2020' ,'inspireone')
          ),
          array(
              'id' => 'footer_social',
              'type' => 'group',
              'title' => __('Footer Social Links', 'inspireone'),
              'button_title' => __('Add New Link', 'inspireone'),
              'fields' => array(
                  array(
                      'id' => 'footer_social_title',
                      'type' => 'text',
                      'title' => __('Footer Link Title', 'inspireone')
                  ),
                  array(
                      'id' => 'footer_social_icon',
                      'type' => 'icon',
                      'title' => __('Footer Link Icon', 'inspireone')
                  ),
                  array(
                      'id' => 'footer_social_url',
                      'type' => 'text',
                      'title' => __('Footer Link URL', 'inspireone')
                  )
              )
          ),
          array(
              'id' => 'footer_link_target',
              'type' => 'select',
              'title' => __('Select Link Target', 'inspireone'),
              'options' => array(
                  '_self' => __('Open in Same Tab', 'inspireone',),
                  '_blank' => __('Open in New Tab', 'inspireone',),
                  '_window' => __('Open in New Window', 'inspireone',)
              ),
              'default' => '_blank'
          )
      )
  ));


  
  }
  