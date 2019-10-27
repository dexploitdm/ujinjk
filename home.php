<?php
/*
Template Name: Макет Главной
Template Post Type: page
*/
get_header(); ?>
    <main>
        <?php get_template_part( 'components/banboxes/ban-home'); ?>
        <div class="content-page">
            <?php get_template_part( 'components/product'); ?>
            <?php get_template_part( 'components/bannerPage'); ?>
            <?php get_template_part( 'components/projects'); ?>
            <?php get_template_part( 'components/about'); ?>
        </div>


    </main>
<?php get_footer(); ?>