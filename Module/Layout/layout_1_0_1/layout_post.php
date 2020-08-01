<style>
    .layout_1_0_1 {
        margin-top: 120px;
    }

    @media (max-width: 1024px) {
        .layout_1_0_1 {
            margin-top: 90px
        }
    }

    @media (max-width: 414px) {
        .layout_1_0_1 {
            margin-top: 122px
        }
    }

    @media (max-width: 375px) {
        .layout_1_0_1 {
            margin-top: 116px
        }
    }

    @media (max-width: 320px) {
        .layout_1_0_1 {
            margin-top: 115px
        }
    }
</style>
<div class="layout_1_0_1">

    <!-- Breadcrumb -->
    <?php get_template_part('Module/Post/breadcrumb_1_0_3/breadcrumb_1_0_3'); ?>
     <!-- Breadcrumb -->

    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                
                <!-- Post Main -->
                <?php get_template_part('Module/Post/post_1_1_0/post_1_1_0'); ?>
                

            </div>
            <div class="col-lg-3">
                <!-- Sidebar -->
                <?php get_sidebar(); ?>
                <!-- Sidebar -->
            </div>
        </div>
    </div>

    <?php get_template_part('Module/Post/post_regist_3_0_0/post_regist_3_0_0'); ?>
    <?php get_template_part('Module/Post/post_new_other_3_0_0/post_new_other_3_0_0'); ?>
    <?php get_template_part('Module/Post/post_new_other_2_0_1/post_new_other_2_0_1'); ?>

</div>