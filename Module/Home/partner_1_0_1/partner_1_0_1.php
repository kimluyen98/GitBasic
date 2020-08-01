<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/partner_1_0_1';
	if($check == 0){
		$css_inline .= "
		<style>
			.partner_1_0_1 {
				background: #EDEDED;
				padding: 30px 0
			}
			
			.partner_1_0_1__title h2 {
				font-size: 28px;
				text-align: center;
				font-weight: 600;
				padding: 0;
				margin: 0 0 15px;
				line-height: 40px;
				text-transform: uppercase;
				color: #000
			}
			
			.partner_1_0_1__line {
				width: 258px;
				margin: 15px auto 40px;
				position: relative;
				border-top: 1px solid #00c6ca
			}
			
			.partner_1_0_1__line::before {
				width: 160px;
				margin: 0 auto;
				border-top: 3px solid #00c6ca;
				position: absolute;
				left: 50px;
				top: -2px;
				content: ''
			}
			
			.partner_1_0_1__item {
				padding: 20px 0
			}
			
			.partner_1_0_1 .owl-carousel img {
				width: auto
			}
			
			.partner_1_0_1 .owl-theme .owl-dots .owl-dot.active span,
			.partner_1_0_1 .owl-theme .owl-dots .owl-dot:hover span {
				background: #00d9dd
			}
			
			@media (max-width: 1024px) {
				.partner_1_0_1__item {
					padding: 20px 10px
				}
				.partner_1_0_1 .owl-carousel img {
					width: 100%
				}
			}
			
			@media (max-width: 320px) {
				.partner_1_0_1__title h2 {
					font-size: 20px
				}
			}
			/*# sourceMappingURL=../maps/partner.css.map */
		</style>
		";	

		add_action('wp_footer', 'partner_1_0_1');
		function partner_1_0_1(){ 
			echo '
				<script>
				$(".partner_1_0_1 .owl-carousel").owlCarousel({loop:!1,margin:10,items:1,responsive:{0:{items:2},414:{items:2},768:{items:6},1024:{items:6},1280:{items:6}}});
				</script>
			';           
		};
	}
?>

<section class="partner_1_0_1">
    <div class="container">
        <div class="partner_1_0_1__title">
            <h2><?php echo $field['title']; ?></h2>
        </div>
        <div class="partner_1_0_1__line"></div>
        <div class="owl-carousel owl-theme">
            <?php
					$rows = $field["partner_if"];
					foreach($rows as $row):
					echo '
						<div class="partner_1_0_1__item">
							<a href="'.$row['partner_url'].'">
								<img src="'.$row['partner_img'].'" alt="'.$row['partner_sub'].'">
							</a>
						</div>
					';
				endforeach;
			?>
        </div>
    </div>
</section>