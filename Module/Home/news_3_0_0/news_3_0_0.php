<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/news_3_0_0';
	if($check == 0){
		$css_inline .= "
			<style>
				.news_3_0_0 {
					padding: 30px 0;
				}
				
				.news_3_0_0__title h2 {
					color: #000;
					padding: 0 0 10px;
					margin: 0;
					font-size: 25px;
					text-align: left;
					text-transform: uppercase;
					font-weight: 600;
				}
				
				.news_3_0_0__box__pic img {
					width: 100%;
				}
				
				.news_3_0_0__box__ct {
					text-transform: uppercase;
					font-weight: 600;
					color: #000;
					font-size: 14px;
				}
				
				.news_3_0_0__more {
					color: #09a2d4;
					text-decoration: underline;
					font-style: italic;
					text-transform: none;
					font-weight: 400;
				}
				
				.news_3_0_0__boxList {
					margin: 10px 0;
				}
				
				.news_3_0_0__boxList__item a {
					display: flex;
					flex-wrap: wrap;
				}
				
				.news_3_0_0__boxList__pic {
					max-width: 20%;
				}
				
				.news_3_0_0__boxList__pic img {
					width: 100%;
				}
				
				.news_3_0_0__boxList__desc {
					width: 70%;
					padding-left: 20px;
					font-weight: 500;
					line-height: 20px;
					font-size: 13px;
				}
				
				@media (max-width: 1024px) {
					.news_3_0_0__boxList__pic {
						max-width: 25%;
						margin-bottom: 5px;
					}
				}
				
				@media (max-width: 812px) {
					.news_3_0_0 .col-md-4 {
						width: 33% !important;
					}
					.news_3_0_0__title h2 {
						font-size: 20px;
					}
					.news_3_0_0__box__ct {
						font-size: 12px;
					}
					.news_3_0_0__boxList__desc {
						padding-left: 10px;
						font-size: 11px;
					}
				}
				
				@media (max-width: 414px) {
					.news_3_0_0 .row {
						padding: 0 5px;
					}
					.news_3_0_0 .col-md-4 {
						width: 100% !important;
					}
					.news_3_0_0__boxList__desc {
						font-size: 14px;
					}
				}
				
				@media (max-width: 320px) {
					.news_3_0_0 {
						padding: 0;
					}
				}
			</style>
		";
	}
	
?>
  <section class="news_3_0_0">
	<div class="container">
		<div class="row">
			<div class="col-md-4 news_3_0_0__newsPost">
				<div class="news_3_0_0__title">
					<h2><?php echo $field['news_title1']; ?></h2>
				</div>
					<?php
						foreach($field['content1'] as $key => $post):
							setup_postdata($post);
							$link = get_permalink();
							$title = get_the_title();
							$img = get_the_post_thumbnail_url();
							if($key == 0):
								echo'
									<div class="news_3_0_0__box">
										<a href="'.$link.'">
											<div class="news_3_0_0__box__pic">
												<img class="img-lazy" data-src="'.$img.'" alt="">
											</div>
											<div class="news_3_0_0__box__ct">
												'.$title.'
												<span href="" class="news_3_0_0__more">Xem thêm</span>
											</div>
										</a>
									</div>
								';
							else:
								echo'
								<div class="news_3_0_0__boxList">
									<div class="news_3_0_0__boxList__item">
										<a href="'.$link.'">
											<div class="news_3_0_0__boxList__pic">
											<img class="img-lazy" data-src="'.$img.'" alt="'.$title.'">
											</div>
											<div class="news_3_0_0__boxList__desc">
												'.$title.'
											</div>
										</a>
									</div>
								</div>
								';
							endif;
						endforeach;
						wp_reset_postdata(); 
					?>
				
			</div>
			<div class="col-md-4 news_3_0_0__newsHost">
				<div class="news_3_0_0__title">
					<h2><?php echo $field['news_title2']; ?></h2>
				</div>
				
					<?php
						foreach($field['content2'] as $key => $post):
							setup_postdata($post);
							$link = get_permalink();
							$title = get_the_title();
							$img = get_the_post_thumbnail_url();
							if($key == 0):
								echo'
									<div class="news_3_0_0__box">
										<a href="'.$link.'">
											<div class="news_3_0_0__box__pic">
												<img class="img-lazy" data-src="'.$img.'" alt="">
											</div>
											<div class="news_3_0_0__box__ct">
												'.$title.'
												<span href="" class="news_3_0_0__more">Xem thêm</span>
											</div>
										</a>
									</div>
								';
							else:
								echo'
								<div class="news_3_0_0__boxList">
									<div class="news_3_0_0__boxList__item">
										<a>
											<div class="news_3_0_0__boxList__pic">
											<img class="img-lazy" data-src="'.$img.'" alt="'.$title.'">
											</div>
											<div class="news_3_0_0__boxList__desc">
												'.$title.'
											</div>
										</a>
									</div>
								</div>
								';
							endif;
						endforeach;
						wp_reset_postdata(); 
					?>
					
				
			</div>
			<div class="col-md-4 news_3_0_0__newsQues">
				<div class="news_3_0_0__title">
					<h2><?php echo $field['news_title3']; ?></h2>
				</div>
					<?php
						foreach($field['content3'] as $key => $post):
							setup_postdata($post);
							$link = get_permalink();
							$title = get_the_title();
							$img = get_the_post_thumbnail_url();
							if($key == 0):
								echo'
									<div class="news_3_0_0__box">
										<a href="'.$link.'">
											<div class="news_3_0_0__box__pic">
												<img class="img-lazy" data-src="'.$img.'" alt="">
											</div>
											<div class="news_3_0_0__box__ct">
												'.$title.'
												<span href="" class="news_3_0_0__more">Xem thêm</span>
											</div>
										</a>
									</div>
								';
							else:
								echo'
								<div class="news_3_0_0__boxList">
									<div class="news_3_0_0__boxList__item">
										<a>
											<div class="news_3_0_0__boxList__pic">
											<img class="img-lazy" data-src="'.$img.'" alt="'.$title.'">
											</div>
											<div class="news_3_0_0__boxList__desc">
												'.$title.'
											</div>
										</a>
									</div>
								</div>
								';
							endif;
						endforeach;
						wp_reset_postdata(); 
					?>
			</div>
		</div>
	</div>
</section>


