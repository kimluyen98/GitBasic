<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Sidebar/sidebar_3_0_0'; 
    if($check == 0){
        $css_inline .= '
			<style>
				@font-face {
					font-family: "Barlow";
					src: url('.$path.'/fonts/Barlow.ttf)
				}
			
				.sidebar_3_0_0__title {
					font-family: Barlow
				}
			
				.sidebar_3_0_0 {
					padding-top: 20px
				}
			
				.sidebar_3_0_0__title {
					font-size: 35px;
					color: #000
				}
			
				.sidebar_3_0_0__postlq {
					margin-bottom: 30px
				}
			
				.sidebar_3_0_0__postlq ul {
					padding-left: 0;
					list-style: none
				}
			
				.sidebar_3_0_0__postlq ul li a {
					display: flex;
					flex-wrap: wrap;
					align-items: center;
					margin-bottom: 5px;
					transition: all 0.4s
				}
			
				.sidebar_3_0_0__postlq ul li a .pic {
					width: 20%
				}
			
				.sidebar_3_0_0__postlq ul li a .pic img {
					width: 100%
				}
			
				.sidebar_3_0_0__postlq ul li a .text {
					width: 80%;
					padding-left: 15px
				}
			
				.sidebar_3_0_0__postlq ul li a .text p {
					color: #EF871A;
					margin: 0;
					transition: all 0.4s
				}
			
				.sidebar_3_0_0__postlq ul li a .text span {
					color: #333
				}
			
				.sidebar_3_0_0__postlq ul li a:hover .text p {
					color: #37A89E;
					transition: all 0.4s
				}
			
				.sidebar_3_0_0__postnb ul {
					list-style: none;
					padding-left: 0
				}
			
				.sidebar_3_0_0__postnb ul li a {
					display: block;
					background: #fff;
					text-align: center;
					margin-bottom: 10px
				}
			
				.sidebar_3_0_0__postnb ul li a .pic img {
					width: 100%
				}
			
				.sidebar_3_0_0__postnb ul li a p {
					font-weight: 600;
					margin: 0;
					padding: 0 10px
				}
			
				.sidebar_3_0_0__postnb ul li a .text {
					padding: 10px;
					display: flex;
					justify-content: space-around
				}
			
				.sidebar_3_0_0__postnb ul li a .text b {
					color: #EF810A
				}
			
				.sidebar_3_0_0__viewmore {
					text-align: center;
					margin: 20px 0 40px
				}
			
				.sidebar_3_0_0__viewmore a {
					background: #EF810A;
					color: #fff;
					text-transform: uppercase;
					font-weight: 600;
					padding: 10px 20px
				}
			
				.sidebar_3_0_0 .owl-carousel {
					margin-top: 20px
				}
			
				.sidebar_3_0_0__acc .accordion ul {
					margin: 0
				}
			
				.sidebar_3_0_0__acc .accordion ul li {
					padding: 0
				}
			
				.sidebar_3_0_0__acc .accordion ul li span {
					background: none;
					color: #323232;
					font-weight: 600;
					padding-left: 60px
				}
			
				.sidebar_3_0_0__acc .accordion ul li span::after {
					color: #EF800A
				}
			
				.sidebar_3_0_0__acc .accordion ul li ul {
					background: #E7E7E9;
					padding: 10px 0 10px 65px
				}
			
				.sidebar_3_0_0__acc .accordion ul li ul li {
					padding: 5px 0;
					font-size: 14px
				}
			
				@media (max-width: 1024px) {
					.sidebar_3_0_0__title {
						font-size: 25px
					}
			
					.sidebar_3_0_0__postlq ul li a .text p {
						font-size: 12px
					}
			
					.sidebar_3_0_0__postlq ul li a .text span {
						font-size: 12px
					}
			
					.sidebar_3_0_0__postnb ul li a p {
						font-size: 12px
					}
			
					.sidebar_3_0_0__postnb ul li a .text b {
						font-size: 12px
					}
			
					.sidebar_3_0_0__postnb ul li a .text span {
						font-size: 12px
					}
			
					.sidebar_3_0_0__viewmore a {
						font-size: 12px
					}
				}
			
				@media (max-width: 812px) {
					.sidebar_3_0_0 {
						display: none
					}
				}
			</style>
		';
		
		add_action('wp_footer', 'sidebar_3_0_0');
        function sidebar_3_0_0(){ 
            echo '
                <script>
				$(".sidebar-owl.owl-carousel").owlCarousel({loop:!0,margin:15,items:1,nav:!1,dots:!0,lazyLoad:!0,URLhashListener:!1,autoplayHoverPause:!0,startPosition:"1"});
                </script>
            ';           
        };
    }
?>      

<div class="sidebar_3_0_0">
	<?php
		foreach( $field as $key2 => $value):  
			foreach( $value as $key3 => $list):

				if( $list['acf_fc_layout'] == 'sidebar_lq' ):
					$data = $list['content_lq'];
					$data1 = $list['title_lq'];
					echo'
						<div class="sidebar_3_0_0__postlq">
						<div class="sidebar_3_0_0__title">
							'.$data1.'
						</div>
						<ul>
						';
								
						foreach($data as $key4 => $post):
							setup_postdata($post);
							$link = get_permalink();
							$title = get_the_title();
							$img = get_the_post_thumbnail_url();
							$date = get_the_date('d-m-Y');
							echo'
								<li>
									<a href="'.$link.'">
										<div class="pic">
											<img src="'.$img.'" alt="">
										</div>
										<div class="text">
											<p>'.$title.'</p>
											<span>'.$date.'</span>
										</div>
									</a>
								</li>
							';
						endforeach;
						wp_reset_postdata(); 

					echo '
						</ul>
						</div>
					';
					
					// End Tin Lien Quan

				elseif( $list['acf_fc_layout'] == 'sidebar_nb' ):
					$data = explode("\n",  $list["title_nb"]);
					$data1 = $list['content_nb'];
					echo '
						<div class="sidebar_3_0_0__postnb">
						<div class="sidebar_3_0_0__title">
							'.$data[0].'
						</div>
						<ul>
					';

					foreach($data1 as $key4 => $post):
						setup_postdata($post);
						$link = get_permalink();
						$title = get_the_title();
						$img = get_the_post_thumbnail_url();
						$date = get_the_date('d-m-Y');
						echo'
							<li>
								<a href="'.$link.'">
									<div class="pic">
										<img src="'.$img.'" alt="">
									</div>
									<p>'.$title.'</p>
									<div class="text">
										<span>'.$date.'</span>
										<b>Xem thêm <i class="icon-right"></i></b>
									</div>
								</a>
							</li>
						';
					endforeach;
					wp_reset_postdata(); 

					echo '
						</ul>
						<div class="sidebar_3_0_0__viewmore">
							<a href="'.$data[1].'">
								Xem tất cả tin tức
							</a>
						</div>
					</div>
					';

				elseif( $list['acf_fc_layout'] == 'sidebar_img' ):
					$data1 = explode("\n",  $list['title_img']);
					echo '
						<div class="sidebar_3_0_0__title">
							'.$data1[0].'
						</div>
						<div class="owl-carousel owl-theme sidebar-owl">
					';

					$rows = $list["img_bf"];
					foreach($rows as $key => $row):
						$data2 = $row["detail_img_bf"];
						echo'
							<div class="item">
								<img class="owl-lazy" data-src="'.$data2.'" alt="">
							</div>
						';
					endforeach;

					echo '
						</div>
						<div class="sidebar_3_0_0__viewmore">
							<a href="'.$data1[1].'">
								Xem tất cả các hình ảnh
							</a>
						</div>
					';
							
				elseif( $list['acf_fc_layout'] == 'sidebar_menu' ):
					
					echo '
						<div class="sidebar_3_0_0__acc">
						<div class="nav accordion accordion-one">
							<ul>
					';

					$rows = $list["menu_dv"];
					foreach($rows as $key => $row):
						$data2 = $row["dv_chinh"];
						if($key == 0):
							$toggled = 'toggled';
							$style = 'display: block;';
						else:
							$toggled = '';
							$style = 'display: none;';
						endif;
						echo'
							<li class="'.$toggled.'"><span>'.$data2.'</span>
							<ul style="'.$style.'">
						';
						foreach($row as $key1 => $row1):
							foreach($row1 as $key2 => $row2):
								$data1 = explode("\n",  $row2['tit_child']);
								echo '
									<li><a href="'.$data1[1].'">'.$data1[0].'</a></li>
								';
							endforeach;
						endforeach;
						echo '
							</ul>
							</li>
						';
					endforeach;

					echo '
							</ul>
							</div>
						</div>
					';
							
				endif;

			endforeach;
		endforeach;
	?>
	
</div>

