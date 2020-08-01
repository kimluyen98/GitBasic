<style>
    .layout_1_0_1 {
        margin-top: 160px
    }

    @media (max-width: 1024px) {
        .layout_1_0_1 {
            margin-top: 110px
        }
    }

    @media (max-width: 414px) {
        .layout_1_0_1 {
            margin-top: 130px
        }
    }
</style>
<div class="layout_1_0_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <!-- Breadcrumb -->
                <?php get_template_part('Module/Post/breadcrumb_1_0_1/breadcrumb_1_0_1'); ?>
                <!-- Breadcrumb -->
        
                <!-- Post Main -->
                <?php get_template_part('Module/Post/post_1_0_1/post_1_0_1'); ?>

            </div>
            <div class="col-lg-3">
                <!-- Sidebar -->
                <?php get_template_part('Module/module_sidebar'); ?>
                
                <!-- Sidebar -->
            </div>
        </div>
    </div>
</div>
<?php get_template_part('Module/module_post'); ?>