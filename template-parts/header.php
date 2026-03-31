<?php 
    $custom_logo_id  = get_theme_mod('custom_logo');
    $logo_url        = wp_get_attachment_url($custom_logo_id);
    $cta             = get_field('cta_header', 'option');
    $company_name    = get_field('company_name', 'option');
    $main_office     = get_field('main_office', 'option');
    $branch_office   = get_field('branch_office', 'option');
    $email           = get_field('email', 'option');
    $socials         = get_field('socials', 'option');
    $copyright       = get_field('copyright', 'option');
    $rights_reserved = get_field('rights_reserved', 'option');
?>

<header id="site-header" class="header-main">
    <div class="container"> 
        <div class="header-inner d-flex justify-content-between align-items-center"> 
            <div class="header-logo">
                <a href="<?php echo home_url(); ?>" aria-label="<?php echo get_bloginfo('name'); ?>">
                    <img src="<?php echo $logo_url; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                </a>
            </div>

            <div class="header-right d-none d-lg-flex align-items-center"> 
                <?php  if (has_nav_menu('primary-menu')): ?>
                    <div class="header-menu">
                        <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'primary-menu')) ?>
                    </div>
                <?php endif; ?>

                <?php if ($cta): ?>
                    <div class="header-cta">
                        <?php nmc_get_button($cta['title'], $cta['url'], $cta['target']); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="header-humberger d-block d-lg-none"> 
                <button class="humberger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay d-block d-lg-none">
        <div class="mobile-menu-overlay-inner">
            <div class="mobile-menu-overlay-header d-flex justify-content-between align-items-center">
                <div class="mobile-menu-overlay-logo">
                    <a href="<?php echo home_url(); ?>" aria-label="<?php echo get_bloginfo('name'); ?>">
                        <img src="<?php echo $logo_url; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                    </a>
                </div>
                <button class="menu-close-btn" aria-label="<?php esc_attr_e('Close menu', 'nmc'); ?>">
                    <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M6.758 17.243L12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243" stroke="#000000" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                </button>
            </div>
            
            <div class="mobile-menu-overlay-body">
                <?php  if (has_nav_menu('footer-menu')): ?>
                    <?php wp_nav_menu(array('theme_location' => 'footer-menu', 'menu_class' => 'footer-menu')) ?>
                <?php endif; ?> 
                
                <?php if ($cta): ?>
                    <div class="mobile-menu-overlay-cta">
                        <?php nmc_get_button($cta['title'], $cta['url'], $cta['target']); ?>
                    </div>
                <?php endif; ?>

                <?php if($company_name ): ?>
                    <p class="mobile-menu__company"> <?= $company_name ?> </p>
                <?php endif; ?>   

                <?php if($main_office): ?>
                    <div class="mobile-menu-office main">
                        <p>本社</p> 
                        <p><?php echo $main_office['address']; ?> </p>
                        <a href="tel:<?= $main_office['phone'] ?>"><?= $main_office['phone'] ?></a>
                    </div>
                <?php endif; ?>

                <?php if($branch_office): ?>
                    <div class="mobile-menu-office branch">
                        <p>支社</p> 
                        <p><?php echo $branch_office['address']; ?> </p>
                        <p>電話番号: <a href="tel:<?= $branch_office['phone'] ?>"><?= $branch_office['phone'] ?></a></p>
                    </div>
                <?php endif; ?>

                <?php if($email): ?>
                    <a href="mailto:<?= $email ?>" class="mobile-menu-email"><?= $email ?> </a>
                <?php endif; ?>

                <?php if($socials): ?>
                    <ul class="mobile-menu-socials d-flex align-items-center justify-content-center justify-content-md-start">
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
                    <p class="mobile-menu-copyright"> 
                       <span> <?php echo $copyright; ?> </span>
                       <span> <?php echo $rights_reserved; ?> </span>
                    </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>

<div id="header-scroll" class="header-main">
    <div class="container"> 
        <div class="header-inner d-flex justify-content-between align-items-center"> 
            <div class="header-logo">
                <a href="<?php echo home_url(); ?>" aria-label="<?php echo get_bloginfo('name'); ?>">
                    <img src="<?php echo $logo_url; ?>" alt="<?php echo get_bloginfo('name'); ?>">
                </a>
            </div>

            <div class="header-right d-none d-lg-flex align-items-center"> 
                <?php  if (has_nav_menu('primary-menu')): ?>
                    <div class="header-menu">
                        <?php wp_nav_menu(array('theme_location' => 'primary-menu', 'menu_class' => 'primary-menu')) ?>
                    </div>
                <?php endif; ?>

                <?php if ($cta): ?>
                    <div class="header-cta">
                        <?php nmc_get_button($cta['title'], $cta['url'], $cta['target']); ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="header-humberger d-block d-lg-none"> 
                <button class="humberger-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </div>
</div>