<?php
    /*NEWS 3.3.0*/
    'id_news_3_3_0' => array(
        'key' => 'id_news_3_3_0',
        'name' => 'news_3_3_0',
        'label' => 'News 3.3.0',
        'display' => 'block',
        'sub_fields' => array(
            /*Bắt đầu field*/
            array(
                'key' => 'id_news_3_3_0_tab1',
                'label' => 'Tin tức',
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
                'key' => 'id_news_3_3_0_tab1_sub1',
                'label' => 'Tiêu đề',
                'name' => 'news_title',
                'type' => 'textarea',
                'instructions' => '
                    Dòng 1: Tiêu đề tiếng việt <br>
                    Dòng 2: Tiêu đề tiếng anh.
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
                'rows' => 2,
            ),
            array(
                'key' => 'id_news_3_3_0_tab1_sub2',
                'label' => 'Danh sách bài viết',
                'name' => 'news_content',
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
    /*END NEWS 3.3.0*/
?>