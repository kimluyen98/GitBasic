<style>
    .layout_1_0_0 {
        margin-top: 160px
    }

    @media (max-width: 1024px) {
        .layout_1_0_0 {
            margin-top: 110px
        }
    }

    @media (max-width: 414px) {
        .layout_1_0_0 {
            margin-top: 130px
        }
    }
</style>
<div class="layout_1_0_0">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php get_template_part('Module/Post/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>

                <?php get_template_part('Module/Category/search_1_0_0/search_1_0_0'); ?>
                <?php get_template_part('Module/Category/cate_1_0_0/cate_1_0_0'); ?>
                
            </div>
            <div class="col-lg-3">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>