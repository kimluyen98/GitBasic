<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/news_3_3_0';

	if($check == 0){
		$css_inline .= '
        <style>
            .news_3_3_0 {
                font-family: "Encode Sans Expanded", sans-serif;
            }
            .news_3_3_0 .english{
                display: none;
            }
            .news_3_3_0 {
                padding: 20px 0 30px;
                background: #F2F2F2;
            }
        
            .news_3_3_0_title {
                text-align: center;
                color: #003c7d;
                font-size: 48px;
            }
        
            .news_3_3_0_box {
                padding-top: 20px;
                display: flex;
                justify-content: space-between;
                flex-wrap: wrap;
            }
        
            .news_3_3_0_item {
                width: 32%;
            }
        
            .news_3_3_0_item__pic img {
                width: 100%;
                display: block;
            }
        
            .news_3_3_0_item__sub {
                font-size: 16px;
                padding-top: 15px;
                height: 150px;
            }
        
            .news_3_3_0_item__sub p {
                color: #003c7d;
                font-weight: 600;
            }
        
            .news_3_3_0_item__more {
                text-align: center;
                background-color: #CF9053;
                color: #fff;
                font-weight: 600;
                padding: 8px 10px;
                width: 40%;
                margin-top: 10px;
                transition: 0.3s;
            }
        
            .news_3_3_0_item__more:hover {
                background-color: #00448F;
                transition: 0.3s;
            }
        
            @media (max-width: 1024px) {
                .news_3_3_0_item__sub {
                    font-size: 14px;
                    height: 130px;
                }
        
                .news_3_3_0_item__more {
                    width: 50%;
                    font-size: 14px;
                }
            }
        
            @media (max-width: 812px) {
                .news_3_3_0_title {
                    font-size: 38px;
                }
        
                .news_3_3_0_item__sub {
                    height: 155px;
                }
            }
        
            @media (max-width: 414px) {
                .news_3_3_0 {
                    padding: 20px 0 10px;
                }
        
                .news_3_3_0_title {
                    font-size: 30px;
                }
        
                .news_3_3_0_item {
                    width: 100%;
                    display: flex;
                    flex-wrap: wrap;
                    margin-bottom: 16px;
                }
        
                .news_3_3_0_item__pic {
                    width: 30%;
                }
        
                .news_3_3_0_item__pic img {
                    width: 100%;
                }
        
                .news_3_3_0_item__bottom {
                    width: 70%;
                    flex: 1;
                    padding-left: 12px;
                }
        
                .news_3_3_0_item__sub {
                    height: auto;
                    padding-top: 0;
                }
        
                .news_3_3_0_item__sub p {
                    margin-bottom: 0;
                }
        
                .news_3_3_0_item__sub span {
                    display: block;
                    width: 240px;
                    white-space: nowrap;
                    overflow: hidden;
                    text-overflow: ellipsis;
                }
        
                .news_3_3_0_item__more {
                    display: none;
                }
            }
        
            @media (max-width: 360px) {
                .news_3_3_0_title {
                    font-size: 26px;
                }
        
                .news_3_3_0_item__sub {
                    font-size: 13px;
                }
        
                .news_3_3_0_item__sub span {
                    width: 180px;
                }
            }
        
            /*# sourceMappingURL=news_3_3_0.css.map */
        </style>
        ';
		add_action('wp_footer', 'news_3_3_0');
		function news_3_3_0(){ 
			echo '
				
			';           
		};		
	}
	
?>
<section class="news_3_3_0">
    <div class="container">
        <?php
            $data = explode("\n",  $field['news_title']);
            echo'
                <div class="news_3_3_0_title vietnames">'.$data[0].'</div>
            ';
        ?>
        <?php
            $data = explode("\n",  $field['news_title']);
            echo'
                <div class="news_3_3_0_title english">'.$data[1].'</div>
            ';
        ?>
        <div class="news_3_3_0_box">

            <?php
                foreach($field['news_content'] as $key => $post):
                    setup_postdata($post);
                    $link = get_permalink();
                    $title = get_the_title();
                    $img = get_the_post_thumbnail_url();
                    $excerpt = wp_trim_words( get_the_excerpt(), 20);
                    echo'
                    <a href="'.$link.'" class="news_3_3_0_item">
                        <div class="news_3_3_0_item__pic">
                            <img src="'.$img.'" alt="">
                        </div>
                        <div class="news_3_3_0_item__bottom">
                            <div class="news_3_3_0_item__sub">
                                <p>'.$title.'</p>
                                <span>'.$excerpt.'</span>
                            </div>
                            <div class="news_3_3_0_item__more vietnames">Xem thêm <i class="icon-right-3"></i></div>
                            <div class="news_3_3_0_item__more english">Read more <i class="icon-right-3"></i></div>
                        </div>
                    </a>
                    ';
                endforeach;
                wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>

<?php if(isset($_GET['e'])): ?>
<?php
		$css_inline .='
			<style>
				.news_3_3_0 .english {
					display: block;
				}
				.news_3_3_0 .vietnames {
					display: none;
				}
			</style>
		';
	?>
<?php endif;?>