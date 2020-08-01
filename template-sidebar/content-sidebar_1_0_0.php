<?php 
    $path = get_template_directory_uri();
    $path = $path.'/Module/Sidebar/sidebar_1_0_0'; 
    if($check == 0){
        $css_inline .= "
			<style>
				.sidebar_1_0_0 {
					margin-left: -10px
				}
				
				.sidebar_1_0_0 figure {
					margin: 20px 0
				}
				
				.sidebar_1_0_0__title {
					text-transform: uppercase;
					height: 45px;
					padding: 5px 0 10px;
					font-size: 15px;
					border-bottom: 1px solid #eee;
					position: relative;
					font-weight: 600;
					color: #004689
				}
				
				.sidebar_1_0_0__title::after {
					content: '';
					border-bottom: 3px solid #6e86d2;
					width: 80px;
					position: absolute;
					left: 0;
					bottom: -2px;
					display: block
				}
				
				.sidebar_1_0_0__list ul {
					list-style: none;
					padding-left: 0
				}
				
				.sidebar_1_0_0__list li {
					padding: 8px 16px 8px 0;
					border-bottom: 1px solid #eee
				}
				
				.sidebar_1_0_0__newsOther {
					margin-top: 20px
				}
				
				.sidebar_1_0_0__newsOther ul {
					padding-left: 0;
					list-style: none
				}
				
				.sidebar_1_0_0__newsOther li {
					display: flex;
					flex-wrap: wrap;
					margin-bottom: 10px
				}
				
				.sidebar_1_0_0__newsOther__pic {
					width: 25%;
					margin-right: 10px
				}
				
				.sidebar_1_0_0__newsOther__pic img {
					width: 100%
				}
				
				.sidebar_1_0_0__newsOther__des {
					width: 70%
				}
				
				.sidebar_1_0_0__newsOther__title {
					font-size: 13px
				}
				
				.sidebar_1_0_0__clip .modal-clip {
					display: block;
					max-width: 550px;
					position: relative;
					cursor: pointer;
					background: #000
				}
				
				.sidebar_1_0_0__clip .modal-clip::before {
					content: '';
					display: block;
					position: absolute;
					z-index: 1;
					background: url($path/images/clip-icon.png) center no-repeat;
					transition: .3s ease-out;
					background-size: 100%;
					width: 50px;
					height: 50px;
					left: calc(50% - 23px);
					top: calc(50% - 23px);
					transition: .3s;
					-webkit-filter: grayscale(100%);
					filter: grayscale(100%);
					opacity: 1
				}
				
				.sidebar_1_0_0__clip .modal-clip img {
					position: relative;
					opacity: .5;
					display: block;
					width: 100%;
					height: auto
				}
				
				@media (max-width: 1024px) {
					.sidebar_1_0_0 img {
						width: 100%
					}
				}
				
				@media (max-width: 812px) {
					.sidebar_1_0_0 {
						display: none
					}
				}

				/*# sourceMappingURL=../maps/sidebar.css.map */
			</style>
        ";

        // add_action('wp_footer', 'change_this_name');
        // function change_this_name(){ 
        //     echo "
        //         <script>
                    
        //         </script>
        //     ";           
        // };
    }
?>      

<div class="sidebar_1_0_0">	
	<?php
		foreach( $field as $key2 => $value):  
			foreach( $value as $key3 => $list):
				if( $list['acf_fc_layout'] == 'sidebar_title' ):
					echo'
						<div class="sidebar_1_0_0__title '.$sidebar_icon.'">
							'.$list['title'].'
						</div>
					';
					// End Tieu De

				elseif( $list['acf_fc_layout'] == 'sidebar_link' ):
					echo '
						<a style="display:block" href="'.$list['link'].'" class="sidebar_1_0_0__title '.$list['icon'].'">
							'.$list['title'].'
						</a>
					';
					// End Tieu De Link

				elseif( $list['acf_fc_layout'] == 'sidebar_sv' ):
					echo '
						<div class="sidebar_1_0_0__list">'.$list['content'].'</div>
					';
					// End List Dich Vu

				elseif( $list['acf_fc_layout'] == 'sidebar_new' ):
					echo'<div class="sidebar_1_0_0__newsOther"><ul>';
					foreach($list['content'] as $post):
						setup_postdata($post);
						$link = get_permalink();
						$title = get_the_title();
						$img = get_the_post_thumbnail_url();
						echo'
							<li>
								<div class="sidebar_1_0_0__newsOther__pic">
									<a href="'.$link.'"><img src="/rs/?w=60&h=60&src='.$img.'" alt="'.$title.'"></a>
								</div>
								<div class="sidebar_1_0_0__newsOther__des">
									<div class="sidebar_1_0_0__newsOther__title">
										<a href="'.$link.'">'.$title.'</a>
									</div>
								</div>
							</li>
						';
					endforeach;
					wp_reset_postdata(); 
					echo'</ul></div>';
					// End Tin Tuc

				elseif( $list['acf_fc_layout'] == 'sidebar_postlist' ):
					echo'<div class="sidebar_1_0_0__list"><ul>';
					$my_query = new WP_Query('cat='.$list['cate'].'&offset=0&showposts='.$list['show'].''); 
					while ($my_query->have_posts()) : 
						$my_query->the_post(); 
						global $post;
						echo '
							<li>
								<a href="'.get_permalink($post->ID).'">'.get_the_title($post->ID).'</a>
							</li>
						';
					endwhile;
					wp_reset_query(); 
					echo'</ul></div>';
					// End Post List

				elseif( $list['acf_fc_layout'] == 'sidebar_clip' ):
					echo '
						<figure class="sidebar_1_0_0__clip">
							<a class="modal-clip" data-video-id="'.getIDvideo($list['link']).'">
								<img src="/rs/?w=277&h=180&src='.$list['image'].'" alt="'.$list['title'].'">
							</a>
						</figure>
					';
					// End Post List

				elseif( $list['acf_fc_layout'] == 'sidebar_photo' ):
					echo'
						<div class="sidebar_1_0_0__slide">
							<div class="owl-carousel owl-theme carousel-1">
							';
								foreach( $list['content'] as $image ):
									echo '
										<figure>
											<a href="'.$image['description'].'">
												<img src="/rs/?w=263&amp;h=175&amp;src='.$image['url'].'" class="aligncenter" alt="'.$image['alt'].'">
											</a>
											<figcaption>Maecenas iaculis, quam necfermentu..</figcaption>
										</figure>
									';
								endforeach;
					echo'
							</div>
						</div>
					';
					// End Post List

				endif;

			endforeach;
		endforeach;
	?>
</div>


