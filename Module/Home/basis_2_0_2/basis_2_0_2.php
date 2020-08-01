<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/basis_2_0_2';
	if($check == 0){
		$css_inline .= "
			<style>
			.basis_2_0_2 {
				padding: 30px 0;
				background: #F4F4F4;
			}
			
			.basis_2_0_2__title h2 {
				font-size: 28px;
				text-align: center;
				font-weight: 600;
				padding: 0;
				margin: 0 0 15px;
				line-height: 40px;
				text-transform: uppercase;
				color: #000;
			}
			
			.basis_2_0_2__line {
				width: 258px;
				margin: 15px auto 40px;
				position: relative;
				border-top: 1px solid #00c6ca;
			}
			
			.basis_2_0_2__line::before {
				width: 160px;
				margin: 0 auto;
				border-top: 3px solid #00c6ca;
				position: absolute;
				left: 50px;
				top: -2px;
				content: '';
			}
			
			.basis_2_0_2 .owl-carousel img {
				width: auto;
				margin: 0 auto;
			}
			
			.basis_2_0_2 .owl-theme .owl-dots .owl-dot.active span,
			.basis_2_0_2 .owl-theme .owl-dots .owl-dot:hover span {
				background: #00d9dd;
			}
			
			.basis_2_0_2__ct {
				text-align: center;
				color: #333;
				font-weight: 600;
				padding: 10px 15px;
			}
			
			@media (max-width: 1024px) {
				.basis_2_0_2 .owl-carousel img {
					width: 100%;
					margin: 0 auto;
				}
			}
			
			@media (max-width: 812px) {
				.basis_2_0_2__ct {
					font-size: 14px;
				}
			}
			
			@media (max-width: 414px) {
				.basis_2_0_2 {
					padding: 10px 0;
				}
				.basis_2_0_2__title h2 {
					font-size: 20px;
					line-height: 30px;
				}
				.basis_2_0_2__ct {
					padding: 10px;
					font-size: 13px;
				}
			}
			
			@media (max-width: 320px) {
				.basis_2_0_2__ct {
					padding: 10px 0 0;
					font-size: 13px;
				}
			}
			
			
			/*# sourceMappingURL=basis_2_0_2.css.map */
			</style>
		";	

		add_action('wp_footer', 'basis_2_0_2');
		function basis_2_0_2(){ 
			echo '
				<script>
					$(".basis_2_0_2 .owl-carousel").owlCarousel({loop:!1,margin:30,items:1,responsive:{0:{items:2},414:{items:2},768:{items:3},1024:{items:4},1280:{items:4}}});
				</script>
			';           
		};
	}
?>
<section class="basis_2_0_2">
    <div class="container">
        <div class="basis_2_0_2__title">
            <h2><?php echo $field['title']; ?></h2>
        </div>
        <div class="basis_2_0_2__line"></div>
        <div class="owl-carousel owl-theme">

            <?php
				$rows = $field["basis_info"];
				foreach($rows as $row):
					echo '
						<a href="'.$row['basis_link'].'" class="basis_2_0_2__item">
							<div class="basis_2_0_2__pic">
								<img src="'.$row['basis_img'].'" alt="'.$row['basis_title'].'">
							</div>
							<div class="basis_2_0_2__ct">'.$row['basis_title'].'</div>
						</a>
					';
				endforeach;
			?>
        </div>
    </div>
</section>