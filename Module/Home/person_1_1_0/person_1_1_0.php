<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/person_1_1_0';
	if($check == 0){
		$css_inline .= "
				<style>
					.person_1_1_0 {
						padding: 30px 0;
					}
					
					.person_1_1_0__info {
						display: flex;
						position: relative;
					}
					
					.person_1_1_0__pic img {
						width: 100%;
					}
					
					.person_1_1_0__ct {
						width: 100%;
						padding-top: 80px;
					}
					
					.person_1_1_0__title {
						font-size: 28px;
						text-align: center;
						padding: 0;
						margin: 0 0 15px;
						line-height: 40px;
						text-transform: uppercase;
						color: #000;
					}
					
					.person_1_1_0__line {
						width: 258px;
						margin: 15px auto 40px;
						position: relative;
						border-top: 1px solid #00c6ca;
					}
					
					.person_1_1_0__line::before {
						width: 160px;
						margin: 0 auto;
						border-top: 3px solid #00c6ca;
						position: absolute;
						left: 50px;
						top: -2px;
						content: '';
					}
					
					.person_1_1_0__name {
						text-transform: uppercase;
						font-size: 16px;
						text-align: right;
						color: #000;
					}
					
					.person_1_1_0__more {
						color: #09a2d4;
						text-decoration: underline;
						font-style: italic;
					}
					
					.person_1_1_0 .owl-carousel img {
						width: auto;
					}
					
					.person_1_1_0 .col-md-5 {
						position: absolute;
						right: 0;
						bottom: 0;
					}
					
					.person_1_1_0__tabs1 {
						display: flex;
						width: 257.5px;
						margin-right: 10px;
					}
					
					.person_1_1_0 .owl-dots {
						display: none;
					}
					
					@media (max-width: 1024px) {
						.person_1_1_0__ct {
							padding-left: 0px;
							padding-top: 0px;
						}
					}
					
					@media (max-width: 812px) {
						.person_1_1_0__title {
							font-size: 18px;
						}
						.person_1_1_0__ct {
							padding-left: 20px;
						}
						.person_1_1_0__pic img {
							width: 350px !important;
						}
						.person_1_1_0__tabs1 img {
							width: 63px !important;
						}
					}
					
					@media (max-width: 414px) {
						.person_1_1_0__title {
							font-size: 17px;
							margin: 0;
							line-height: 18px;
							padding-top: 20px;
						}
						.person_1_1_0__info {
							display: block;
						}
						.person_1_1_0__pic img {
							width: 100% !important;
						}
						.person_1_1_0__ct {
							width: 100%;
							padding-left: 0;
						}
						.person_1_1_0 .col-md-5 {
							position: relative;
							right: auto;
							bottom: auto;
							padding: 10px;
						}
						.person_1_1_0__tabs1 img {
							width: 75px !important;
						}
					}
					
					@media (max-width: 375px) {
						.person_1_1_0__tabs1 img {
							width: 65px !important;
						}
					}
					
					@media (max-width: 320px) {
						.person_1_1_0__title {
							font-size: 15px;
							margin: 20px 0 0;
						}
						.person_1_1_0__line {
							margin: 5px 0 20px;
						}
						.person_1_1_0__tabs1 img {
							width: 53px !important;
						}
					}
					
					
					/*# sourceMappingURL=person_1_1_0.css.map */
				
				</style>
		";
		add_action('wp_footer', 'person_1_1_0');
		
	}
?>

<section class="person_1_1_0">
        <div class="container">
            <div id="big" class="owl-carousel owl-theme owl-loaded owl-drag">
                <div class="owl-stage-outer">
                    <div class="owl-stage ">
					<?php
							foreach($field['person_info'] as $key => $value):
								$data = explode("\n",  $value["title"]);
								echo'
								<div class="owl-item ">
									<div class="person_1_1_0__info">
										<div class="item person_1_1_0__pic">
										<a href=""> <img src="'.$data[0].'" alt=""> </a>
										</div>
										<div class="person_1_1_0__ct">
											<div class="person_1_1_0__title">'.$field['person_title'].'</div>
											<div class="person_1_1_0__line"></div>
											<div class="person_1_1_0__desc">
											<p>'.$data[1].'
												<a href="'.$data[2].'" class="person_1_1_0__more">Xem thêm <i class="icon-angle-double-right"></i></a>
											</p>
											</div>
											<div class="person_1_1_0__name">- '.$data[3].' -</div>
										</div>
									</div>
								</div>
								';
							endforeach;
						?>						
                    </div>
                </div>
                <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-arrow-right" aria-hidden="true"></i></button></div>
                <div class="owl-dots disabled"></div>
            </div>
            <div class="row">
                <div class="col-md-7"></div>
                <div class="col-md-5">
                    <div id="thumbs" class="owl-carousel owl-theme tabs owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage ">
                                <div class="person_1_1_0__tabs1 ">
								<?php
									foreach($field['person_info'] as $key => $value):
										$data = explode("\n",  $value["title"]);
										echo'
										<div class="owl-item">
											<div class="item tab active">
												<img src="'.$data[4].'" alt="'.$data[3].'" class=" tab active">
											</div>
                                    	</div>
										
										';
									endforeach;
								?>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="icon-left-open-big" aria-hidden="true"></i></button><button type="button" role="presentation" class="owl-next disabled"><i class="icon-right-open-big" aria-hidden="true"></i></button></div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>

        </div>
    </section>



