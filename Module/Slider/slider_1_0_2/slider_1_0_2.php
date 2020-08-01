<?php
    $slide_array = array();
    if($field['slide_pc']):
        foreach($field['slide_pc'] as $key => $value):
            $slide_array[$key]['slide_pc'] = $value['url'];
        endforeach;
    endif;
    
    if($field['slide_mb']):
        foreach($field['slide_mb'] as $key => $value):
            $slide_array[$key]['slide_mb'] = $value['url'];
        endforeach;
    endif;

    if($check == 0){
        $css_inline .= '
            <style>
                .slide_1_0_2 {
                    padding-top: 55px;
                    padding-bottom: 0;
                    position: relative;
                }
                
                .slide_1_0_2 .owl-carousel .owl-dots {
                    margin-top: -30px !important;
                    position: relative;
                }
                
                @media (max-width: 1024px) {
                    .slide_1_0_2 {
                        padding-top: 67px;
                    }
                }
                
                @media (max-width: 414px) {
                    .slide_1_0_2 {
                        padding-top: 40px;
                    }
                }
                
                @media (max-width: 320px) {
                    .slide_1_0_2 {
                        padding-top: 50px;
                    }
                }
                
                
                /*# sourceMappingURL=slide_1_0_2.css.map */
            </style>
        ';
        add_action('wp_footer', 'slide_1_0_2');
        function slide_1_0_2(){ 
            echo '
                <script>
                    $(".slide_1_0_2 .owl-carousel").owlCarousel({loop:!0,margin:15,items:1,nav:!1,dots:!0,lazyLoad:!0,URLhashListener:!1,autoplayHoverPause:!0,startPosition:"1"});
                </script>
            ';           
        };
    }
?>

<section class="slide_1_0_2">
    <div class="owl-carousel owl-theme ">
        <?php
            foreach($field['slider_info'] as $key => $value):
                echo'
                    <div class="slide_1_0_2__item">
                        <a rel="nofollow" href="'.$value['slider_link'].'">
                            <picture>
                                <source class="owl-lazy" media="(max-width:600px)" data-srcset="'.$value['slider_mb'].'" alt="">
                                <img class="owl-lazy" data-src="'.$value['slider_pc'].'" alt="" />
                            </picture>
                        </a>
                    </div>
                ';
            endforeach;
            
        ?>
    </div>
</section>