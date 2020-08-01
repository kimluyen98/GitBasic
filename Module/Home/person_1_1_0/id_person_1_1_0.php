<?php
     /*PERON 1.0.0*/
     'id_person_1_0_0' => array(
        'key' => 'id_person_1_0_0',
        'name' => 'person_1_0_0',
        'label' => 'Person 1.0.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                /* Tab tiêu đề*/
                'key' => 'id_peson_1_0_0_tab1',
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
                'key' => 'id_person_1_0_0_tab1_sub1',
                'label' => 'Tiêu đề',
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
                'key' => 'id_person_1_0_0_tab2',
                'label' => 'Thông tin',
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
                'key' => 'id_person_1_0_0_tab2_sub1',
                'label' => 'Thông tin',
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
                        'key' => 'id_person_1_0_0_tab2_sub1_layout1',
                        'name' => 'person_layout',
                        'label' => 'Thông tin',
                        'display' => 'block',
                        'sub_fields' => array(
                            // Bat dau Field
                            array(
                                'key' => 'id_person_1_0_0_tab2_sub1_layout1_sub',
                                'label' => 'Nội dung',
                                'name' => 'title',
                                'type' => 'textarea',
                                'instructions' => 'Link ảnh lớn | Mô tả | Link xem thêm | name| Link ảnh nhỏ',
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
                'button_label' => 'Thêm Thông Tin',
                'min' => '',
                'max' => '',
            ),

            
            /*End field*/
        ),
        'min' => '',
        'max' => '',
    ),
    /*END PERSON 1.0.0*/
?>