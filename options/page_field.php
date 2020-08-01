<?php
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5da6d2fa826bb',
	'title' => 'Cấu Hình Module',
	'fields' => array(
		array(
			'key' => 'field_5da6d3a2c1f03',
			'label' => 'Page Field',
			'name' => 'page_field',
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
                /*BẮT ĐẦU MODULE*/
                
                

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


                                /*HEADER 4.2.0*/
                                'id_header_4_2_0' => array(
                                    'key' => 'id_header_4_2_0',
                                    'name' => 'header_4_2_0',
                                    'label' => 'Header 4.2.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        array(
                                            'key' => 'id_header_4_2_0_tab1',
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
                                            'key' => 'id_header_4_2_0_tab1_sub1',
                                            'label' => 'Logo',
                                            'name' => 'image',
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
                                            'key' => 'id_header_4_2_0_tab1_sub2',
                                            'label' => 'Hotline',
                                            'name' => 'hotline',
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
                                            'key' => 'id_header_4_2_0_tab2',
                                            'label' => 'Cài Đặt Menu',
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
                                            'key' => 'id_header_4_2_0_sub1',
                                            'label' => 'Menu',
                                            'name' => 'id_header_4_2_0_sub1',
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
                                                'id_header_4_2_0_sub1_layout1' => array(
                                                    'key' => 'id_header_4_2_0_sub1_layout1',
                                                    'name' => 'menu_don',
                                                    'label' => 'Menu Đơn',
                                                    'display' => 'row',
                                                    'sub_fields' => array(
                                                        array(
                                                            'key' => 'id_header_4_2_0_sub1_layout1_sub',
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
                                                'id_header_4_2_0_sub1_layout2' => array(
                                                    'key' => 'id_header_4_2_0_sub1_layout2',
                                                    'name' => 'menu_sub',
                                                    'label' => 'Menu Sub',
                                                    'display' => 'row',
                                                    'sub_fields' => array(
                                                        array(
                                                            'key' => 'id_header_4_2_0_sub1_layout2_sub1',
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
                                                            'key' => 'id_header_4_2_0_sub1_layout2_sub2',
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
                                                'id_header_4_2_0_sub1_layout3' => array(
                                                    'key' => 'id_header_4_2_0_sub1_layout3',
                                                    'name' => 'menu_sub_full',
                                                    'label' => 'Mega Menu',
                                                    'display' => 'row',
                                                    'sub_fields' => array(
                                                        array(
                                                            'key' => 'id_header_4_2_0_sub1_layout3_sub1',
                                                            'label' => 'Menu cha',
                                                            'name' => 'title',
                                                            'type' => 'textarea',
                                                            'instructions' => '
                                                                Dòng 1 : Tên menu <br>
                                                                Dòng 2 : Link <br>
                                                                Dòng 3 : Số cột <br>
                                                                Dòng 4 : Submenu có title hay không? ( điền yes : có | no : không ) <br>
                                                                Dòng 5 : Địa chỉ 1 <br>
                                                                Dòng 6 : Địa chỉ 2
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
                                                            'key' => 'id_header_4_2_0_sub1_layout3_sub2',
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
                                /*END HEADER 4.2.0*/

                                

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
                                                            'instructions' => 'Tối đa 4 icon',
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
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END FOOTER*/
                

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


                                /*SLIDER 1.0.1*/
                                'id_slider_1_0_1' => array(
                                    'key' => 'id_slider_1_0_1',
                                    'name' => 'slider_1_0_1',
                                    'label' => 'Slider 1.0.1',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        array(
                                            /* Tab Slider Desktop*/
                                            'key' => 'id_slider_1_0_1_tab1',
                                            'label' => 'Slider Desktop',
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
                                            'key' => 'id_slider_1_0_1_sub1',
                                            'label' => 'Slide Desktop',
                                            'name' => 'slide_pc',
                                            'type' => 'gallery',
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
                                            'insert' => 'append',
                                            'library' => 'all',
                                            'min' => '',
                                            'max' => '',
                                            'min_width' => '',
                                            'min_height' => '',
                                            'min_size' => '',
                                            'max_width' => '',
                                            'max_height' => '',
                                            'max_size' => '',
                                            'mime_types' => '',
                                        ),
                                        array(
                                            /* Tab Slider Mobile*/
                                            'key' => 'id_slider_1_0_1_tab2',
                                            'label' => 'Slider Mobile',
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
                                            'key' => 'id_slider_1_0_1_sub2',
                                            'label' => 'Slide Mobile',
                                            'name' => 'slide_mb',
                                            'type' => 'gallery',
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
                                            'insert' => 'append',
                                            'library' => 'all',
                                            'min' => '',
                                            'max' => '',
                                            'min_width' => '',
                                            'min_height' => '',
                                            'min_size' => '',
                                            'max_width' => '',
                                            'max_height' => '',
                                            'max_size' => '',
                                            'mime_types' => '',
                                        ),
                                    ),
                                    'min' => '',
                                    'max' => '',
                                ),
                                /*END SLIDER 1.0.1*/

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
                /*END ABOUT*/  

                
                /*SERVICE*/
                'service' => array(
                    'key' => 'service',
                    'name' => 'service',
                    'label' => 'Service Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
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
                /*END SERVICE*/  


                /*DOCTOR*/
                'doctor' => array(
                    'key' => 'doctor',
                    'name' => 'doctor',
                    'label' => 'Doctor Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
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
                /*END DOCTOR*/
                

                /*BASIS*/
                'basis' => array(
                    'key' => 'basis',
                    'name' => 'basis',
                    'label' => 'Basis Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
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
                /*END BASIS*/


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

                
                /*NEWS*/
                'news' => array(
                    'key' => 'news',
                    'name' => 'news',
                    'label' => 'News Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
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
                /*END NEWS*/  
                

                /*SIDEBAR*/
                'sidebar' => array(
                    'key' => 'sidebar',
                    'name' => 'sidebar',
                    'label' => 'Sidebar Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
                        array(
                            'key' => 'sidebar_sub_fields',
                            'label' => '',
                            'name' => 'sidebar_sub_fields',
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
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END SIDEBAR*/
                

                /*PERSON*/
                'person' => array(
                    'key' => 'person',
                    'name' => 'person',
                    'label' => 'Person Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
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
                /*END PERSON*/


                /*ALBUM*/
                'album' => array(
                    'key' => 'album',
                    'name' => 'album',
                    'label' => 'Album Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
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
                                // Bat dau Module



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
                /*END ALBUM*/

                /*PHOTO*/
                'photo' => array(
                    'key' => 'photo',
                    'name' => 'photo',
                    'label' => 'Photo Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
                        array(
                            'key' => 'photo_sub_fields',
                            'label' => '',
                            'name' => 'photo_sub_fields',
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
                            'button_label' => 'Thêm Module',
                            'min' => '',
                            'max' => '',
                        ),                     
                    ),
                    'min' => '',
                    'max' => '',
                ),
                /*END PHOTO*/

                /*INFO*/
                 'info' => array(
                    'key' => 'info',
                    'name' => 'info',
                    'label' => 'Info Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
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
                /*END INFO*/


                 /*BANNER MODULE*/
                 'banner' => array(
                    'key' => 'banner',
                    'name' => 'banner',
                    'label' => 'Banner Module',
                    'display' => 'block',
                    'sub_fields' => array(
                      
                        array(
                            'key' => 'banner_sub_fields',
                            'label' => '',
                            'name' => 'banner_sub_fields',
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

                                /*BANNER 1.0.0*/
                                'id_banner_1_0_0' => array(
                                    'key' => 'id_banner_1_0_0',
                                    'name' => 'banner_1_0_0',
                                    'label' => 'Banner 1.0.0',
                                    'display' => 'block',
                                    'sub_fields' => array(
                                        /*B?t d?u field*/
                                        array(
                                            /* Tab ti�u d?*/
                                            'key' => 'id_banner_1_0_0_tab1',
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
                                            'key' => 'id_banner_1_0_0_tab1_sub1',
                                            'label' => 'Tiêu đề',
                                            'name' => 'banner_title',
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
                                            'key' => 'id_banner_1_0_0_tab1_sub2',
                                            'label' => 'Link ảnh PC',
                                            'name' => 'img_banner_pc',
                                            'type' => 'text',
                                            'instructions' => 'Size 1400x500',
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
                                            'key' => 'id_banner_1_0_0_tab1_sub3',
                                            'label' => 'Link ảnh MB',
                                            'name' => 'img_banner_mb',
                                            'type' => 'text',
                                            'instructions' => 'Size 414x390',
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
                                        
                                        /*End field*/
                                    ),
                                    'min' => '',
                                    'max' => '',
                                ),
                                /*END BANNER 1.0.0*/

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
                /*END BANNER MODULE*/

				
				/*KẾT THÚC MODULE*/
			),
			'button_label' => 'Section Mới',
			'min' => '',
			'max' => '',
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