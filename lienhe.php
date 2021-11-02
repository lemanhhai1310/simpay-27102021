<?php $data["title"] = "Liên hệ"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Liên hệ',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall lienhe__section">
    <div class="uk-container">
        <h1 class="uk-h1 profile__content__title">Liên hệ</h1>
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-32-m uk-grid-match" uk-grid>
            <div>
                <div class="uk-position-relative">
                    <div class="uk-cover-container">
                        <img src="images/MaskGroup-lienhe.png" alt="" uk-cover>
                        <canvas width="1232" height="908"></canvas>
                    </div>
                    <div class="lienhe__about">
                        <h3 class="uk-h3 lienhe__about__title">Về chúng tôi</h3>
                        <p class="lienhe__about__desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin id nisl turpis. Aliquam ultrices eu quam in imperdiet.</p>
                    </div>
                </div>
            </div>
            <div>

            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>