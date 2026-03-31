<?php
/**
 * Template Name: Homepage
 * Front Page Template
 */

get_header();
?>
    <main id="primary" class="site-main template-home">
        <?php get_template_part('template-parts/front-page/hero-section'); ?>
        <?php get_template_part('template-parts/front-page/logos-section'); ?>
        <?php get_template_part('template-parts/front-page/vertex-section'); ?>
        <?php get_template_part('template-parts/front-page/about-section'); ?>
        <?php get_template_part('template-parts/front-page/rinen-section'); ?>
        <?php get_template_part('template-parts/front-page/record-section'); ?>
        <?php get_template_part('template-parts/front-page/partners-section'); ?>
        <?php get_template_part('template-parts/front-page/news-section'); ?>
        <?php get_template_part('template-parts/shared/voice-section'); ?>
        <?php get_template_part('template-parts/shared/contact-section'); ?>
    </main>
<?php
get_footer();