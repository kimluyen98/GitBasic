<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Sidebar/sidebar_1_2_0'; 
    if($check == 0){
        $css_inline .= '
			<style>
				.sidebar_1_2_0Title {
					font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif
				}
				
				a {
					text-decoration: none
				}
				
				@media (max-width: 812px) {
					.sidebar_1_2_0 {
						display: none
					}
				}
				
				.sidebar_1_2_0Title {
					color: #0c4384;
					text-transform: uppercase;
					height: 45px;
					padding: 5px 0 10px 0;
					font-size: 16px;
					border-bottom: 1px solid #eee;
					position: relative;
					font-weight: 600
				}
				
				.sidebar_1_2_0Title:after {
					content: "";
					border-bottom: 2px solid #6e86d2;
					width: 100%;
					position: absolute;
					left: 0;
					bottom: 0px;
					display: block
				}
				
				.sidebar_1_2_0List ul {
					margin: 10px 0;
					list-style: none;
					padding: 0
				}
				
				.sidebar_1_2_0List li {
					padding: 10px 16px;
					border-bottom: 1px solid #eee;
					padding-left: 0
				}
				
				.sidebar_1_2_0List li a {
					transition: 0.6s
				}
				
				.sidebar_1_2_0List li a:hover {
					transition: 0.6s;
					color: #f26649
				}
				
				.sidebar_1_2_0Thumb {
					margin: 20px 0 0
				}
				
				.sidebar_1_2_0Thumb .media {
					padding-bottom: 10px;
					border-bottom: 1px solid #ccc;
					margin-bottom: 10px
				}
				
				.sidebar_1_2_0Thumb .media:last-child {
					border: none
				}
				
				@media (max-width: 414px) {
					.sidebar_1_2_0Thumb .media {
						flex-wrap: wrap
					}
				}
				
				.sidebar_1_2_0Thumb .media-pic {
					width: 60px
				}
				
				.sidebar_1_2_0Thumb .media-pic img {
					width: 100%;
					height: 60px;
					border-radius: 4px
				}
				
				.sidebar_1_2_0Thumb .media-body {
					padding-left: 15px;
					align-self: center
				}
				
				.sidebar_1_2_0Thumb .media-title {
					color: #333;
					font-size: 13px;
					height: 40px;
					overflow: hidden
				}
				
				.sidebar_1_2_0Photo {
					margin: 20px 0
				}
				
				.sidebar_1_2_0Photo img {
					width: 100%
				}
				
				.sidebar_1_2_0Photo .modal-clip {
					display: table;
					margin: 0 auto;
					max-width: 550px;
					position: relative;
					cursor: pointer;
					background: #000
				}
				
				.sidebar_1_2_0Photo .modal-clip:before {
					content: "";
					display: block;
					position: absolute;
					z-index: 1;
					background: url('.$path.'/images/clip-icon.png) center no-repeat;
					transition: 0.3s ease-out;
					background-size: 100%;
					width: 50px;
					height: 50px;
					left: calc(50% - 23px);
					top: calc(50% - 23px);
					transition: 0.3s;
					-webkit-filter: grayscale(100%);
					filter: grayscale(100%);
					opacity: 1
				}
				
				.sidebar_1_2_0Photo .modal-clip img {
					position: relative;
					opacity: .5;
					display: block
				}
				
				.sidebar_1_2_0Slide {
					margin: 20px 0
				}
				
				.sidebar_1_2_0Slide figure {
					position: relative;
					margin: 0
				}
				
				.sidebar_1_2_0Slide figcaption {
					position: absolute;
					left: 0;
					bottom: 0;
					padding: 5px 0;
					text-align: center;
					width: 100%;
					background: rgba(0, 0, 0, 0.1);
					color: #fff
				}
				
				.sidebar_1_2_0Slide .owl-theme .owl-nav [class*=owl-] {
					position: absolute;
					top: 40%;
					font-size: 28px;
					outline: none;
					line-height: 20px;
					padding: 4px 7px
				}
				
				.sidebar_1_2_0Slide .owl-theme .owl-nav .owl-prev {
					left: 0px
				}
				
				.sidebar_1_2_0Slide .owl-theme .owl-nav .owl-next {
					right: 0px
				}
				
				.sidebar_1_2_0Slide .owl-theme .owl-nav [class*=owl-]:hover {
					background: rgba(0, 0, 0, 0.3);
					color: #333
				}
				
				.sidebar_1_2_0Slide .owl-theme .owl-nav [class*=owl-] {
					background: rgba(0, 0, 0, 0.3);
					color: #fff
				}
			</style>
		';
		
		add_action('wp_footer', 'sidebar_1_2_0');
        function sidebar_1_2_0(){ 
            echo '
                <script>
					$(".carousel-1").owlCarousel({
						loop: true,
						margin: 15,
						items: 1,
						nav: true,
						dots: true,
						lazyLoad:true
					});
                </script>
            ';           
        };
    }
?>      

<div class="sidebar_1_2_0">
	<?php
		foreach( $field as $key2 => $value):  
			foreach( $value as $key3 => $list):
				if( $list['acf_fc_layout'] == 'sidebar_title' ):
					echo'
						<div class="sidebar_1_2_0Title">
							<i class=""></i> '.$list['title'].'
						</div>
					';
					// End Tieu De

				elseif( $list['acf_fc_layout'] == 'sidebar_sv' ):
					echo '
						<div class="list sidebar_1_2_0List">
							'.$list['content'].'
						</div>
					';
					// End List Dich Vu

				elseif( $list['acf_fc_layout'] == 'sidebar_clip' ):
					$video = explode("\n", $list['detail_video']);
					$youtube = getIDVideo($video[2]);
					echo '
					<figure class="sidebar_1_2_0Photo">
						<a class="js-video-button modal-clip" data-video-id="'.$youtube.'" href="#">
							<img src="'.$video[1].'" alt="'.$video[0].'">
						</a>
					</figure>
					';		

				elseif( $list['acf_fc_layout'] == 'sidebar_new' ):
					$news = $list['content'];
					echo '
					<ul class="list-unstyled sidebar_1_2_0Thumb">
					';
					foreach($news as $key4 => $post):
						setup_postdata($post);
						$link = get_permalink();
						$title = get_the_title();
						$img = get_the_post_thumbnail_url();
						echo'
						<li class="media">
							<div class="media-pic">
								<a href="'.$link.'"><img src="'.$img.'" alt="'.$title.'"></a>
							</div>
							<div class="media-body">
								<div class="media-title"><a href="'.$link.'">'.$title.'</a></div>
							</div>
						</li>
						';
					endforeach;
					wp_reset_postdata();
					echo '
					</ul>
					';

				elseif( $list['acf_fc_layout'] == 'sidebar_img' ):
					echo '
						<div class="sidebar_1_2_0Slide">
						<div class="owl-carousel owl-theme carousel-1">
					';	
					$rows = $list["album_place"];
					foreach($rows as $row):
						$place_title = $row['place_title'];
						$place_url = $row['place_url'];
						echo '
							<figure>
								<a href="#"><img src="'.$place_url.'" alt="'.$place_title.'"></a>
							</figure>
						';
					endforeach;
					echo '
						</div>
						</div>
					';	
				endif;

			endforeach;
		endforeach;
	?>
</div>



