<?php $data["title"] = "Trang chủ"; ?>
<?php
$isLogin = rand(true,true);
$isNotify = rand(false,true);
$isCart = rand(false,true);
?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1440:423; min-height: 240; animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/banner1.png" alt="" uk-cover>
        </li>
        <li>
            <img src="images/photo.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/dark.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="images/light.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--/Slider-->

<?php require "template-parts/layouts/footer.php"; ?>