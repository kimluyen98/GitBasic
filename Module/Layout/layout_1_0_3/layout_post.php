<style>
    .layout_1_0_3 {
        margin-top: 100px
    }
</style>

<div class="layout_1_0_3">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <!-- Breadcrumb -->
                <?php get_template_part('Module/Post/breadcrumb_1_0_0/breadcrumb_1_0_0'); ?>
                <!-- Breadcrumb -->

                <?php get_template_part('Module/Post/post_1_0_0/post_1_0_0'); ?>


                <?php get_template_part('Module/Post/post_new_other_1_0_1/post_new_other_1_0_1'); ?>
                <?php get_template_part('Module/Post/post_new_other_2_0_0/post_new_other_2_0_0'); ?>
            </div>
            <div class="col-md-3">
                <?php get_sidebar() ?>
            </div>
        </div>
    </div>

</div>