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

                <!-- Post Main -->
               <?php get_template_part('Module/Category/cate_3_2_0/cate_3_2_0'); ?>
               <?php get_template_part('Module/Category/pagination_1_0_0/pagination_1_0_0'); ?>
                
            </div>
            <div class="col-lg-3">
            <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>