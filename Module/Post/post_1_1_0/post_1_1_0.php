<style>
        .post_1_1_0__main {
            padding: 5px 8px
        }
        
        .post_1_1_0__title {
            margin: 20px 0 10px;
            font-size: 18px;
            font-weight: 700;
            color: #f26649;
            text-transform: uppercase
        }
        
        .post_1_1_0__detail .aligncenter {
            text-align: center;
            margin: 0 auto !important;
            display: block;
        }
        
        .post_1_1_0 h2 {
            font-size: 18px;
            color: #1C8569;
            font-weight: 700;
            font-family: arial
        }
        
        .post_1_1_0 h3 {
            font-size: 16px;
            color: #000;
            font-weight: 700;
            font-family: arial
        }
        
        @media (max-width: 414px) {
            .post_1_1_0__detail .aligncenter {
                width: 100% !important;
            }
            .post_1_1_0__detail .aligncenter img {
                width: 100%;
            }
        }
        @media (max-width: 375px) {
            .post_1_0_0__title {
                font-size: 16px
            }
        }
    </style>

	<div class="post_1_1_0">		

		<div class="post_1_1_0__content">
			
			<h1 class="post_1_1_0__title"><?php the_title(); ?></h1>
			<div class="post_1_1_0__detail">
				<?php get_template_part('Module/Post/sapo_1_0_0/sapo_1_0_0'); ?>
				<?php while ( have_posts() ) : the_post(); ?>
				<?php the_content(); ?>
				<?php endwhile; ?>
			</div>
			
		</div>
	</div>
