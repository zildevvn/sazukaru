<?php
get_header();
?>
<main id="primary" class="site-main">
    <section class="sazukaru-section category-section ">
        <div class="container">
            <?php
            $category = get_queried_object();
            if ($category instanceof WP_Term) {
                sazukaru_get_posts_by_category($category->slug, -1);
            }
            ?>
        </div>
    </section>
    <?php get_template_part('template-parts/shared/contact-section'); ?>
</main>
<?php get_footer(); ?>