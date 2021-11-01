<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>SimPay - <?= /** @var TYPE_NAME  */
        (isset($data['title'])) ? $data['title'] : ''; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/css/uikit.min.css" />
    <link rel="stylesheet" href="style.css?v=<?php echo(time()) ?>">
    <!--JS-->
    <script src="https://cdn.jsdelivr.net/npm/@shinsenter/defer.js/dist/defer_plus.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- UIkit JS -->
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/uikit@3.7.6/dist/js/uikit-icons.min.js"></script>
    <script src="assets/placeholderTypewriter.js"></script>

    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <script src="https://unpkg.com/tippy.js@6"></script>

    <script src="js/app.js"></script>
</head>
<body class="">
<?php
$isLogin = rand(false,false);
$isNotify = rand(false,true);
$isCart = rand(false,true);
$isWishList = rand(false,true);
?>
<?php require "template-parts/commons/facebook_chat.php"; ?>
<?php if (!isset($isAccount)): ?>
<div id="offcanvas-fillter" class="boloc__offcanvas" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <?php require "template-parts/layouts/boloc.php"; ?>
    </div>
</div>
<?php endif; ?>
<!--app-->
<div id="app" class="uk-height-viewport uk-offcanvas-content uk-overflow-hidden uk-position-relative">

    <?php if (!isset($isAccount)): ?>
    <!--header-->
    <div class="header">
        <!--header__top-->
        <div class="header__top uk-visible@m">
            <div class="uk-container">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <!--uk-navbar-right-->
                    <div class="uk-navbar-right">
                        <div class="uk-navbar-item">
                            <div class="header__top__txt">Chăm sóc khách hàng: <span>1900 4750</span></div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="header__top__txt">Hỗ trợ đại lý: <span>0988 855 155</span></div>
                        </div>
                        <div class="uk-navbar-item">
                            <div class="header__top__txt">Tuyển dụng: <span>0979 537 195</span></div>
                        </div>
                    </div>
                    <!--/uk-navbar-right-->
                </nav>
            </div>
        </div>
        <!--/header__top-->

        <!--header__bottom-->
        <div class="header__bottom" uk-sticky>
            <div class="uk-container uk-padding-remove">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <!--uk-navbar-left-->
                    <div class="uk-navbar-left">
                        <a href="." class="uk-navbar-item uk-logo"><img src="images/logo1.png" alt=""></a>
                    </div>
                    <!--/uk-navbar-left-->

                    <!--uk-navbar-right-->
                    <div class="uk-navbar-right">
                        <ul class="uk-navbar-nav uk-visible@m">
                            <li>
                                <a href="#">Sản phẩm</a>
                                <div class="uk-navbar-dropdown">
                                    <ul class="uk-nav uk-navbar-dropdown-nav">
                                        <li class="uk-active"><a href="#">SIM COOL</a></li>
                                        <li><a href="#">SIM BIZ</a></li>
                                        <li><a href="#">SIM SANG</a></li>
                                        <li><a href="#">SIM MAY</a></li>
                                        <li><a href="#">SIM PAL</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="#">Tìm Sim*</a></li>
                            <li><a href="#">Gói cước</a></li>
                            <li><a href="#">Thanh toán</a></li>
                            <li><a href="lienhe.php">Liên hệ</a></li>
                        </ul>
                        <div class="uk-navbar-item header__bottom__divider uk-visible@m">
                            <div class="uk-flex-middle uk-child-width-auto uk-grid-10" uk-grid>
                                <div>
                                    <a class="uk-navbar-toggle header__bottom__search" href="#">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9056 16.3199C13.551 17.3729 11.8487 18 10 18C5.58172 18 2 14.4183 2 10C2 5.58172 5.58172 2 10 2C14.4183 2 18 5.58172 18 10C18 11.8487 17.3729 13.551 16.3199 14.9056L21.7071 20.2929C22.0976 20.6834 22.0976 21.3166 21.7071 21.7071C21.3166 22.0976 20.6834 22.0976 20.2929 21.7071L14.9056 16.3199ZM16 10C16 13.3137 13.3137 16 10 16C6.68629 16 4 13.3137 4 10C4 6.68629 6.68629 4 10 4C13.3137 4 16 6.68629 16 10Z" fill="#777E91"/>
                                        </svg>
                                    </a>
                                </div>
                                <?php if ($isLogin): ?>
                                <div>
                                    <div class="uk-inline">
                                        <div class="header__bottom__bell <?= ($isNotify)?'notify':'' ?>" data-count="1"></div>
                                        <?php if ($isNotify): ?>
                                            <div class="" uk-dropdown="mode: click">
                                                <ul class="header__listNotify uk-list uk-margin-remove">
                                                    <li class="header__listNotify__li">
                                                        <a href="" class="uk-link-toggle header__listNotify__link">
                                                            <div class="uk-grid-16 uk-flex-middle" uk-grid>
                                                                <div class="uk-width-auto">
                                                                    <div class="header__listNotify__coverImg uk-cover-container uk-border-circle">
                                                                        <canvas width="40" height="40"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <div class="header__listNotify__txt">Top 100 Sim số cực hiếm, hãy nhanh tay sở hữu</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                    <li class="header__listNotify__li">
                                                        <a href="" class="uk-link-toggle header__listNotify__link">
                                                            <div class="uk-grid-16 uk-flex-middle" uk-grid>
                                                                <div class="uk-width-auto">
                                                                    <div class="header__listNotify__coverImg uk-cover-container uk-border-circle">
                                                                        <canvas width="40" height="40"></canvas>
                                                                    </div>
                                                                </div>
                                                                <div class="uk-width-expand">
                                                                    <div class="header__listNotify__txt">Bạn vừa nhận được <span>voucher ưu đãi</span> từ SIMPAY</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="uk-navbar-item uk-visible@m">
                            <div class="uk-flex-middle uk-child-width-auto uk-grid-small uk-grid-24-m" uk-grid>
                                <?php if ($isLogin): ?>
                                <div>
                                    <div class="uk-flex-middle uk-child-width-auto uk-grid-10" uk-grid>
                                        <div>
                                            <div class="header__user__txt">Xin chào, <span>Hai</span></div>
                                        </div>
                                        <div>
                                            <div class="uk-inline">
                                                <div class="uk-cover-container uk-border-circle header__bottom__profile">
                                                    <img src="images/lemanhhai_anhthe.jpg" alt="" uk-cover>
                                                    <canvas width="40" height="40"></canvas>
                                                </div>
                                                <div class="" uk-dropdown="mode: hover">
                                                    <ul class="uk-nav uk-nav-default">
                                                        <li class="acc"><a href="profile.php">Tài khoản của tôi</a></li>
                                                        <li class="history"><a href="lichsugiaodich.php">Lịch sử giao dịch</a></li>
                                                        <li class="logout"><a href="login.php">Thoát tài khoản</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--wishlist-->
                                <div>
                                    <a href="" class="header__bottom__wishList__icon <?= ($isWishList)?'uk-active':'' ?>"></a>
                                </div>
                                <!--/wishlist-->
                                <?php else: ?>
                                <div>
                                    <a href="#modal-login" uk-toggle class="uk-button uk-button-secondary header__bottom__btn header__bottom__btn--login">Đăng nhập</a>
                                    <a href="#modal-register" uk-toggle class="uk-button uk-button-default header__bottom__btn header__bottom__btn--register">Đăng ký</a>
                                </div>
                                <?php endif; ?>
                                <div>
                                    <div class="uk-inline">
                                        <a href="cart.php" class="header__bottom__cart" <?= ($isCart)? 'data-count=2':'' ?> ></a>
                                        <div class="" uk-dropdown="mode: hover">
                                            <h5 class="uk-h5">Giỏ hàng của tôi (<?= ($isCart)?'2':'0' ?>)</h5>
                                            <?php if ($isCart): ?>

                                            <?php else: ?>
                                                <div class="header__bottom__cart__txtEmpty">Opps, chưa có gì trong giỏ</div>
                                            <?php endif; ?>
                                            <div class="uk-text-center">
                                                <a href="" class="uk-button uk-button-secondary header__bottom__btn header__bottom__btn--login">Vào giỏ hàng</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-navbar-item uk-hidden@m">

                        </div>
                    </div>
                    <!--/uk-navbar-right-->
                </nav>
            </div>
        </div>
        <!--/header__bottom-->
    </div>
    <!--/header-->
    <?php else: ?>

    <?php endif; ?>