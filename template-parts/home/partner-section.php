<?php
$partners = [
    [
        'link' => 'https://www.zhordaniaclinic.ge/',
        'image' => 'image-partner-001.png',
        'heading' => 'JORDANIA CLINIC',
    ],
    [
        'link' => 'http://innovamedical.ge/',
        'image' => 'image-partner-002.png',
        'heading' => 'INOVA CLINIC',
    ],
    [
        'link' => 'http://www.invitro.ge/',
        'image' => 'image-partner-003.png',
        'heading' => 'IN-VITRO CLINIC',
    ],
    [
        'link' => 'http://www.chachava.ge/',
        'image' => 'image-partner-004.png',
        'heading' => 'CHACHAVA CLINIC',
    ],
    [
        'link' => 'http://mmc.ge/',
        'image' => 'image-partner-005.png',
        'heading' => 'K.MARDALEISHVILI CLINIC',
    ],
    [
        'link' => 'http://carapsmedline.ge/ka/',
        'image' => 'image-partner-006.png',
        'heading' => 'KARAPS MEDLINE CLINIC',
    ],
    [
        'link' => 'http://www.sabakhtarashviliclinic.ge/',
        'image' => 'image-partner-007.png',
        'heading' => 'Z. SABAKHTARASHVILI CLINIC',
    ],
    [
        'link' => 'https://www.smartultrasound.ge/index.php?page=1&lang=geo',
        'image' => 'image-partner-008.png',
        'heading' => 'SMART ULTRASOUND',
    ],
    [
        'link' => 'http://gaguaclinic.ge/ka',
        'image' => 'image-partner-009.png',
        'heading' => 'GAGUA CLINIC',
    ],
    [
        'link' => 'http://hera2011.ge/',
        'image' => 'image-partner-010.png',
        'heading' => 'HERA 2011',
    ],
    [
        'link' => '',
        'image' => '',
        'heading' => 'UNIVERSY CLINIC',
    ],
    [
        'link' => '',
        'image' => '',
        'heading' => 'FERTIMEDI CLINIC',
    ],
    [
        'link' => '',
        'image' => '',
        'heading' => 'REPRO ART CLINIC',
    ],
]
    ?>
<section class="sazukaru-section partner-section">
    <div class="container">
        <div class="partner-section__content">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/icon-partner.png" alt="icon for partner" />
            <h2>PARTNER</h2>
            <p class="mb-0">連携クリニック</p>
        </div>

        <?php if (!empty($partners)): ?>
            <div class="partner-section__list">
                <?php foreach ($partners as $partner): ?>
                    <div class="partner-item">
                        <h3>
                            <?= $partner['heading']; ?>
                        </h3>

                        <?php if ($partner['image']): ?>
                            <a href="<?= $partner['link']; ?>">
                            <img src="<?= get_template_directory_uri(); ?>/assets/images/<?= $partner['image']; ?>"
                                alt="<?= $partner['heading']; ?>" /></a>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</section>