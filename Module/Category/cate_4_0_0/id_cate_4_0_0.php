<?php

/*CATE 4.0.0*/
'id_cate_4_0_0' => array(
    'key' => 'id_cate_4_0_0',
    'name' => 'cate_4_0_0',
    'label' => 'Cate 4.0.0',
    'display' => 'block',
    'sub_fields' => array(
        /*Bắt đầu field*/
        array(
            /* Tab tiêu đề*/
            'key' => 'id_cate_4_0_0_tab1',
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
            'key' => 'id_cate_4_0_0_tab1_sub1',
            'label' => 'Tiêu đề',
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
            'key' => 'id_cate_4_0_0_tab1_sub2',
            'label' => 'Chi nhánh',
            'name' => 'header_place',
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
                    'key' => 'id_cate_4_0_0_tab1_sub2_layout1',
                    'label' => 'Danh mục',
                    'name' => 'place_city',
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
                    'key' => 'id_cate_4_0_0_tab1_sub2_layout2',
                    'label' => 'Link Url',
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
        array(
            /* Tab Service*/
            'key' => 'id_cate_4_0_0_tab2',
            'label' => 'Bài Viết Nổi Bật',
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
            'key' => 'id_cate_4_0_0_tab2_sub1',
            'label' => 'Chi tiết bài viết',
            'name' => 'detail_bv',
            'type' => 'textarea',
            'instructions' => '
                Dòng 1 : Tiêu đề bài viết <br>
                Dòng 2 : Mô tả bài viết <br>
                Dòng 3 : Ngày đăng <br>
                Dòng 4 : Link ảnh ( Size 610x340 )<br>
                Dòng 5 : Link comment <br>
                Dòng 6 : Share bài
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

        /*End field*/
    ),
    'min' => '',
    'max' => '',
),
/*END CATE 4.0.0*/

?>