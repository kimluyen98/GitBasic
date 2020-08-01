<?php
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
?>