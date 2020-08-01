<?php
	$path = get_template_directory_uri();
	$path = $path.'/Module/Home/person_2_1_0';
	if($check == 0){
		$css_inline .= "
			<style>
			.person_2_1_0 {
				padding: 30px 0;
			}
			
			.person_2_1_0__title h2 {
				font-size: 28px;
				text-align: center;
				font-weight: 600;
				padding: 0;
				margin: 0 0 15px;
				line-height: 40px;
				text-transform: uppercase;
				color: #000;
			}
			
			.person_2_1_0__line {
				width: 258px;
				margin: 15px auto 40px;
				position: relative;
				border-top: 1px solid #00c6ca;
			}
			
			.person_2_1_0__line::before {
				width: 160px;
				margin: 0 auto;
				border-top: 3px solid #00c6ca;
				position: absolute;
				left: 50px;
				top: -2px;
				content: '';
			}
			
			.person_2_1_0__name {
				text-align: center;
				font-size: 15px;
				text-transform: uppercase;
				color: #333;
				font-weight: 600;
				padding: 10px 0;
			}
			
			.person_2_1_0 .owl-theme .owl-dots .owl-dot.active span,
			.person_2_1_0 .owl-theme .owl-dots .owl-dot:hover span {
				background: #00d9dd;
			}
			
			@media (max-width: 1024px) {
				.person_2_1_0 .owl-carousel img {
					width: 100%;
					margin: 0 auto;
				}
			}
			
			@media (max-width: 414px) {
				.person_2_1_0 {
					padding: 10px 0;
				}
				.person_2_1_0__title h2 {
					font-size: 20px;
					line-height: 30px;
				}
			}
			
			@media (max-width: 320px) {
				.person_2_1_0__name {
					font-size: 12px;
				}
			}
			
			
			/*# sourceMappingURL=person_2_1_0.css.map */
			</style>
		";
		add_action('wp_footer', 'person_2_1_0');
		function person_2_1_0(){
			echo '
				<script>
					$(".person_2_1_0 .owl-carousel").owlCarousel({loop:!1,margin:20,items:1,responsive:{0:{items:2},414:{items:2},768:{items:4},1024:{items:4},1280:{items:4}}});
				</script>
			';        
		
		};
	}
?>
<section class="person_2_1_0">
    <div class="container">
        <div class="person_2_1_0__title">
            <h2><?php echo' '.$field['person_title'].''?></h2>
        </div>
        <div class="person_2_1_0__line"></div>
        <div class="owl-carousel owl-theme">
            <?php
				  $rows = $field["person_info"];
				  foreach($rows as $row):
					echo'
						<a href="'.$row['p_link'].'" class="person_2_1_0__item">
							<div class="person_2_1_0__pic">
								<img src="'.$row['p_img'].'" alt="'.$row['p_name'].'">
							</div>
							<div class="person_2_1_0__name">'.$row['p_name'].'</div>
						</a>
					';
				endforeach;
			?>
        </div>
    </div>
</section>