<?php 
    $copyright       = get_field('copyright', 'option');
    $rights_reserved = get_field('rights_reserved', 'option');
    $custom_logo_id  = get_theme_mod('custom_logo');
    $logo_url        = wp_get_attachment_url($custom_logo_id);
    $socials         = get_field('socials', 'option');
    $company_name    = get_field('company_name', 'option');
    $main_office     = get_field('main_office', 'option');
    $branch_office   = get_field('branch_office', 'option');
    $email           = get_field('email', 'option');
?>

<footer class="main-footer">
    <div class="container"> 
        <button class="btn-top d-none d-md-flex align-items-center justify-content-center" type="button" aria-label="<?php echo __('Back to top', 'nmc'); ?>">
            <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6 15L12 9L18 15" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
        </button>

        <div class="main-footer-inner d-flex justify-content-between flex-wrap flex-lg-nowrap"> 
            <div class="main-footer-left order-2"> 
                <div class="main-footer-logo"> 
                    <a href="<?php echo home_url(); ?>" aria-label="<?php echo get_bloginfo('name'); ?>">
                        <img src="<?php echo $logo_url; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </a>
                </div>

                <?php if($company_name): ?>
                    <h2 class="main-footer-company"> 
                        <?php echo $company_name; ?> 
                    </h2>
                <?php endif; ?>

                <?php if($main_office): ?>
                    <div class="main-footer-office main">
                        <p>本社</p> 
                        <p><?php echo $main_office['address']; ?> </p>
                        <a href="tel:<?= $main_office['phone'] ?>"><?= $main_office['phone'] ?></a>
                    </div>
                <?php endif; ?>

                <?php if($branch_office): ?>
                    <div class="main-footer-office branch">
                        <p>支社</p> 
                        <p><?php echo $branch_office['address']; ?> </p>
                        <p>電話番号: <a href="tel:<?= $branch_office['phone'] ?>"><?= $branch_office['phone'] ?></a></p>
                    </div>
                <?php endif; ?>

                <?php if($email): ?>
                    <a href="mailto:<?= $email ?>" class="main-footer-email"><?= $email ?> </a>
                <?php endif; ?>

                <?php if($socials): ?>
                    <ul class="main-footer-socials d-flex align-items-center justify-content-center justify-content-md-start">
                        <?php foreach($socials as $social): ?>
                            <li>
                                <a href="<?= $social['link'] ?>" target="_blank"> 
                                    <?php 
                                        $icon_url = $social['icon'];
                                        $icon_ext = pathinfo(parse_url($icon_url, PHP_URL_PATH), PATHINFO_EXTENSION);
                                        if (strtolower($icon_ext) === 'svg') {
                                            $icon_path = str_replace(site_url('/'), ABSPATH, $icon_url);
                                            if (file_exists($icon_path)) {
                                                echo file_get_contents($icon_path);
                                            } else {
                                                echo file_get_contents($icon_url);
                                            }
                                        } else {
                                    ?>
                                        <img src="<?= $icon_url ?>" alt="<?= $social['title'] ?>">
                                    <?php } ?>
                                </a>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>

                <?php if($copyright || $rights_reserved): ?>
                    <p class="main-footer-copyright"> 
                       <span> <?php echo $copyright; ?> </span>
                       <span> <?php echo $rights_reserved; ?> </span>
                    </p>
                <?php endif; ?>
            </div>

            <?php if (has_nav_menu('footer-menu')): ?>
                <div class="main-footer-right order-1 order-lg-2"> 
                    <div class="main-footer-menu">
                        <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footer-menu')) ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</footer>