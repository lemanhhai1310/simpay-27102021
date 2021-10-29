<?php $data["title"] = "Login"; ?>
<?php $isAccount=true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<div class="uk-flex" uk-height-viewport uk-toggle="cls: uk-flex-middle; mode: media; media: @m">
    <div class="uk-width-1-1" uk-toggle="cls: uk-section-small; mode: media; media: @m">
        <div class="uk-container" uk-toggle="cls: uk-padding-remove; mode: media; media: (max-width: 959px)">
            <div class="uk-grid-match uk-grid-0 uk-grid-40-m uk-grid-108-l" uk-grid>
                <div class="uk-width-3-5@m">
                    <div class="uk-cover-container login__box__coverImg">
                        <img src="images/banner_login.png" alt="" uk-cover>
                        <canvas width="1448" height="1180"></canvas>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-grid-match uk-flex-center" uk-grid>
                        <div class="uk-width-3-5@s uk-width-1-1@m">
                            <div class="uk-flex uk-flex-column login__box">
                                <div class="uk-flex-auto">
                                    <form>
                                        <fieldset class="uk-fieldset">

                                            <legend class="uk-legend login__box__form__title">Đăng nhập</legend>

                                            <div class="uk-margin">
                                                <div class="uk-inline uk-width-1-1">
                                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--phone" uk-icon="icon: user"></span>
                                                    <input class="uk-input login__box__form__input" type="tel" placeholder="Số điện thoại">
                                                </div>
                                            </div>
                                            <div class="uk-margin">
                                                <div class="uk-inline uk-width-1-1">
                                                    <span class="uk-form-icon login__box__form__icon login__box__form__icon--pass" uk-icon="icon: user"></span>
                                                    <input id="ipnPassword" class="uk-input login__box__form__input" type="password" placeholder="Mật khẩu">
                                                    <span id="btnPassword" class="login__box__form__showPass"></span>
                                                </div>
                                            </div>

                                            <div class="uk-margin login__box__form__box">
                                                <div class="uk-child-width-auto uk-flex-middle uk-flex-between" uk-grid>
                                                    <div>
                                                        <label><input class="uk-checkbox login__box__form__box__check" type="checkbox" checked> <span class="login__box__form__box__txt">Remember</span></label>
                                                    </div>
                                                    <div>
                                                        <a href="#modal-forgotPass" uk-toggle class="login__box__form__box__forGotpass">Quên mật khẩu?</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Đăng nhập</span></button>

                                        </fieldset>
                                    </form>
                                </div>
                                <div>
                                    <div class="uk-text-center login__box__txt1">Bạn chưa có tài khoản SIMPAY? <a href="">Đăng ký ngay</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Quên mật khẩu?-->
<div id="modal-forgotPass" class="uk-flex-top" uk-modal>
    <div class="uk-modal-dialog login__modal__dialog uk-modal-body uk-margin-auto-vertical">

        <button class="uk-modal-close-default login__modal__close" type="button" uk-close></button>
        <h2 class="uk-modal-title login__modal__title">Quên mật khẩu</h2>
        <p class="login__modal__desc">Chúng tôi sẽ gửi link khôi phục tài khoản vào mail của bạn. Hãy kiểm tra mail của bạn nhé!</p>

        <div class="uk-margin uk-form-stacked">
            <label class="uk-form-label login__modal__label" for="form-stacked-text">Email</label>
            <div class="uk-form-controls">
                <input class="uk-input login__modal__input" id="form-stacked-text" type="email" placeholder="Ví dụ: Infor@gmail.com">
            </div>
        </div>
        <div class="uk-grid-8" uk-grid>
            <div class="uk-width-1-1">
                <button type="submit" class="login__box__form__btnSubmit uk-button uk-button-secondary uk-width-1-1"><span>Gửi</span></button>
            </div>
            <div class="uk-width-1-1">
                <button type="submit" class="login__box__form__btnSubmit uk-button uk-button-default uk-width-1-1"><span>Quay lại</span></button>
            </div>
        </div>
    </div>
</div>
<!--/Quên mật khẩu?-->
<?php require "template-parts/layouts/footer.php"; ?>