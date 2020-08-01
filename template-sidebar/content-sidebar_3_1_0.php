<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Sidebar/sidebar_3_1_0'; 
    if($check == 0){
        $css_inline .= '
			<style>
				a {
					text-decoration: none;
				}
				
				.sidebar_3_1_0_tieude, .sidebar_3_1_0_more {
					font-family: -apple-system, system-ui, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
				}
				
				.sidebar_3_1_0_tieude {
					text-transform: uppercase;
					color: #555555;
					font-weight: 600;
					font-size: 20px;
					text-align: center;
					margin-bottom: 10px;
					border-bottom: 1px solid #c5c5c5;
					padding: 6px 0;
					background-color: #f3f3f3;
					border-radius: 25px 25px 0 0;
				}
				.sidebar_3_1_0_more {
					text-transform: uppercase;
					color: #555555;
					font-weight: 600;
					font-size: 20px;
					text-align: center;
					border-top: 1px solid #c5c5c5;
					padding: 6px 0;
					background-color: #f3f3f3;
					border-radius: 0 0 25px 25px;
				}
				.sidebar_3_1_0_top {
					border: 1px solid #c5c5c5;
					border-radius: 25px;
					margin-bottom: 25px;
				}
				.sidebar_3_1_0_item {
					display: flex;
					align-items: center;
					flex-wrap: wrap;
					margin-bottom: 10px;
					padding: 0 10px;
				}
				.sidebar_3_1_0_item__pic {
					width: 40%;
				}
				.sidebar_3_1_0_item__pic img {
					width: 100%;
				}
				.sidebar_3_1_0_item__name {
					width: 60%;
					flex: 1;
					font-size: 12px;
					padding-left: 10px;
				}
				.sidebar_3_1_0_content {
					background-color: #f9f9f9;
					padding: 10px;
					margin-bottom: 20px;
				}
				.sidebar_3_1_0_content .item_sub {
					padding-top: 10px;
					font-size: 13px;
					text-align: justify;
				}
				.sidebar_3_1_0_content .item_tt b {
					text-transform: uppercase;
				}
				.sidebar_3_1_0_content .item_time {
					padding: 6px 0;
				}
				.sidebar_3_1_0_content .item_more {
					padding: 10px 0 15px;
				}
				.sidebar_3_1_0_content .item_more span {
					background-color: #e49d38;
					padding: 4px 10px;
					border-radius: 8px;
				}
				
				@media (max-width: 1024px) {
					.sidebar_3_1_0_tieude {
					margin-bottom: 5px;
					font-size: 15px;
					}
					.sidebar_3_1_0_more {
					font-size: 15px;
					}
					.sidebar_3_1_0_item {
					padding: 0 5px;
					}
					.sidebar_3_1_0_item__name {
					padding-left: 6px;
					font-size: 11px;
					}
				}
				@media (max-width: 812px) {
					.sidebar_3_1_0 {
					display: none;
					}
				}
				@media (max-width: 414px) {
					.sidebar_3_1_0 {
					display: block;
					}
					.sidebar_3_1_0_item {
					padding: 0 10px;
					}
					.sidebar_3_1_0_item__name {
					padding-left: 10px;
					font-size: 13px;
					}
				}
			</style>
		';
		
		add_action('wp_footer', 'sidebar_3_1_0');
        function sidebar_3_1_0(){ 
            echo '
                <script>
				$(".sidebar_3_1_0_content .owl-carousel").owlCarousel({loop:!1,margin:20,items:1,touchDrag:!1,mouseDrag:!1,autoplay:!0,loop:!0,dots:!0,responsive:{0:{items:1},414:{items:1},768:{items:1},1024:{items:1}}}),$(".sidebar_3_1_0_image .owl-carousel").owlCarousel({loop:!1,margin:20,items:1,touchDrag:!1,mouseDrag:!1,autoplay:!0,dots:!1,loop:!0,responsive:{0:{items:1},414:{items:1},768:{items:1},1024:{items:1}}});var tabs5=$(".album_4_0_0_tabs .tab");tabs5.click(function(a){$(".album_4_0_0_tabs .tab").removeClass("active"),$(a.target).addClass("active")});
                </script>
            ';           
        };
    }
?>      

<div class="sidebar_3_1_0">
	<?php
		foreach( $field as $key2 => $value):  
			foreach( $value as $key3 => $list):

				if( $list['acf_fc_layout'] == 'sidebar_lq' ):
					$data = explode("\n",  $list['sidebar_lq_detail']);
					echo'
						<div class="sidebar_3_1_0_top">
							<div class="sidebar_3_1_0_tieude">'.$data[0].'</div>
							<div class="sidebar_3_1_0_box">
						';
								
						foreach($list['content_lq'] as $key4 => $post):
							setup_postdata($post);
							$link = get_permalink();
							$title = get_the_title();
							$img = get_the_post_thumbnail_url();
							echo'
								<a href="'.$link.'" class="sidebar_3_1_0_item">
									<div class="sidebar_3_1_0_item__pic">
										<img src="'.$img.'" alt="">
									</div>
									<div class="sidebar_3_1_0_item__name">
										'.$title.'
									</div>
								</a>
							';
						endforeach;
						wp_reset_postdata(); 

					echo '
							</div>
							<div class="sidebar_3_1_0_more">
								<a href="'.$data[1].'">Xem thêm</a>
							</div>
						</div>
					';
					
					// End Tin Lien Quan

				elseif( $list['acf_fc_layout'] == 'sidebar_postslide' ):
					echo '
						<div class="sidebar_3_1_0_content">
						<div class="owl-carousel owl-theme">
					';

					$rows = $list["sidebar_kh"];
					foreach($rows as $key => $row):
						$data1 = explode("\n",  $row["sidebar_kh_detail"]);
						$data2 = $row['sidebar_kh_tom'];
						echo'
							<a href="'.$data1[3].'" class="sidebar_3_1_0_content_item">
								<div class="item_pic">
									<img class="img-lazy" data-src="'.$data1[2].'" alt="">
								</div>
								<div class="item_sub">
									<div class="item_tt">
									'.$data1[0].'
									</div>
									<div class="item_time">'.$data1[1].'</div>
									<div class="item_text">
									'.$data2.'
									</div>
									<div class="item_more">
										<span> Xem thêm</span>
									</div>
								</div>
							</a>
						';
					endforeach;

					echo '
						</div>
						</div>
					';

				elseif( $list['acf_fc_layout'] == 'sidebar_banner' ):
					echo '
						<div class="sidebar_3_1_0_image">
						<div class="owl-carousel owl-theme">
					';

					$rows = $list["banner"];
					foreach($rows as $key => $row):
						$data1 = explode("\n",  $row["detail_banner"]);
						echo'
							<a href="'.$data1[1].'">
								<img class="img-lazy" data-src="'.$data1[0].'" alt="">
							</a>
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



