<style>
	.sapo_1_0_0 {
		background: #e6eef1;
		padding: 10px 20px;
		margin: 0 0 20px;
		line-height: 30px;
		font-size: 16px;
		text-align: justify
	}

	@media (max-width: 414px) {
		.sapo_1_0_0 {
			font-size: 14px
		}
	}

	/*# sourceMappingURL=../maps/sapo.css.map */
</style>

<?php
	$sapo = '';
	
	if(is_single()):
		$sapo = get_the_excerpt();
	endif;

	if($sapo):
		echo '
			<div class="sapo_1_0_0">'.$sapo.'</div>
		';
	else:
		$sapo = get_field('sapo',$post->ID);
		if($sapo != ''):
			echo '
				<div class="sapo_1_0_0">'.$sapo.'</div>
			';
		else:
			echo '';
		endif;
	endif;
?>

	
