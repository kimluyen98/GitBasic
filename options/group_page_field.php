<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e534d93e4dbc',
        'title' => 'Cấu hình Hệ Thống',
        'fields' => array(
            array(
                'key' => 'group_admin_control',
                'label' => '',
                'name' => 'group_admin_control',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show' => 'Hiển Thị Module',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'group_admin',
                'label' => '',
                'name' => 'group_admin',
                'type' => 'checkbox',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'show_header_footer' => 'Header/Footer',
                    'show_module_main' => 'Module Main',
                    'show_module_sidebar' => 'Sidebar',
                    'show_module_site' => 'WebSite',
                    'show_module_landing' => 'Landing',
                ),
                'allow_null' => 0,
                'other_choice' => 0,
                'default_value' => 'default',
                'layout' => 'horizontal',
                'return_format' => 'value',
                'save_other_choice' => 0,
            ),
            array(
                'key' => 'field_5e534e2c90dac',
                'label' => '',
                'name' => 'group_page_field',
                'type' => 'group',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'group_admin_control',
                            'operator' => '==',
                            'value' => 'show',
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
                        'key' => 'group_page_field_header',
                        'label' => 'Cài đặt Header - Footer',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'header_custom',
                        'label' => '',
                        'name' => 'header_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_header_footer',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*HEADER*/
                            'header' => array(
                                'key' => 'header',
                                'name' => 'header',
                                'label' => 'Header Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'header_sub_fields',
                                        'label' => '',
                                        'name' => 'header_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                                            
                                            /* Header_2_1_0 */
                                            'id_header_2_1_0' => array(
                                                'key' => 'id_header_2_1_0',
                                                'name' => 'header_2_1_0',
                                                'label' => 'Header 2.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_header_2_1_0_sub1',
                                                        'label' => 'Menu',
                                                        'name' => 'id_header_2_1_0_sub1',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'id_header_2_1_0_sub1_layout1' => array(
                                                                'key' => 'id_header_2_1_0_sub1_layout1',
                                                                'name' => 'menu_don',
                                                                'label' => 'Menu đơn',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_2_1_0_sub1_layout1_sub',
                                                                        'label' => 'Tên Menu',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu | Link ',
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
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_2_1_0_sub1_layout2' => array(
                                                                'key' => 'id_header_2_1_0_sub1_layout2',
                                                                'name' => 'menu_sub',
                                                                'label' => 'Menu sub',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_2_1_0_sub1_layout2_sub1',
                                                                        'label' => 'Menu Cha',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link ',
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
                                                                        'key' => 'id_header_2_1_0_sub1_layout2_sub2',
                                                                        'label' => 'Sub Menu',
                                                                        'name' => 'col1',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'id_header_2_1_0_sub1_layout3' => array(
                                                                'key' => 'id_header_2_1_0_sub1_layout3',
                                                                'name' => 'menu_sub_full',
                                                                'label' => 'Menu sub full',
                                                                'display' => 'row',
                                                                'sub_fields' => array(
                                                                    array(
                                                                        'key' => 'id_header_2_1_0_sub1_layout3_sub1',
                                                                        'label' => 'Menu cha',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Tên Menu <br> Link <br> Số cột',
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
                                                                        'key' => 'id_header_2_1_0_sub1_layout3_sub2',
                                                                        'label' => 'Sub Menu',
                                                                        'name' => 'col1',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Menu',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /* End Header_2_1_0 */

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Header',
                                        'min' => '',
                                        'max' => '1',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END HEADER*/ 

                            /*FOOTER*/
                            'footer' => array(
                                'key' => 'footer',
                                'name' => 'footer',
                                'label' => 'Footer Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'footer_sub_fields',
                                        'label' => '',
                                        'name' => 'footer_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                                               
                                            /*FOOTER 7.0.0*/
                                            'id_footer_7_0_0' => array(
                                                'key' => 'id_footer_7_0_0',
                                                'name' => 'footer_7_0_0',
                                                'label' => 'Footer 7.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_footer_7_0_0_sub',
                                                        'label' => 'Footer',
                                                        'name' => 'footer',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_footer_7_0_0_box1' => array(
                                                                'key' => 'id_footer_7_0_0_sub_box1',
                                                                'name' => 'footer_box1',
                                                                'label' => 'Mạng Xã Hội',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_7_0_0_sub_box1_layout1',
                                                                        'label' => 'Mạng xã hội',
                                                                        'name' => 'social_place',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_footer_7_0_0_sub_box1_layout1_sub1',
                                                                                'name' => 'social_place_box',
                                                                                'label' => 'Mạng xã hội',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_footer_7_0_0_sub_box1_layout1_sub1_child1',
                                                                                        'label' => 'Chi tiết',
                                                                                        'name' => 'social_detail',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Link ảnh ( Size 40x40 ) <br>
                                                                                            Dòng 2 : Link chi tiết <br>
                                                                                        ',
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
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Add Row',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'layout_footer_7_0_0_box2' => array(
                                                                'key' => 'id_footer_7_0_0_sub_box2',
                                                                'name' => 'footer_box2',
                                                                'label' => 'Liên Hệ Đông Á',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_7_0_0_sub_box1_layout2',
                                                                        'label' => 'Thông Tin',
                                                                        'name' => 'info',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Số hotline <br>
                                                                            Dòng 2 : Số di động <br>
                                                                            Dòng 3 : Email
                                                                        ',
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
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                            'layout_footer_7_0_0_box3' => array(
                                                                'key' => 'id_footer_7_0_0_sub_box3',
                                                                'name' => 'footer_box3',
                                                                'label' => 'Dịch Vụ Nổi Bật',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_footer_7_0_0_sub_box1_layout3',
                                                                        'label' => 'Dịch vụ nổi bật',
                                                                        'name' => 'dv_nb',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END FOOTER 7.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Footer',
                                        'min' => '',
                                        'max' => '1',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END FOOTER*/ 
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                    array(      
                        'key' => 'group_page_field_body',
                        'label' => 'Cài đặt Module Main',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                
                    array(
                        'key' => 'body_custom',
                        'label' => '',
                        'name' => 'body_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_main',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*LAYOUT MODULE*/
                            'layout' => array(
                                'key' => 'layout',
                                'name' => 'layout',
                                'label' => 'Layout Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    
                                    array(
                                        'key' => 'layout_sub',
                                        'label' => '',
                                        'name' => 'layout_sub',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*LAYOUT 1.0.1*/
                                            'id_layout_1_0_1' => array(
                                                'key' => 'id_layout_1_0_1',
                                                'name' => 'layout_1_0_1',
                                                'label' => 'Layout 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_layout_1_0_1_sub',
                                                        'label' => 'Thông Tin',
                                                        'name' => 'info',
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
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END LAYOUT 1.0.1*/


                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END LAYOUT MODULE*/   

                            /*POST CONFIG*/
                            'post_config' => array(
                                'key' => 'post_config',
                                'name' => 'post_config',
                                'label' => 'Post Config',
                                'display' => 'block',
                                'sub_fields' => array(
                                    
                                    array(
                                        'key' => 'post_config_sub',
                                        'label' => '',
                                        'name' => 'post_config_sub',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*SAPO 2.0.0*/
                                            'id_sapo_2_0_0' => array(
                                                'key' => 'id_sapo_2_0_0',
                                                'name' => 'sapo_2_0_0',
                                                'label' => 'Sapo 2.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_sapo_2_0_0_sub',
                                                        'label' => 'Cập nhật nội dung SAPO',
                                                        'name' => 'info',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SAPO 1.0.1*/

                                            /*BANNER 1.0.1*/
                                            'id_banner_1_0_1' => array(
                                                'key' => 'id_banner_1_0_1',
                                                'name' => 'banner_1_0_1',
                                                'label' => 'Banner 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_banner_1_0_1_subsub',
                                                        'label' => 'Chi tiết',
                                                        'name' => 'banner_content',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tên Banner <br>
                                                            Dòng 2 : Link ảnh pc<br>
                                                            Dòng 3 : Link ảnh mb <br>
                                                            Dòng 4 : Link LDP/Website <br>
                                                        ',
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
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),  
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BANNER 1.0.1*/

                                            /*POST OTHER 1.0.0*/
                                            'id_post_other_1_0_0' => array(
                                                'key' => 'id_post_other_1_0_0',
                                                'name' => 'post_other_1_0_0',
                                                'label' => 'Post Other 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_post_other_1_0_0_sub',
                                                        'label' => 'Cập nhật Post Other',
                                                        'name' => 'info',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => 'Nhập liệu theo cấu trúc UL > LI',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END POST OTHER 1.0.0*/

                                            /*POST_ACC 1.0.0*/
                                            'id_post_acc_1_0_0' => array(
                                                'key' => 'id_post_acc_1_0_0',
                                                'name' => 'post_acc_1_0_0',
                                                'label' => 'Post Acrodion 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_post_acc_1_0_0_tab1',
                                                        'label' => 'postAcc__info',
                                                        'name' => 'home_contentACC',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeBox1' => array(
                                                                'key' => 'id_post_acc_1_0_0_tab1_sub1',
                                                                'name' => 'contentACC__info',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_post_acc_1_0_0_tab1_sub1_layout1',
                                                                        'label' => 'Thông Tin',
                                                                        'name' => 'title',
                                                                        'type' => 'text',
                                                                        'instructions' => '
                                                                        Tiêu đề (Thẻ H2)
                                                                        ',
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
                                                                        'rows' => 4,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_post_acc_1_0_0_tab1_sub1_layout2',
                                                                        'label' => 'Cập nhật nội dung thẻ <li>',
                                                                        'name' => 'content',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Add Row',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END POST_ACC 1.0.0*/                                

                                            /*POST Page Setup 1.0.0*/
                                            'id_post_page_setup_1_0_0' => array(
                                                'key' => 'id_post_page_setup_1_0_0',
                                                'name' => 'post_page_setup_1_0_0',
                                                'label' => 'Post Page Setup 1.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /* Code */
                                                    array(
                                                        'key' => 'id_post_page_setup_1_0_0_sub',
                                                        'label' => 'Chọn Page Groups',
                                                        'name' => 'page',
                                                        'type' => 'post_object',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '100%',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => array(
                                                            0 => 'page',
                                                        ),
                                                        'taxonomy' => '',
                                                        'allow_null' => 0,
                                                        'multiple' => 0,
                                                        'return_format' => 'id',
                                                        'ui' => 1,
                                                    ),
                                                    /* End Code */
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END POST Page Setup 1.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*POST CONFIG*/ 

                            /*SLIDER*/
                            'slider' => array(
                                'key' => 'slider',
                                'name' => 'slider',
                                'label' => 'Slider Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    array(
                                        'key' => 'slider_sub_fields',
                                        'label' => '',
                                        'name' => 'slider_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module
                                            /*SLIDER 1.0.2*/
                                            'slider_1_0_2' => array(
                                                'key' => 'slider_1_0_2',
                                                'name' => 'slider_1_0_2',
                                                'label' => 'Slider 1.0.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    // Bat dau Field
                                                    array(
                                                        'key' => 'id_slider_1_0_2_tab1',
                                                        'label' => 'Slider',
                                                        'name' => 'slider_info',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_slider_1_0_2_tab1_sub1',
                                                                'label' => 'Link liên kết',
                                                                'name' => 'slider_link',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_slider_1_0_2_tab1_sub2',
                                                                'label' => 'Link ảnh desktop',
                                                                'name' => 'slider_pc',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_slider_1_0_2_tab1_sub3',
                                                                'label' => 'Link ảnh mobile',
                                                                'name' => 'slider_mb',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_slider_1_0_2_tab1_sub4',
                                                                'label' => 'Mô tả ảnh',
                                                                'name' => 'slider_sub',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                
                                                    // End Field Base                       
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SLIDER 1.0.2*/
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Slider',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SLIDER*/ 

                            /*ABOUT*/
                            'about' => array(
                                'key' => 'about',
                                'name' => 'about',
                                'label' => 'About Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                
                                    array(
                                        'key' => 'about_sub_fields',
                                        'label' => '',
                                        'name' => 'about_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                             /*ABOUT 1.3.3*/
                                            'id_about_1_3_3' => array(
                                                'key' => 'id_about_1_3_3',
                                                'name' => 'about_1_3_3',
                                                'label' => 'About 1.3.3',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_about_1_3_3_tab1',
                                                        'label' => 'Thông Tin',
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
                                                        'key' => 'id_about_1_3_3_tab1_sub1',
                                                        'label' => '',
                                                        'name' => 'about_title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề chung <br>
                                                            Dòng 2 : Link ảnh video ( Size 700x450 ) <br>
                                                            Dòng 3 : Link xem chi tiết <br>
                                                            Dòng 4 : Link youtube
                                                        ',
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
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_about_1_3_3_tab1_sub2',
                                                        'label' => 'Mô tả',
                                                        'name' => 'about_des',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END ABOUT 1.3.3*/

                                            /*ABOUT 7.0.0*/
                                            'id_about_7_0_0' => array(
                                                'key' => 'id_about_7_0_0',
                                                'name' => 'about_7_0_0',
                                                'label' => 'About 7.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_about_7_0_0_tab1',
                                                        'label' => 'Thông Tin Chung',
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
                                                        'key' => 'id_about_7_0_0_tab1_sub1',
                                                        'label' => 'Tiêu đề & Video',
                                                        'name' => 'about_title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tên tiêu đề <br>
                                                            Dòng 2 : Link ảnh nền tiêu đề ( Size 300x240 ) <br>
                                                            Dòng 3 : Link ảnh video ( Size 570x250 ) <br>
                                                            Dòng 4 : Link youtube
                                                        ',
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
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_about_7_0_0_tab1_sub2',
                                                        'label' => 'Thông tin chi tiết',
                                                        'name' => 'about_place',
                                                        'type' => 'repeater',
                                                        'instructions' => 'Chỉ được 4 dòng',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_about_7_0_0_tab1_sub2_sub1',
                                                                'label' => 'Số liệu',
                                                                'name' => 'place_num',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_about_7_0_0_tab1_sub2_sub2',
                                                                'label' => 'Mô tả số liệu',
                                                                'name' => 'place_mt',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    array(
                                                        'key' => 'id_about_7_0_0_tab1_sub3',
                                                        'label' => 'Mô tả',
                                                        'name' => 'about_des',
                                                        'type' => 'wysiwyg',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'default_value' => '',
                                                        'tabs' => 'all',
                                                        'toolbar' => 'full',
                                                        'media_upload' => 1,
                                                        'delay' => 0,
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END ABOUT 7.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END ABOUT*/ 
                            
                            /*SERVICE*/
                            'service' => array(
                                'key' => 'service',
                                'name' => 'service',
                                'label' => 'Service Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'service_sub_fields',
                                        'label' => '',
                                        'name' => 'service_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*SERVICE 5.0.0*/
                                            'id_service_5_0_0' => array(
                                                'key' => 'id_service_5_0_0',
                                                'name' => 'service_5_0_0',
                                                'label' => 'Service 5.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_service_5_0_0_tab1_sub1',
                                                        'label' => 'Tên tiêu đề',
                                                        'name' => 'service_title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1: Tên tiêu đề <br>
                                                            Dòng 2: Mô tả của tiêu đề
                                                        ',
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
                                                        'rows'=> 2,
                                                    ),
                                                    array(
                                                        'key' => 'id_service_5_0_0_tab1_sub2',
                                                        'label' => 'Thông tin',
                                                        'name' => 'sv_info',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_service_5_0_0_tab1_sub2_sub1',
                                                                'label' => 'Link liên kết',
                                                                'name' => 'sv_link',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_service_5_0_0_tab1_sub2_sub2',
                                                                'label' => 'Link ảnh hiển thị (309 x 309)',
                                                                'name' => 'sv_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_service_5_0_0_tab1_sub2_sub3',
                                                                'label' => 'Tiêu đề ảnh',
                                                                'name' => 'sv_title',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_service_5_0_0_tab1_sub2_sub4',
                                                                'label' => 'Nội dung',
                                                                'name' => 'sv_content',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_service_5_0_0_tab1_sub2_sub5',
                                                                'label' => 'Nút xem thêm',
                                                                'name' => 'sv_text',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),

                                                
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END SERVICE 5.0.0*/
                                               
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Service',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END SERVICE*/                                     

                            /*BASIS*/
                            'basis' => array(
                                'key' => 'basis',
                                'name' => 'basis',
                                'label' => 'Basis Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'basis_sub_fields',
                                        'label' => '',
                                        'name' => 'basis_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*BASIS 2.0.2*/
                                            'id_basis_2_0_2' => array(
                                                'key' => 'id_basis_2_0_2',
                                                'name' => 'basis_2_0_2',
                                                'label' => 'Basis 2.0.2',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_basis_2_0_2_tab1_sub1',
                                                        'label' => '',
                                                        'name' => 'title',
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
                                                        'key' => 'id_basis_2_0_2_tab1_sub2',
                                                        'label' => 'Thông tin',
                                                        'name' => 'basis_info',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_basis_2_0_2_tab1_sub2_sub1',
                                                                'label' => 'Link liên kết',
                                                                'name' => 'basis_link',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_basis_2_0_2_tab1_sub2_sub2',
                                                                'label' => 'Tiêu đề',
                                                                'name' => 'basis_title',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_basis_2_0_2_tab1_sub2_sub3',
                                                                'label' => 'Link ảnh (270 x 270)',
                                                                'name' => 'basis_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END BASIS 2.0.2*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Basis',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END BASIS*/   

                            /*DOCTOR*/
                            'doctor' => array(
                                'key' => 'doctor',
                                'name' => 'doctor',
                                'label' => 'Doctor Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'doctor_sub_fields',
                                        'label' => '',
                                        'name' => 'doctor_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*DOCTOR 1.4.0*/
                                            'id_doctor_1_4_0' => array(
                                                'key' => 'id_doctor_1_4_0',
                                                'name' => 'doctor_1_4_0',
                                                'label' => 'Doctor 1.4.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_doctor_1_4_0_tab1',
                                                        'label' => 'Tiêu Đề',
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
                                                        'key' => 'id_doctor_1_4_0_tab1_sub1',
                                                        'label' => 'Họ tên',
                                                        'name' => 'doctor_title',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề <br>
                                                            Dòng 2 : Link xem thêm bác sĩ
                                                        ',
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
                                                        'rows' => 2,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_doctor_1_4_0_tab1_sub2',
                                                        'label' => 'Bác sĩ',
                                                        'name' => 'doctor_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'block',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_doctor_1_4_0_tab1_sub2_layout1',
                                                                'label' => 'Chi tiết bác sĩ',
                                                                'name' => 'doctor_detail',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1 : Tên bác sĩ <br>
                                                                    Dòng 2 : Chức danh <br>
                                                                    Dòng 3 : Link ảnh bác sĩ ( Size 233x268 ) <br> 
                                                                    Dòng 4 : Link chat
                                                                ',
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
                                                                'rows' => 5,
                                                                'new_lines' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_doctor_1_4_0_tab1_sub2_layout2',
                                                                'label' => 'Thông tin bác sĩ',
                                                                'name' => 'doctor_info',
                                                                'type' => 'wysiwyg',
                                                                'instructions' => 'Sử dụng groups UL>LI + Enter để tạo cột',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'default_value' => '',
                                                                'tabs' => 'all',
                                                                'toolbar' => 'full',
                                                                'media_upload' => 1,
                                                                'delay' => 0,
                                                            ),
                                                        ),
                                                    ),

                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END DOCTOR 1.4.0*/

                                            /*DOCTOR 4.4.0*/
                                            'id_doctor_4_4_0' => array(
                                                'key' => 'id_doctor_4_4_0',
                                                'name' => 'doctor_4_4_0',
                                                'label' => 'Doctor 4.4.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_doctor_4_4_0_tab1',
                                                        'label' => 'Thông Tin Chung',
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
                                                        'key' => 'id_doctor_4_4_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'doctor_title',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_doctor_4_4_0_tab1_sub2',
                                                        'label' => 'Bác sĩ',
                                                        'name' => 'doctor_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_doctor_4_4_0_tab1_sub2_box1',
                                                                'name' => 'doctor_info_box',
                                                                'label' => 'Bác sĩ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_doctor_4_4_0_tab1_sub2_box1_layout1',
                                                                        'label' => 'Thông tin chi tiết',
                                                                        'name' => 'doctor_detail',
                                                                        'type' => 'textarea',
                                                                        'instructions' => '
                                                                            Dòng 1 : Tên bác sĩ ( VD: PGS.TS.BS Tô Văn Hải ) <br>
                                                                            Dòng 2 : Chức vụ ( VD: Giám đốc chuyên môn ) <br>
                                                                            Dòng 3 : Link ảnh bác sĩ lớn ( Size 387x400 ) <br>
                                                                            Dòng 4 : Link ảnh bác sĩ nhỏ ( Size 90x90 ) <br>
                                                                            Dòng 5 : Tiêu đề nút <br>
                                                                            Dòng 6 : Link xem chi tiết
                                                                        ',
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
                                                                        'rows' => 6,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    array(
                                                                        'key' => 'id_doctor_4_4_0_tab1_sub2_box1_layout2',
                                                                        'label' => 'Mô tả',
                                                                        'name' => 'doctor_des',
                                                                        'type' => 'wysiwyg',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'default_value' => '',
                                                                        'tabs' => 'all',
                                                                        'toolbar' => 'full',
                                                                        'media_upload' => 1,
                                                                        'delay' => 0,
                                                                    ),
                                                                    // End Field Base                       
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Bác Sĩ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END DOCTOR 4.4.0*/
                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Doctor',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END DOCTOR*/  

                            /*ALBUM*/
                            'album' => array(
                                'key' => 'album',
                                'name' => 'album',
                                'label' => 'Album Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'album_sub_fields',
                                        'label' => '',
                                        'name' => 'album_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module\
                                        
                                            /*ALBUM 1.1.0*/
                                            'id_album_1_1_0' => array(
                                                'key' => 'id_album_1_1_0',
                                                'name' => 'album_1_1_0',
                                                'label' => 'Album 1.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*B?t d?u field*/
                                                    array(
                                                        'key' => 'id_album_1_1_0_tab1',
                                                        'label' => 'Video',
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
                                                        'key' => 'id_album_1_1_0_tab1_sub1',
                                                        'label' => 'Thông tin video',
                                                        'name' => 'detail_video',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề chung <br>
                                                            Dòng 2 : Tiêu đề video <br>
                                                            Dòng 3 : Link ảnh video ( Size 490x275 )<br>
                                                            Dòng 4 : Link video
                                                        ',
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
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_album_1_1_0_tab2',
                                                        'label' => 'Hình Ảnh',
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
                                                        'key' => 'id_album_1_1_0_tab2_sub2',
                                                        'label' => 'Tiêu đề chung',
                                                        'name' => 'title_img',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_album_1_1_0_tab2_sub1',
                                                        'label' => 'Hình ảnh',
                                                        'name' => 'image_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_album_1_1_0_tab2_sub1_layout1',
                                                                'label' => 'Tiêu đề ảnh',
                                                                'name' => 'place_title',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_album_1_1_0_tab2_sub1_layout2',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'place_url',
                                                                'type' => 'text',
                                                                'instructions' => 'Size 366x228',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END ALBUM 1.1.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Album',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END ALBUM*/   

                            /*PERSON*/
                            'person' => array(
                                'key' => 'person',
                                'name' => 'person',
                                'label' => 'Person Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'person_sub_fields',
                                        'label' => '',
                                        'name' => 'person_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*PERON 1.1.0*/
                                            'id_person_1_1_0' => array(
                                                'key' => 'id_person_1_1_0',
                                                'name' => 'person_1_1_0',
                                                'label' => 'Person 1.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_peson_1_1_0_tab1',
                                                        'label' => 'Tiêu Đề',
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
                                                        'key' => 'id_person_1_1_0_tab1_sub1',
                                                        'label' => '',
                                                        'name' => 'person_title',
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
                                                        /* Tab PERSON*/
                                                        'key' => 'id_person_1_1_0_tab2',
                                                        'label' => 'Danh Sách Thông tin',
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
                                                        'key' => 'id_person_1_1_0_tab2_sub1',
                                                        'label' => '',
                                                        'name' => 'person_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_person_1_1_0_tab2_sub1_layout1',
                                                                'name' => 'person_layout',
                                                                'label' => 'Thông tin',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_person_1_1_0_tab2_sub1_layout1_sub',
                                                                        'label' => 'Nội dung',
                                                                        'name' => 'title',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Link ảnh lớn (570 x 568) | Mô tả | Link xem thêm | name| Link ảnh nhỏ (94 x 94)',
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
                                                                        'rows' => 8,
                                                                        'new_lines' => '',
                                                                    ),
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Thông Tin',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PERSON 1.1.0*/

                                            /*PERON 2.1.0*/
                                            'id_person_2_1_0' => array(
                                                'key' => 'id_person_2_1_0',
                                                'name' => 'person_2_1_0',
                                                'label' => 'Person 2.1.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_person_2_1_0_tab1_sub1',
                                                        'label' => '',
                                                        'name' => 'person_title',
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
                                                        'key' => 'id_person_2_1_0_tab1_sub2',
                                                        'label' => 'Thông tin',
                                                        'name' => 'person_info',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_person_2_1_0_tab1_sub2_sub1',
                                                                'label' => 'Link liên kết',
                                                                'name' => 'p_link',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '#',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_person_2_1_0_tab1_sub2_sub2',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'p_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_person_2_1_0_tab1_sub2_sub3',
                                                                'label' => 'Tên khách hàng',
                                                                'name' => 'p_name',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PERSON 2.1.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Person',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PERSON*/ 

                            /*INFO*/
                            'info' => array(
                                'key' => 'info',
                                'name' => 'info',
                                'label' => 'Info Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'info_sub_fields',
                                        'label' => '',
                                        'name' => 'info_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*INFO 7.0.0*/
                                            'id_info_7_0_0' => array(
                                                'key' => 'id_info_7_0_0',
                                                'name' => 'info_7_0_0',
                                                'label' => 'Info 7.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_info_7_0_0_tab1',
                                                        'label' => 'Thông Tin Chung',
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
                                                        'key' => 'id_info_7_0_0_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title1',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_7_0_0_tab1_sub2',
                                                        'label' => 'Thông tin',
                                                        'name' => 'info1_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_info_7_0_0_tab1_sub2_layout1',
                                                                'label' => 'Thông tin chi tiết',
                                                                'name' => 'detail1_place',
                                                                'type' => 'textarea',
                                                                'instructions' => '
                                                                    Dòng 1 : Tên dịch vụ <br>
                                                                    Dòng 2 : Link ảnh ( Size 226x136 ) <br>
                                                                    Dòng 3 : Link xem chi tiết
                                                                ',
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
                                                        ),
                                                    ),
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_info_7_0_0_tab2',
                                                        'label' => 'Công Nghệ',
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
                                                        'key' => 'id_info_7_0_0_tab2_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'title2',
                                                        'type' => 'text',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'default_value' => '',
                                                        'placeholder' => '',
                                                        'prepend' => '',
                                                        'append' => '',
                                                        'maxlength' => '',
                                                    ),
                                                    array(
                                                        'key' => 'id_info_7_0_0_tab2_sub2',
                                                        'label' => 'Thông tin',
                                                        'name' => 'info2_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_info_7_0_0_tab2_sub2_layout1',
                                                                'label' => 'Tiêu đề',
                                                                'name' => 'detail2_place',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_info_7_0_0_tab2_sub2_layout2',
                                                                'label' => 'Link Url',
                                                                'name' => 'url_place',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END INFO 7.0.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Info',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END INFO*/     

                            /*NEWS*/
                            'news' => array(
                                'key' => 'news',
                                'name' => 'news',
                                'label' => 'News Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'news_sub_fields',
                                        'label' => '',
                                        'name' => 'news_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                        // Bat dau Module

                                        /*NEWS 3.0.0*/
                                        'id_news_3_0_0' => array(
                                            'key' => 'id_news_3_0_0',
                                            'name' => 'news_3_0_0',
                                            'label' => 'News 3.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    /* Tab 1*/
                                                    'key' => 'id_news_3_0_0_tab1',
                                                    'label' => 'BÀI VIẾT NỔI BẬT',
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
                                                    'key' => 'id_news_3_0_0_tab1_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title1',
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
                                                    'key' => 'id_news_3_0_0_tab1_sub2',
                                                    'label' => 'Danh sách tin',
                                                    'name' => 'content1',
                                                    'type' => 'relationship',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                    'return_format' => 'id',
                                                ),
                                                array(
                                                    /* Tab 2*/
                                                    'key' => 'id_news_3_0_0_tab2',
                                                    'label' => 'TIN TỨC MỚI NHẤT',
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
                                                    'key' => 'id_news_3_0_0_tab2_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title2',
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
                                                    'key' => 'id_news_3_0_0_tab2_sub3',
                                                    'label' => 'Danh sách tin',
                                                    'name' => 'content2',
                                                    'type' => 'relationship',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                    'return_format' => 'id',
                                                ),
                                                array(
                                                    /* Tab 3*/
                                                    'key' => 'id_news_3_0_0_tab3',
                                                    'label' => 'HỎI ĐÁP GIẢM MỠ',
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
                                                    'key' => 'id_news_3_0_0_tab3_sub1',
                                                    'label' => 'Tiêu đề',
                                                    'name' => 'news_title3',
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
                                                    'key' => 'id_news_3_0_0_tab3_sub2',
                                                    'label' => 'Danh sách tin',
                                                    'name' => 'content3',
                                                    'type' => 'relationship',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'post_type' => '',
                                                    'taxonomy' => '',
                                                    'filters' => array(
                                                        0 => 'search',
                                                        1 => 'post_type',
                                                        2 => 'taxonomy',
                                                    ),
                                                    'elements' => array(
                                                        0 => 'featured_image',
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                    'return_format' => 'id',
                                                ),
                                            
                                            
                                            
                                                
                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END NEWS 3.0.0*/

                                        // End Module
                                        ),
                                        'button_label' => 'Thêm News',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END NEWS*/

                            /*PARTNER*/
                            'partner' => array(
                                'key' => 'partner',
                                'name' => 'partner',
                                'label' => 'Partner Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'partner_sub_fields',
                                        'label' => '',
                                        'name' => 'partner_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*PARTNER 1.0.1*/
                                            'id_partner_1_0_1' => array(
                                                'key' => 'id_partner_1_0_1',
                                                'name' => 'partner_1_0_1',
                                                'label' => 'Partner 1.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_partner_1_0_1_tab1_sub1',
                                                        'label' => '',
                                                        'name' => 'title',
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
                                                        'key' => 'id_partner_1_0_1_tab1_sub2',
                                                        'label' => 'Thông tin',
                                                        'name' => 'partner_if',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_partner_1_0_1_tab1_sub2_sub1',
                                                                'label' => 'Link ảnh (157 x 57)',
                                                                'name' => 'partner_img',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_partner_1_0_1_tab1_sub2_sub2',
                                                                'label' => 'Link liên kết',
                                                                'name' => 'partner_url',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '#',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_partner_1_0_1_tab1_sub2_sub3',
                                                                'label' => 'Mô tả',
                                                                'name' => 'partner_sub',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END PARTNER 1.0.1*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Partner',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END PARTNER*/  

                            /*REGIST*/
                            'regist' => array(
                                'key' => 'regist',
                                'name' => 'regist',
                                'label' => 'Regist Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/
                                    array(
                                        'key' => 'regist_sub_fields',
                                        'label' => '',
                                        'name' => 'regist_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                                /*REGIST 1.2.0*/
                                                'id_regist_1_2_0' => array(
                                                    'key' => 'id_regist_1_2_0',
                                                    'name' => 'regist_1_2_0',
                                                    'label' => 'Regist 1.2.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            'key' => 'id_regist_1_2_0_tab1_sub1',
                                                            'label' => 'Regist',
                                                            'name' => '',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Để trắng
                                                            ',
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
                                                        
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END REGIST 1.2.0*/

                                                /*REGIST 3.0.0*/
                                                'id_regist_3_0_0' => array(
                                                    'key' => 'id_regist_3_0_0',
                                                    'name' => 'regist_3_0_0',
                                                    'label' => 'Regist 3.0.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            /* Tab tiêu đề*/
                                                            'key' => 'id_regist_3_0_0_tab1',
                                                            'label' => 'Nội Dung',
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
                                                            'key' => 'id_regist_3_0_0_tab1_sub1',
                                                            'label' => 'Thông Tin',
                                                            'name' => 'info',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1 : Tiêu đề <br>
                                                                Dòng 2 : Giới thiệu <br>
                                                                Dòng 3 : Chốt Sale <br>
                                                                Dòng 4 : Link ảnh bác sĩ ( Size 262x366 )
                                                            ',
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
                                                            'rows' => 4,
                                                            'new_lines' => '',
                                                        ),
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END REGIST 3.0.0*/      
                                                                                         
                                                /*REGIST 1.0.1*/
                                                'id_regist_1_0_1' => array(
                                                    'key' => 'id_regist_1_0_1',
                                                    'name' => 'regist_1_0_1',
                                                    'label' => 'Regist 1.0.1',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            /* Tab tiêu đề*/
                                                            'key' => 'id_regist_1_0_1_tab1',
                                                            'label' => 'Tiêu Đề',
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
                                                            'key' => 'id_regist_1_0_1_tab1_sub1',
                                                            'label' => 'ID Page',
                                                            'name' => 'id_page',
                                                            'type' => 'text',
                                                            'instructions' => 'Ví dụ: page1',
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
                                                            'key' => 'id_regist_1_0_1_tab1_sub2',
                                                            'label' => 'Link ảnh tiêu đề',
                                                            'name' => 'title',
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
                                                            'key' => 'id_regist_1_0_1_tab1_sub3',
                                                            'label' => 'Tên tiêu đề form',
                                                            'name' => 'dangky',
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
                                                            'key' => 'id_regist_1_0_1_tab1_sub4',
                                                            'label' => 'Chốt Sale',
                                                            'name' => 'sale',
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
                                                            'key' => 'id_regist_1_0_1_tab1_sub5',
                                                            'label' => 'Quote',
                                                            'name' => 'quote',
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
                                                            'rows' => 4,
                                                            'new_lines' => '',
                                                        ),
                                                        array(
                                                            'key' => 'id_regist_1_0_1_tab1_sub6',
                                                            'label' => 'Tên nhân vật',
                                                            'name' => 'name_per',
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
                                                            'rows' => 4,
                                                            'new_lines' => '',
                                                        ),
                                                    

                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END REGIST 1.0.1*/

                                                /*REGIST 1.1.0*/
                                                'id_regist_1_1_0' => array(
                                                    'key' => 'id_regist_1_1_0',
                                                    'name' => 'regist_1_1_0',
                                                    'label' => 'Regist 1.1.0',
                                                    'display' => 'block',
                                                    'sub_fields' => array(
                                                        /*Bắt đầu field*/
                                                        array(
                                                            /* Tab tiêu đề*/
                                                            'key' => 'id_regist_1_1_0_tab1',
                                                            'label' => 'Thông Tin Chung',
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
                                                            'key' => 'id_regist_1_1_0_tab1_sub1',
                                                            'label' => 'Thông tin chi tiết',
                                                            'name' => 'regist_detail',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1 : Tiêu đề chính <br>
                                                                Dòng 2 : Tiêu đề phụ <br>
                                                                Dòng 3 : Link ảnh bác sĩ ( Size 335x335 ) <br>
                                                            ',
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
                                                        
                                                        /*End field*/
                                                    ),
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*END REGIST 1.1.0*/

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Regist',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '1',
                            ),
                            /*END REGIST*/      
                            
                            /*VIDEO*/
                            'video' => array(
                                'key' => 'video',
                                'name' => 'video',
                                'label' => 'Video Module',
                                'display' => 'block',
                                'sub_fields' => array(
                                
                                    array(
                                        'key' => 'video_sub_fields',
                                        'label' => '',
                                        'name' => 'video_sub_fields',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            // Bat dau Module

                                            /*VIDEO 2.0.1*/
                                            'id_video_2_0_1' => array(
                                                'key' => 'id_video_2_0_1',
                                                'name' => 'video_2_0_1',
                                                'label' => 'Video 2.0.1',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        /* Tab tiêu đề*/
                                                        'key' => 'id_video_2_0_1_tab1',
                                                        'label' => 'Tiêu Đề',
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
                                                        'key' => 'id_video_2_0_1_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'video_title',
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
                                                        'key' => 'id_video_2_0_1_tab1_sub1',
                                                        'label' => 'Tiêu đề',
                                                        'name' => 'video_title',
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
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                    array(
                                                        /* Tab Video*/
                                                        'key' => 'id_video_2_0_1_tab2',
                                                        'label' => 'Video',
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
                                                        'key' => 'id_video_2_0_1_tab2_sub1',
                                                        'label' => '',
                                                        'name' => 'video_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_video_2_0_1_tab2_sub1_layout1',
                                                                'name' => 'video_layout',
                                                                'label' => 'Dịch Vụ Video',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_video_2_0_1_tab2_sub1_layout1_sub1',
                                                                        'label' => 'Tên dịch vụ video',
                                                                        'name' => 'sv_title_video',
                                                                        'type' => 'textarea',
                                                                        'instructions' => 'Cập nhật thông tin theo chỉ dẫn:<br>
                                                                                            Dòng 1: Tiêu đề<br>
                                                                                            Dòng 2: Link video khác
                                                                                            ',
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
                                                                        'key' => 'id_video_2_0_1_tab2_sub1_layout1_sub1_child1',
                                                                        'label' => 'Danh sách video',
                                                                        'name' => 'list_video',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_video_2_0_1_tab2_sub1_layout1_sub1_child1_sub1',
                                                                                'name' => 'sub_video_layout',
                                                                                'label' => 'Danh sách video',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_video_2_0_1_tab2_sub1_layout1_sub1_child1_sub1_end1',
                                                                                        'label' => 'Chi tiết video',
                                                                                        'name' => 'detail_video',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tiêu đề video <br>
                                                                                            Dòng 2 : Link ảnh hiển thị video ( Size 470x285 ) <br>
                                                                                            Dòng 3 : ID Youtube
                                                                                        ',
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
                                                                                        'rows' => 4,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Add Row',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Video',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),
                                                    

                                                    
                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END VIDEO 2.0.1*/

                                            /*VIDEO 3.0.0*/
                                            'id_video_3_0_0' => array(
                                                'key' => 'id_video_3_0_0',
                                                'name' => 'video_3_0_0',
                                                'label' => 'Video 3.0.0',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    /*Bắt đầu field*/
                                                    array(
                                                        'key' => 'id_video_3_0_0_tab1',
                                                        'label' => 'Video Dịch Vụ',
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
                                                        'key' => 'id_video_3_0_0_tab1_sub1',
                                                        'label' => 'Dịch Vụ',
                                                        'name' => 'video_info',
                                                        'type' => 'flexible_content',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'layouts' => array(
                                                            'layout_homeTitle' => array(
                                                                'key' => 'id_video_3_0_0_tab1_sub1_layout1',
                                                                'name' => 'video_info_box1',
                                                                'label' => 'Dịch Vụ',
                                                                'display' => 'block',
                                                                'sub_fields' => array(
                                                                    // Bat dau Field
                                                                    array(
                                                                        'key' => 'id_video_3_0_0_tab1_sub1_layout1_child1',
                                                                        'label' => 'Tên dịch vụ',
                                                                        'name' => 'title',
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
                                                                        'key' => 'id_video_3_0_0_tab1_sub1_layout1_child2',
                                                                        'label' => 'Danh sách video',
                                                                        'name' => 'list_video',
                                                                        'type' => 'flexible_content',
                                                                        'instructions' => '',
                                                                        'required' => 0,
                                                                        'conditional_logic' => 0,
                                                                        'wrapper' => array(
                                                                            'width' => '',
                                                                            'class' => '',
                                                                            'id' => '',
                                                                        ),
                                                                        'layouts' => array(
                                                                            'layout_homeTitle' => array(
                                                                                'key' => 'id_video_3_0_0_tab1_sub1_layout1_child2_box1',
                                                                                'name' => 'list_video_box1',
                                                                                'label' => 'Video',
                                                                                'display' => 'block',
                                                                                'sub_fields' => array(
                                                                                    // Bat dau Field
                                                                                    array(
                                                                                        'key' => 'id_video_3_0_0_tab1_sub1_layout1_child2_box1_d1',
                                                                                        'label' => 'Dịch vụ',
                                                                                        'name' => 'content_video',
                                                                                        'type' => 'textarea',
                                                                                        'instructions' => '
                                                                                            Dòng 1 : Tiêu đề video <br>
                                                                                            Dòng 2 : Link ảnh ( Size 270x150 ) <br>
                                                                                            Dòng 3 : Link youtube
                                                                                        ',
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
                                                                                        'rows' => 4,
                                                                                        'new_lines' => '',
                                                                                    ),
                                                                                    // End Field Base                       
                                                                                ),
                                                                                'min' => '',
                                                                                'max' => '',
                                                                            ),
                                                                        ),
                                                                        'button_label' => 'Add Row',
                                                                        'min' => '',
                                                                        'max' => '',
                                                                    ),
                                                                    
                                                                    // End Field Base						
                                                                ),
                                                                'min' => '',
                                                                'max' => '',
                                                            ),
                                                        ),
                                                        'button_label' => 'Thêm Dịch Vụ',
                                                        'min' => '',
                                                        'max' => '',
                                                    ),

                                                    /*End field*/
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            /*END VIDEO 3.0.0*/                                

                                            // End Module
                                        ),
                                        'button_label' => 'Thêm Module',
                                        'min' => '',
                                        'max' => '',
                                    ),                     
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END VIDEO*/  
                        
                        
                        // End Module                                    
                        ),
                        'button_label' => 'Thêm Module',
                        'min' => '',
                        'max' => '',
                    ),
                      
                    array(      
                        'key' => 'group_page_field_sidebar',
                        'label' => 'Cài đặt Sidebar',
                        'name' => '',
                        'type' => 'tab',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'placement' => 'top',
                        'endpoint' => 0,
                    ),
                    array(
                        'key' => 'sidebar_custom',
                        'label' => '',
                        'name' => 'sidebar_custom',
                        'type' => 'flexible_content',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => array(
                            array(
                                array(
                                    'field' => 'group_admin',
                                    'operator' => '==',
                                    'value' => 'show_module_sidebar',
                                ),
                            ),
                        ),
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layouts' => array(
                        // Bat dau Module

                            /*SIDEBAR 2.2.0*/
                            'id_sidebar_2_2_0' => array(
                                'key' => 'id_sidebar_2_2_0',
                                'name' => 'sidebar_2_2_0',
                                'label' => 'Sidebar 2.2.0',
                                'display' => 'block',
                                'sub_fields' => array(
                                    /*Bắt đầu field*/

                                    array(
                                        'key' => 'id_sidebar_2_2_0_sub',
                                        'label' => 'Sidebar',
                                        'name' => 'sidebar',
                                        'type' => 'flexible_content',
                                        'instructions' => '',
                                        'required' => 0,
                                        'conditional_logic' => 0,
                                        'wrapper' => array(
                                            'width' => '',
                                            'class' => '',
                                            'id' => '',
                                        ),
                                        'layouts' => array(
                                            'id_sidebar_2_2_0_sub_layout1' => array(
                                                'key' => 'id_sidebar_2_2_0_sub_layout1',
                                                'name' => 'sidebar_title',
                                                'label' => 'Tiêu Đề SideBar',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_2_2_0_sub_layout1_sub1',
                                                        'label' => 'Tiêu đề chuyên mục',
                                                        'name' => 'title',
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
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_2_2_0_sub_layout2' => array(
                                                'key' => 'id_sidebar_2_2_0_sub_layout2',
                                                'name' => 'sidebar_img',
                                                'label' => 'Hình Ảnh',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_2_2_0_sub_layout2_box1',
                                                        'label' => 'Hình ảnh',
                                                        'name' => 'img_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'table',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_sidebar_2_2_0_sub_layout2_box1_sub1',
                                                                'label' => 'Tiêu đề ảnh',
                                                                'name' => 'place_title',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_sidebar_2_2_0_sub_layout2_box1_sub2',
                                                                'label' => 'Link ảnh',
                                                                'name' => 'place_url',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_2_2_0_sub_layout4' => array(
                                                'key' => 'id_sidebar_2_2_0_sub_layout4',
                                                'name' => 'sidebar_clip',
                                                'label' => 'Video Clip',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_2_2_0_sub_layout4_box1',
                                                        'label' => 'Chi tiết video',
                                                        'name' => 'detail_video',
                                                        'type' => 'textarea',
                                                        'instructions' => '
                                                            Dòng 1 : Tiêu đề video <br>
                                                            Dòng 2 : Link ảnh thumb video ( Size 267x150 ) <br>
                                                            Dòng 3 : Link youtube
                                                        ',
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
                                                        'rows' => 4,
                                                        'new_lines' => '',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_2_2_0_sub_layout3' => array(
                                                'key' => 'id_sidebar_2_2_0_sub_layout3',
                                                'name' => 'sidebar_new',
                                                'label' => 'Tin tức',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_2_2_0_sub_layout3_sub',
                                                        'label' => 'Bài viết quan tâm',
                                                        'name' => 'content',
                                                        'type' => 'relationship',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'post_type' => '',
                                                        'taxonomy' => '',
                                                        'filters' => array(
                                                            0 => 'search',
                                                            1 => 'post_type',
                                                            2 => 'taxonomy',
                                                        ),
                                                        'elements' => '',
                                                        'min' => '',
                                                        'max' => '',
                                                        'return_format' => 'object',
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                            'id_sidebar_2_2_0_sub_layout6' => array(
                                                'key' => 'id_sidebar_2_2_0_sub_layout6',
                                                'name' => 'sidebar_postlist',
                                                'label' => 'Đọc nhiều & Phản hồi',
                                                'display' => 'block',
                                                'sub_fields' => array(
                                                    array(
                                                        'key' => 'id_sidebar_2_2_0_sub_layout6_box1',
                                                        'label' => 'Đọc nhiều & Phản hồi',
                                                        'name' => 'postlist_place',
                                                        'type' => 'repeater',
                                                        'instructions' => '',
                                                        'required' => 0,
                                                        'conditional_logic' => 0,
                                                        'wrapper' => array(
                                                            'width' => '',
                                                            'class' => '',
                                                            'id' => '',
                                                        ),
                                                        'hide_admin' => 0,
                                                        'collapsed' => '',
                                                        'min' => 0,
                                                        'max' => 0,
                                                        'layout' => 'block',
                                                        'button_label' => '',
                                                        'sub_fields' => array(
                                                            array(
                                                                'key' => 'id_sidebar_2_2_0_sub_layout6_box1_sub1',
                                                                'label' => 'Tiêu đề tab',
                                                                'name' => 'place_tab',
                                                                'type' => 'text',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'hide_admin' => 0,
                                                                'default_value' => '',
                                                                'placeholder' => '',
                                                                'prepend' => '',
                                                                'append' => '',
                                                                'maxlength' => '',
                                                            ),
                                                            array(
                                                                'key' => 'id_sidebar_2_2_0_sub_layout6_box1_sub2',
                                                                'label' => 'Bài viết',
                                                                'name' => 'content2',
                                                                'type' => 'relationship',
                                                                'instructions' => '',
                                                                'required' => 0,
                                                                'conditional_logic' => 0,
                                                                'wrapper' => array(
                                                                    'width' => '',
                                                                    'class' => '',
                                                                    'id' => '',
                                                                ),
                                                                'post_type' => '',
                                                                'taxonomy' => '',
                                                                'filters' => array(
                                                                    0 => 'search',
                                                                    1 => 'post_type',
                                                                    2 => 'taxonomy',
                                                                ),
                                                                'elements' => '',
                                                                'min' => '',
                                                                'max' => '',
                                                                'return_format' => 'object',
                                                            ),
                                                        ),
                                                    ),
                                                ),
                                                'min' => '',
                                                'max' => '',
                                            ),
                                        ),
                                        'button_label' => 'Add Row',
                                        'min' => '',
                                        'max' => '',
                                    ),
                                    /*End field*/
                                ),
                                'min' => '',
                                'max' => '',
                            ),
                            /*END SIDEBAR 2.2.0*/
                                    
                        // End Module                                    
                    ),
                    'button_label' => 'Thêm Module',
                    'min' => '',
                    'max' => '',
                ),
                        
                array(      
                    'key' => 'group_page_field_site',
                    'label' => 'Cài đặt Website',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'group_admin',
                                'operator' => '==',
                                'value' => 'show_module_site',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),
                array(
                    'key' => 'site_custom',
                    'label' => '',
                    'name' => 'site_custom',
                    'type' => 'flexible_content',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'group_admin',
                                'operator' => '==',
                                'value' => 'show_module_site',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layouts' => array(
                    // Bat dau Module

                        /*CHECKING*/
                        'checking' => array(
                            'key' => 'checking',
                            'name' => 'checking',
                            'label' => 'Checking Module',
                            'display' => 'block',
                            'sub_fields' => array(
                                
                                array(
                                    'key' => 'checking_sub_fields',
                                    'label' => '',
                                    'name' => 'checking_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module

                                        /*HEADER CHECKING 1.0.0*/
                                        'id_h_checking_1_0_0' => array(
                                            'key' => 'id_h_checking_1_0_0',
                                            'name' => 'h_checking_1_0_0',
                                            'label' => 'H-Checking 1.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    /* Tab tiêu đề*/
                                                    'key' => 'id_h_checking_1_0_tab1',
                                                    'label' => 'Tiêu Đề',
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
                                                    'key' => 'id_h_checking_1_0_tab1_sub',
                                                    'label' => 'Code',
                                                    'name' => 'data',
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
                                                    'rows' => 10,
                                                    'new_lines' => '',
                                                ),
                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END HEADER CHECKING 1.0.0*/

                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Module',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '',
                        ),
                        /*END CHECKING*/  

                        /*SHORTCODE*/
                        'shortcode' => array(
                            'key' => 'shortcode',
                            'name' => 'shortcode',
                            'label' => 'Shortcode',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'shortcode_sub_fields',
                                    'label' => '',
                                    'name' => 'shortcode_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module

                                        /*POST DOCTOR 1.0.0*/
                                        'id_post_doctor_1_0_0' => array(
                                            'key' => 'id_post_doctor_1_0_0',
                                            'name' => 'post_doctor_1_0_0',
                                            'label' => 'Post Doctor 1.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'post_doctor_1_0_0_sub1',
                                                    'label' => '',
                                                    'name' => 'post_doctor',
                                                    'type' => 'flexible_content',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'layouts' => array(
                                                        'layout_homeTitle' => array(
                                                            'key' => 'post_doctor_1_0_0_sub1_layout',
                                                            'name' => 'post_doctor_1_0_0_sub1_layout',
                                                            'label' => 'Bác sĩ',
                                                            'display' => 'block',
                                                            'sub_fields' => array(
                                                                // Bat dau Field
                                                                array(
                                                                    'key' => 'id_post_doctor_1_0_0_tab1_sub1',
                                                                    'label' => 'Mã Shortcode : <b>[post_doctor_1_0_0 id=""]</b>',
                                                                    'name' => 'info',
                                                                    'type' => 'textarea',
                                                                    'instructions' => '
                                                                        Dòng 1 : Shortcode id  <br>
                                                                        Dòng 2 : Họ tên bác sĩ ( VD: Nguyễn Đình Thuận ) <br>
                                                                        Dòng 3 : Chức danh ( VD: PGS.TS. ) <br>
                                                                        Dòng 4 : Link ảnh bác sĩ ( Size 166x166 ) <br>
                                                                        Dòng 5 : Link xem thêm <br>
                                                                        
                                                                    ',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),
                                                                array(
                                                                    'key' => 'id_post_doctor_1_0_0_tab1_sub2',
                                                                    'label' => 'Chuyên khoa',
                                                                    'name' => 'about_1',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),
                                                                array(
                                                                    'key' => 'id_post_doctor_1_0_0_tab1_sub3',
                                                                    'label' => 'Nơi công tác',
                                                                    'name' => 'about_2',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),
                                                                // End Field Base                       
                                                            ),
                                                            'min' => '',
                                                            'max' => '',
                                                        ),                                              
                                                    ),
                                                    'button_label' => 'Thêm Bác Sĩ',
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                            
                                            


                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END POST DOCTOR 1.0.0*/       
                                        
                                        /*POST REGIST 2.0.0*/
                                        'id_post_regist_2_0_0' => array(
                                            'key' => 'id_post_regist_2_0_0',
                                            'name' => 'post_regist_2_0_0',
                                            'label' => 'Post Regist 2.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                            
                                                array(
                                                    'key' => 'id_post_regist_2_0_0_tab2_sub2',
                                                    'label' => '',
                                                    'name' => 'question',
                                                    'type' => 'flexible_content',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'layouts' => array(
                                                        'layout_homeTitle' => array(
                                                            'key' => 'id_post_regist_2_0_0_tab2_sub2_box',
                                                            'name' => 'question_box',
                                                            'label' => 'Chủ đề',
                                                            'display' => 'block',
                                                            'sub_fields' => array(
                                                                // Bat dau Field
                                                                array(
                                                                    'key' => 'id_post_regist_2_0_0_tab2_sub2_box_child',
                                                                    'label' => 'Mã Shorcode : [post_regist_2_0_0 id=""]',
                                                                    'name' => 'question_id',
                                                                    'type' => 'textarea',
                                                                    'instructions' => '
                                                                        Dòng 1: Tiêu đề <br/>
                                                                        Dòng 2: ID
                                                                    ',
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
                                                                    'rows' => 2,
                                                                    'new_lines' => '',
                                                                ),
                                                                array(
                                                                    'key' => 'id_post_regist_2_0_0_tab2_sub2_box_child2',
                                                                    'label' => 'Nội dung câu hỏi',
                                                                    'name' => 'info',
                                                                    'type' => 'textarea',
                                                                    'instructions' => 'Mối dòng 1 câu hỏi',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),
                                                            
                                                                // End Field Base                       
                                                            ),
                                                            'min' => '',
                                                            'max' => '',
                                                        ),
                                                    ),
                                                    'button_label' => 'Thêm chủ đề',
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END POST REGIST 2.0.0*/

                                        /*POST CTA BUTTON 1.0.0*/
                                        'id_post_CTA_button_1_0_0' => array(
                                            'key' => 'id_post_CTA_button_1_0_0',
                                            'name' => 'post_CTA_button_1_0_0',
                                            'label' => 'Post CTA Button 1.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'post_CTA_button_1_0_0_sub1',
                                                    'label' => '',
                                                    'name' => 'post_doctor',
                                                    'type' => 'flexible_content',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'layouts' => array(
                                                        'layout_homeTitle' => array(
                                                            'key' => 'post_CTA_button_1_0_0_sub1_layout',
                                                            'name' => 'post_CTA_button_1_0_0_sub1_layout',
                                                            'label' => 'CTA Button',
                                                            'display' => 'block',
                                                            'sub_fields' => array(
                                                                // Bat dau Field
                                                                array(
                                                                    'key' => 'id_post_CTA_button_1_0_0_tab1_sub1',
                                                                    'label' => 'Mã Shortcode : <b>[post_CTA_button_1_0_0 id=""]</b>',
                                                                    'name' => 'info',
                                                                    'type' => 'textarea',
                                                                    'instructions' => '
                                                                        Dòng 1 : Shortcode id  <br>
                                                                        Dòng 2 : Tiêu đề ( VD: Form tư vấn ) <br>
                                                                        Dòng 2 : Link ảnh nút bấm ( Size 422x76 ) <br>
                                                                        Dòng 3 : Nhập mã form đăng ký ( Form khuyến mãi : bvh_dkkm  /   Form tư vấn : bvh_dktv) <br>
                                                                        Dòng 4 : Nhập sô lượt click ( VD: 45 ) <br>
                                                                    ',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),                                                                    
                                                                // End Field Base                       
                                                            ),
                                                            'min' => '',
                                                            'max' => '',
                                                        ),                                              
                                                    ),
                                                    'button_label' => 'Thêm CTA Button',
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                            

                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END POST CTA BUTTON 1.0.0*/   

                                        /*POST CTA BUTTON 1.1.0*/
                                        'id_post_CTA_button_1_1_0' => array(
                                            'key' => 'id_post_CTA_button_1_1_0',
                                            'name' => 'post_CTA_button_1_1_0',
                                            'label' => 'Post CTA Button 1.1.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'post_CTA_button_1_1_0_sub1',
                                                    'label' => '',
                                                    'name' => 'post_CTA_button_1_1_0_sub1',
                                                    'type' => 'flexible_content',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'layouts' => array(
                                                        'layout_homeTitle' => array(
                                                            'key' => 'post_CTA_button_1_1_0_sub1_layout',
                                                            'name' => 'post_CTA_button_1_1_0_sub1_layout',
                                                            'label' => 'CTA Button',
                                                            'display' => 'block',
                                                            'sub_fields' => array(
                                                                // Bat dau Field
                                                                array(
                                                                    'key' => 'id_post_CTA_button_1_1_0_tab1_sub1',
                                                                    'label' => 'Mã Shortcode : <b>[post_CTA_button_1_1_0 id=""]</b>',
                                                                    'name' => 'info',
                                                                    'type' => 'textarea',
                                                                    'instructions' => '
                                                                        Dòng 1 : Shortcode id  <br>
                                                                        Dòng 2 : Tiêu đề ( VD: Form tư vấn ) <br>
                                                                        Dòng 2 : Link ảnh nút bấm ( Size 422x76 ) <br>
                                                                        Dòng 3 : Nhập mã form đăng ký ( Form khuyến mãi : bvh_dkkm  /   Form tư vấn : bvh_dktv  /   Form đặt lịch : bvh_dkdl) <br>                                                                            
                                                                    ',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),                                                                    
                                                                // End Field Base                       
                                                            ),
                                                            'min' => '',
                                                            'max' => '',
                                                        ),                                              
                                                    ),
                                                    'button_label' => 'Thêm CTA Button',
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                            

                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END POST CTA BUTTON 1.0.0*/

                                        /*POST CTA 1.0.0*/
                                        'id_post_CTA_1_0_0' => array(
                                            'key' => 'id_post_CTA_1_0_0',
                                            'name' => 'post_CTA_1_0_0',
                                            'label' => 'Post CTA 1.0.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'post_CTA_1_0_0_sub1',
                                                    'label' => '',
                                                    'name' => 'post_CTA_1_0_0_sub1',
                                                    'type' => 'flexible_content',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'layouts' => array(
                                                        'layout_homeTitle' => array(
                                                            'key' => 'post_CTA_1_0_0_sub1_layout',
                                                            'name' => 'post_CTA_1_0_0_sub1_layout',
                                                            'label' => 'CTA Button',
                                                            'display' => 'block',
                                                            'sub_fields' => array(
                                                                // Bat dau Field
                                                                array(
                                                                    'key' => 'id_post_CTA_1_0_0_tab1_sub1',
                                                                    'label' => 'Mã Shortcode : <b>[post_CTA_1_0_0 id=""]</b>',
                                                                    'name' => 'info',
                                                                    'type' => 'textarea',
                                                                    'instructions' => '
                                                                        Dòng 1 : Shortcode id  <br>
                                                                        Dòng 2 : Tiêu đề <br>
                                                                        Dòng 3 : Nội dung <br>
                                                                        Dòng 4 : Chốt Sale <br>
                                                                        Dòng 5 : Nhập mã form đăng ký ( Form khuyến mãi : bvh_dkkm  /   Form tư vấn : bvh_dktv  /   Form đặt lịch : bvh_dkdl) <br>                                                                            
                                                                    ',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),                                                                    
                                                                // End Field Base                       
                                                            ),
                                                            'min' => '',
                                                            'max' => '',
                                                        ),                                              
                                                    ),
                                                    'button_label' => 'Thêm CTA Button',
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                            

                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END POST CTA 1.0.0*/   

                                        /*POST CTA 1.1.0*/
                                        'id_post_CTA_1_1_0' => array(
                                            'key' => 'id_post_CTA_1_1_0',
                                            'name' => 'post_CTA_1_1_0',
                                            'label' => 'Post CTA 1.1.0',
                                            'display' => 'block',
                                            'sub_fields' => array(
                                                /*Bắt đầu field*/
                                                array(
                                                    'key' => 'post_CTA_1_1_0_sub1',
                                                    'label' => '',
                                                    'name' => 'post_CTA_1_1_0_sub1',
                                                    'type' => 'flexible_content',
                                                    'instructions' => '',
                                                    'required' => 0,
                                                    'conditional_logic' => 0,
                                                    'wrapper' => array(
                                                        'width' => '',
                                                        'class' => '',
                                                        'id' => '',
                                                    ),
                                                    'layouts' => array(
                                                        'layout_homeTitle' => array(
                                                            'key' => 'post_CTA_1_1_0_sub1_layout',
                                                            'name' => 'post_CTA_1_1_0_sub1_layout',
                                                            'label' => 'CTA Button',
                                                            'display' => 'block',
                                                            'sub_fields' => array(
                                                                // Bat dau Field
                                                                array(
                                                                    'key' => 'id_post_CTA_1_1_0_tab1_sub1',
                                                                    'label' => 'Mã Shortcode : <b>[post_CTA_1_1_0 id=""]</b>',
                                                                    'name' => 'info',
                                                                    'type' => 'textarea',
                                                                    'instructions' => '
                                                                        Dòng 1 : Shortcode id  <br>
                                                                        Dòng 2 : Tiêu đề <br>
                                                                        Dòng 3 : Chốt Sale <br>
                                                                        Dòng 4 : Link ảnh ( 248x166 ) <br>
                                                                        Dòng 5 : Nhập mã form đăng ký ( Form khuyến mãi : bvh_dkkm  /   Form tư vấn : bvh_dktv  /   Form đặt lịch : bvh_dkdl) <br>                                                                            
                                                                    ',
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
                                                                    'rows' => 4,
                                                                    'new_lines' => '',
                                                                ),                                                                    
                                                                // End Field Base                       
                                                            ),
                                                            'min' => '',
                                                            'max' => '',
                                                        ),                                              
                                                    ),
                                                    'button_label' => 'Thêm CTA Button',
                                                    'min' => '',
                                                    'max' => '',
                                                ),
                                            

                                                /*End field*/
                                            ),
                                            'min' => '',
                                            'max' => '',
                                        ),
                                        /*END POST CTA 1.1.0*/                                              

                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Shortcode',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END SHORTCODE*/

                        /*POPUP LANDING*/
                        'popup' => array(
                            'key' => 'popup',
                            'name' => 'popup',
                            'label' => 'Popup',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'popup_sub_fields',
                                    'label' => '',
                                    'name' => 'popup_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module


                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Popup',
                                    'min' => '',
                                    'max' => '1',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END POPUP LANDING*/
                    
                    // End Module                                    
                    ),
                    'button_label' => 'Thêm Module',
                    'min' => '',
                    'max' => '',
                ),                     

                array(      
                    'key' => 'group_page_field_landing',
                    'label' => 'Cài đặt Landing',
                    'name' => '',
                    'type' => 'tab',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'group_admin',
                                'operator' => '==',
                                'value' => 'show_module_landing',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'placement' => 'top',
                    'endpoint' => 0,
                ),

                array(
                    'key' => 'landing_custom',
                    'label' => '',
                    'name' => 'landing_custom',
                    'type' => 'flexible_content',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => array(
                        array(
                            array(
                                'field' => 'group_admin',
                                'operator' => '==',
                                'value' => 'show_module_landing',
                            ),
                        ),
                    ),
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'layouts' => array(
                    // Bat dau Module

                        /*HEADER LANDING*/
                        'header_ld' => array(
                            'key' => 'header_ld',
                            'name' => 'header_ld',
                            'label' => 'Header Landing',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'header_ld_sub_fields',
                                    'label' => '',
                                    'name' => 'header_ld_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module

                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Header',
                                    'min' => '',
                                    'max' => '1',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END HEADER LANDING*/ 

                        /*PERSON LANDING*/
                        'person_ld' => array(
                            'key' => 'person_ld',
                            'name' => 'person_ld',
                            'label' => 'Person Landing',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'person_ld_sub_fields',
                                    'label' => '',
                                    'name' => 'person_ld_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module

                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Person',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END PERSON LANDING*/ 

                        /*INFO LANDING*/
                        'info_ld' => array(
                            'key' => 'info_ld',
                            'name' => 'info_ld',
                            'label' => 'Info Landing',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'info_ld_sub_fields',
                                    'label' => '',
                                    'name' => 'info_ld_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module


                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Info',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END INFO LANDING*/ 

                        /*COUNTDOWN LANDING*/
                        'countdown_ld' => array(
                            'key' => 'countdown_ld',
                            'name' => 'countdown_ld',
                            'label' => 'Countdown Landing',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'countdown_ld_sub_fields',
                                    'label' => '',
                                    'name' => 'countdown_ld_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module

                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Countdown',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END COUNTDOWN LANDING*/ 

                        /*DOCTOR LANDING*/
                        'doctor_ld' => array(
                            'key' => 'doctor_ld',
                            'name' => 'doctor_ld',
                            'label' => 'Doctor Landing',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'doctor_ld_sub_fields',
                                    'label' => '',
                                    'name' => 'doctor_ld_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module


                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Doctor',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END DOCTOR LANDING*/ 

                        /*ABOUT LANDING*/
                        'about_ld' => array(
                            'key' => 'about_ld',
                            'name' => 'about_ld',
                            'label' => 'About Landing',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'about_ld_sub_fields',
                                    'label' => '',
                                    'name' => 'about_ld_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module


                                        // End Module
                                    ),
                                    'button_label' => 'Thêm About',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END ABOUT LANDING*/

                        /*SKILL LANDING*/
                        'skill_ld' => array(
                            'key' => 'skill_ld',
                            'name' => 'skill_ld',
                            'label' => 'Skill Landing',
                            'display' => 'block',
                            'sub_fields' => array(
                                array(
                                    'key' => 'skill_ld_sub_fields',
                                    'label' => '',
                                    'name' => 'skill_ld_sub_fields',
                                    'type' => 'flexible_content',
                                    'instructions' => '',
                                    'required' => 0,
                                    'conditional_logic' => 0,
                                    'wrapper' => array(
                                        'width' => '',
                                        'class' => '',
                                        'id' => '',
                                    ),
                                    'layouts' => array(
                                        // Bat dau Module

                                        // End Module
                                    ),
                                    'button_label' => 'Thêm Skill',
                                    'min' => '',
                                    'max' => '',
                                ),                     
                            ),
                            'min' => '',
                            'max' => '1',
                        ),
                        /*END SKILL LANDING*/                             

                    
                    // End Module                                    
                    ),
                    'button_label' => 'Thêm Module',
                    'min' => '',
                    'max' => '',
                ),                    
            
            ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'page',
                ),
            ),
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'post',
                ),
            ),
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'acf-options-cau-hinh-website',
                ),
            ),
            array(
                array(
                    'param' => 'taxonomy',
                    'operator' => '==',
                    'value' => 'category',
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
    ));
    
    endif;
?>