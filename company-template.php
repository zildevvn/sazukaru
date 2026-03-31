<?php
/**
 * Template Name: Company
 */
get_header();
?>

    <main id="primary" class="site-main">
        <?php get_template_part('template-parts/company/hero-section'); ?>
        <?php get_template_part('template-parts/company/access-section'); ?>
        <?php get_template_part('template-parts/company/rinen-section'); ?>
        <?php get_template_part('template-parts/company/message-section'); ?>
    </main>
<?php get_footer(); ?>