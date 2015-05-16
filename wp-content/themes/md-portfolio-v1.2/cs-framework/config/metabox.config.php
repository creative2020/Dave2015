<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// -----------------------------------------
// Page Metabox Options                    -
// -----------------------------------------


$options[]    = array(
  'id'        => 'page_metabox',
  'title'     => __('Page Options', 'applause'),
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // Section : Page Information 

    array(
      'name'  => 'section_1',
      'title' => __('Page Information', 'applause'),
      'icon'  => 'fa fa-eye',

      // begin: fields
      'fields' => array(


        array(
          'title' => __('Section Title', 'applause'),
          'desc' => __('This is section Title', 'applause'),          
          'id' => 'p_title',
          'type'  => 'text',
        ),

        array(
          'title' => __('Short description', 'applause'),
          'desc' => __('Short description about this section', 'applause'),
          'id' => 'top_short_des',
          'type'  => 'textarea',
        ),

      ), // end: fields
    ), // end: a section

    // Section: Page Customization
    array(
      'name'  => 'section_2',
      'title' => __('Page Customize', 'applause'),
      'icon'  => 'fa fa-paint-brush',
      'fields' => array(

        array(
          'title' => __('Background Color', 'applause'),
          'desc' => __('Page Background Color', 'applause'),
          'id' => 'p_bg_colorpicker',          
          'type'    => 'color_picker',
          //'default' => 'rgba(0, 0, 0, 0.8)',
        ),

        array(
          'title' => __('Background Image', 'applause'),
          'desc' => __('Page Background Image', 'applause'),
          'id' => 'p_back_image',
          'type' => 'upload'
        ),


        array(
          'title' => __('Text Color', 'applause'),
          'desc' => __('Select color for section Text Color it will also allow to section heading color also ', 'applause'),
          'id' => 'p_text_colorpicker',
          'type'    => 'color_picker',
        ),

        array(
          'title' => __('Padding', 'applause'),
          'desc' => __('Set your section padding', 'applause'),          
          'id' => 'p_padding',
          'type'  => 'number',
          'default' => '150',
        ),


      ),
    ),
    // end: a section

  ),
);

// -----------------------------------------
// Page Separator              -
// -----------------------------------------

$options[]    = array(
  'id'        => 'separator_metabox',
  'title'     => __('Separator Options', 'applause'),
  'post_type' => 'page',
  'context'   => 'normal',
  'priority'  => 'high',
  'sections'  => array(

    // Section :Separator Information 

    array(
      'name'  => 'separator_1',
      'title' => __('Separator Content', 'applause'),
      'icon'  => 'fa fa-eye',

      // begin: fields
      'fields' => array(

        array(
          'id'      => 'separator-on-off',
          'type'    => 'switcher',
          'title'   => 'Switcher Field with Default',
          'default' => true,
        ),

        array(
          'title' => __('Separator Title', 'applause'),
          'desc' => __('This is Separator Title', 'applause'),          
          'id' => 'sp_title',
          'type'  => 'text',
        ),

        array(
          'title' => __('Separator Content', 'applause'),
          'desc' => __('Separator Content this section', 'applause'),
          'id' => 'sp_content',
          'type'     => 'wysiwyg',
          'settings' => array(
            'textarea_rows' => 10,
            'tinymce'       => true,
            'media_buttons' => false,
          )   
        ),
  

      ), // end: fields
    ), // end: a section

    // Section: Separator Customization
    array(
      'name'  => 'separator_2',
      'title' => __('Separator Customize', 'applause'),
      'icon'  => 'fa fa-paint-brush',
      'fields' => array(

        array(
          'title' => __('Background Color', 'applause'),
          'desc' => __('Page Background Color', 'applause'),
          'id' => 'sp_bg_colorpicker',          
          'type'    => 'color_picker',
          'default' => 'rgba(0, 0, 0, 0.8)',
        ),

        array(
          'title' => __('Background Image', 'applause'),
          'desc' => __('Page Background Image', 'applause'),
          'id' => 'sp_back_image',
          'type' => 'upload'
        ),


        array(
          'title' => __('Text Color', 'applause'),
          'desc' => __('Select color for section Text Color it will also allow to section heading color also ', 'applause'),
          'id' => 'sp_text_colorpicker',
          'type'    => 'color_picker',
        ),

        array(
          'title' => __('Padding', 'applause'),
          'desc' => __('Set your section padding', 'applause'),          
          'id' => 'sp_padding',
          'type'  => 'number',
          'default' => '145',
        ),


      ),
    ),
    // end: a section

  ),
);


// -----------------------------------------
// Portfolio  Options                    -
// -----------------------------------------
$options[]    = array(
  'id'        => 'mt_portfolio_options',
  'title'     =>__('Portfolio Options', 'applause'),
  'post_type' => 'portfolio',
  'context'   => 'normal',
  'priority'  => 'default',
  'sections'  => array(

    array(
      'name'   => 'section_4',
      'fields' => array(

                  array(
                    'id'             => 'mt_portfolio_type',
                    'type'           => 'select',
                    'title'          =>__('Project Type', 'applause'),
                    'options'        => array(
                      'images'          => 'Images',
                      'slideshow'     => 'Slideshow',
                      'video'         => 'Video',
                    ),
                   // 'default_option' => 'images',
                  ),


                //Project Type Images
                array(
                  'id'              => 'mt_p_type_image',
                  'type'            => 'group',
                  'title'           =>__('Project Images', 'applause'),
                  'button_title'    =>__('Add New Image', 'applause'),
                  'accordion_title' =>__('Project Image', 'applause'),
                  'dependency'     => array( 'mt_portfolio_type', '==', 'images' ),
                  'fields'          => array(
                            array(
                              'id'    => 'mt_p_type_image_title',
                              'type'  => 'text',
                              'title' =>__('Add Title', 'applause'),
                            ),
                            array(
                              'id'    => 'mt_p_type_image_url',
                              'type'  => 'upload',
                              'title' =>__('Upload Image', 'applause'),
                            ),

                  ),
                ),

                //Project Type Slider 
                array(
                  'id'              => 'mt_p_type_slide',
                  'type'            => 'group',
                  'title'           =>__('Project Slider', 'applause'),
                  'button_title'    =>__('Add New Slide', 'applause'),
                  'accordion_title' =>__('Project Slide', 'applause'),
                  'dependency'     => array( 'mt_portfolio_type', '==', 'slideshow' ),
                  'fields'          => array(
                            array(
                              'id'    => 'mt_p_type_slide_title',
                              'type'  => 'text',
                              'title' =>__('Add Title', 'applause'),
                            ),
                            array(
                              'id'    => 'mt_p_type_slide_url',
                              'type'  => 'upload',
                              'title' =>__('Upload Image', 'applause'),
                            ),

                  ),
                ),

              //Project Type video
              array(
                'id'            => 'mt_p_type_video',
                'type'          => 'textarea',
                'title'         =>__('Add Project Video', 'applause'),
                'desc'          =>__('If you are using video from somewhere like YouTube, Vimeo etc... Please paste the embed code here. Width should be at least 100% with any height.', 'applause'),
                'sanitize' => false,
                'attributes'    => array(
                                   'rows'        => 10,
                ),
               'dependency'     => array( 'mt_portfolio_type', '==', 'video' ),
              ),

              //Client Name 
              array(
                'id'    => 'mt_p_client_name', 
                'type'  => 'text',
                'title' =>__('Client Name', 'applause'),
                'desc'  =>__('Client who the project was for', 'applause'),
              ),              

              //Project Checklist
              array(
                'id'    => 'mt_p_checklist', 
                'type'  => 'textarea',
                'title' =>__('Project Checklist', 'applause'),
                'desc'  =>__('Create a checklist of skills or tools used on the project
(ie; Canon EOS 5D, Branding, Responsive Design, WordPress etc...)', 'applause'),
              ),       

              //Project Date
              array(
                'id'    => 'mt_p_date', 
                'type'  => 'text',
                'title' =>__('Project Date', 'applause'),
                'desc'  =>__('Enter the date the project was completed', 'applause'),
              ),     

              //Project Url
              array(
                'id'    => 'mt_p_url', 
                'type'  => 'text',
                'title' =>__('Project URL', 'applause'),
                'desc'  =>__('Enter the URL for this project', 'applause'),
              ),     

      ),
    ),

  ),
);



CSFramework_Metabox::instance( $options );