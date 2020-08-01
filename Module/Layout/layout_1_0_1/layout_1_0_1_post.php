<?php 
    get_template_part('Module/Layout/layout_1_0_1/layout_1_0_1_style'); 
?>

<div class="layout_1_0_1">

    <div class="container">
        <div class="row">
            <div class="col-lg-9">    
                <!-- Breadcrumb -->
                <?php get_template_part('Module/Post/breadcrumb_1_0_1/breadcrumb_1_0_1'); ?>
                <!-- Breadcrumb -->           
                <?php include(locate_template('Module/Post/post_1_1_0/post_1_1_0.php')); ?>
               
            </div>
            <div class="col-lg-3">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
