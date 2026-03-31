<?php
/**
 * The template for displaying single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package     sazukaru
 */

get_header();
?>
<div class="single-post-page">
    <main id="primary" class="site-main">
        <?php
        while (have_posts()):
            the_post();
            get_template_part('template-parts/content-post');
            get_template_part('template-parts/shared/contact-section');
        endwhile;
        ?>
    </main>
</div>
<?php
get_footer();