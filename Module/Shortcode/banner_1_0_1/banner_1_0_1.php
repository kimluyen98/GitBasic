<?php

/*Banner bài viết*/
function banner_1_0_1_shortcode($atts,$content=null){
    static $count = 0;
    $count++;
	$title = $atts['title'];
	$img_pc = $atts['img_pc'];
	$img_mb = $atts['img_mb'];
    $link = $atts['link'];
    $style = '
    <style>
        .banner_1_0_1 img{width:100%}
    </style>';
    if ($count > 1):
        $style = '';
    endif;
	return $style.'  
        <a href="'.$link.'" class="banner_1_0_1">
            <picture>
                <source media="(min-width:600px)" srcset="'.$img_pc.'">
                <img src="'.$img_mb.'" alt="'.$title.'">
            </picture>
        </a>
	';
}
add_shortcode('banner_1_0_1','banner_1_0_1_shortcode');
/*End Banner bài viết*/

?>