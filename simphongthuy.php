<?php $data["title"] = "Sim phong thuỷ"; ?>
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
        'txt' => 'Tìm sim',
        'link' => 'timsim.php',
    ),
    array(
        'txt' => 'Giỏ hàng',
        'link' => 'cart.php',
    ),
    array(
        'txt' => 'Sim phong thuỷ',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-small">
    <div class="uk-container">

    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>