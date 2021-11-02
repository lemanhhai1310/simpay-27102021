<?php $data["title"] = "Thanh toán"; ?>
<?php require "template-parts/layouts/header.php"; ?>
<?php
$databreadcrumb = array(
    array(
        'txt' => 'Trang chủ',
        'link' => '.',
    ),
    array(
        'txt' => 'Tìm sim',
        'link' => '',
    ),
    array(
        'txt' => 'Chọn gói sim',
        'link' => '',
    ),
    array(
        'txt' => 'Thanh toán',
        'link' => '',
    ),
);
require "template-parts/layouts/breadcrumb.php"; ?>
<div class="uk-section-xsmall thanhtoan__section">
    <div class="uk-container">
        <div class="uk-margin">
            <a href="" class="uk-button uk-button-default uk-border-pill thanhtoan__btnBack"><span>Quay về chọn gói cước</span></a>
        </div>
        <div class="uk-grid-30 uk-grid-136-m" uk-grid>
            <div class="uk-width-1-2@m uk-flex-last@m">
                <div class="thanhtoan__card uk-card uk-card-default uk-card-body uk-visible@m">
                    <div class="thanhtoan__card__item">
                        <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h5 class="uk-h5 thanhtoan__card__title">Tổng quan</h5>
                            </div>
                            <div>
                                <a href="" class="thanhtoan__card__link1">Đổi SIM</a>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="uk-cover-container thanhtoan__card__cover">
                            <img src="images/mobile1/sean-sinclair-FQ7cRFUU1y0-unsplash1.png" alt="" uk-cover>
                            <canvas width="984" height="550"></canvas>
                            <div class="uk-position-cover uk-padding-small thanhtoan__card__boxsim">
                                <div class="uk-width-1-1">
                                    <div class="thanhtoan__card__boxsim__txtsim">SIM COOL</div>
                                    <div class="thanhtoan__card__boxsim__txtso">0586 779 666</div>
                                    <div class="uk-flex-bottom" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="thanhtoan__card__boxsim__txtDate">Ngày kích hoạt</div>
                                            <div class="thanhtoan__card__boxsim__txtDate1">21.09.2021</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <img src="images/mobile1/Group3847.png" alt="">
                                        </div>
                                    </div>
                                    <div class="uk-flex-middle" uk-grid>
                                        <div class="uk-width-expand">
                                            <div class="thanhtoan__card__boxsim__txt1">Mạng di động số 1 Việt Nam</div>
                                        </div>
                                        <div class="uk-width-auto">
                                            <div class="thanhtoan__card__boxsim__txt2">SIMPAY</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thanhtoan__card uk-card uk-card-default uk-card-body">
                    <div class="thanhtoan__card__item">
                        <div class="uk-child-width-auto uk-flex-middle" uk-grid>
                            <div class="uk-width-expand">
                                <h5 class="uk-h5 thanhtoan__card__title">Thông tin đặt hàng</h5>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="thanhtoan__card__txt1">SIMCOOL</div>
                        <div class="home__content__sanpham__phoneNumber">056.780.<span>6666</span></div>
                    </div>
                    <div class="thanhtoan__card__item uk-visible@m">
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Thuê bao</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">Trả trước</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Ngày cập nhật</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">15:00 - 29/11/2021</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Đại lý bán</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">Nguyễn Văn A</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Gói cước</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">B100N <a href="">Xem chi tiết</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Phương thức thanh toán</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">Thanh toán tiền mặt</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Đơn giá</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">1.800.000đ</div>
                                </div>
                            </div>
                        </div>
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Phí vận chuyển</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt">50.000đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thanhtoan__card__item">
                        <div class="thanhtoan__card__item1">
                            <div class="uk-grid-5" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="thanhtoan__card__item1__txt">Tổng tiền</div>
                                </div>
                                <div class="uk-width-auto">
                                    <div class="thanhtoan__card__item1__txt thanhtoan__card__item1__txt--c1">1.850.000đ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-margin">
                        <button type="submit" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Đặt mua sim</span></button>
                        <div class="uk-text-center login__box__txt1">Với việc ấn vào nút “Đặt mua", Tôi đồng ý với <a href="">Điều khoản mua hàng</a> của SIMPAY</div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2@m">
                <div class="thanhtoan__left__item">
                    <h3 class="uk-h3 thanhtoan__left__title">Tải thông tin CMND*</h3>
                    <div class="uk-grid-16 uk-child-width-1-3@m uk-grid-match" uk-grid>
                        <div>
                            <div class="thanhtoan__left__file uk-cover-container" uk-form-custom>
                                <input type="file">
                                <div class="uk-position-cover uk-flex uk-flex-middle uk-flex-center">
                                    <div class="uk-text-center">
                                        <div class="thanhtoan__left__file__camera"></div>
                                        <div class="thanhtoan__left__file__txt">CMND mặt trước</div>
                                    </div>
                                </div>
                                <canvas width="180" height="150"></canvas>
                            </div>
                        </div>
                        <div>
                            <div class="uk-cover-container">
                                <div class="uk-position-cover">

                                </div>
                                <canvas width="180" height="150"></canvas>
                            </div>
                        </div>
                        <div>
                            <div class="uk-cover-container">
                                <div class="uk-position-cover">

                                </div>
                                <canvas width="180" height="150"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="thanhtoan__left__item">
                    <h3 class="uk-h3 thanhtoan__left__title">Thông tin đặt mua</h3>
                </div>
                <div class="thanhtoan__left__item">
                    <h3 class="uk-h3 thanhtoan__left__title">Hình thức thanh toán</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>