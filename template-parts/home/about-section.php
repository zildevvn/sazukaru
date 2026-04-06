<section class="sazukaru-section about-section">
    <div class="container">
        <div class="about-section-content d-flex align-items-center flex-wrap flex-lg-nowrap">
            <div class="about-section-content__left">
                <div class="about-section-content__heading d-flex align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/icon-ab-home.png" alt="icon-ab-home" />
                    <div class="wrap-title">
                        <h2> ABOUT US</h2>
                        <p>私たちについて</p>
                    </div>
                </div>

                <p>
                    テキストテキストテキストテキストテキストテストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
                </p>

                <?php $link = home_url('/about/') ?>

                <?php sazukaru_button('詳細はこちら', $link, '_self', ''); ?>
            </div>
            <div class="about-section-content__image">
                <img class="d-none d-md-block" src="<?= get_template_directory_uri(); ?>/assets/images/image-about.png"
                    alt="image for about section" />

                <img class="d-md-none" src="<?= get_template_directory_uri(); ?>/assets/images/image-about-mb.png"
                    alt="image for about section mobile" />
            </div>
        </div>
    </div>
</section>