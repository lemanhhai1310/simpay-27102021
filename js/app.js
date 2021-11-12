console.log(
  "%c" + "W E L C O M E   T O   C V . C A T H T M L C S S . N E T",
  "font-family:Montserrat ; font-size:14px; background: #009999; border-radius: 2px; padding: 6px 12px; margin: 5px 10px 7px 0px; color: #ffffff;"
);

var placeholderText = [
    "Tìm số theo cú pháp *xxxx tên, phong thuỷ, số điện thoại,...",
    "Tìm số theo cú pháp *xxxx tên, phong thuỷ, số điện thoại,...",
    // "Tìm tên",
    // "Phong thuỷ",
    // "Số điện thoại,...",
];

window.addEventListener("load", ()=>{
    $('#search').placeholderTypewriter({text: placeholderText});

    const contentHtml = '<div class="uk-card uk-card-body uk-card-default home__tooltip__card">\n' +
        '                            <div class="uk-grid" uk-grid>\n' +
        '                                <div class="uk-width-expand">\n' +
        '                                    <div class="home__tooltip__box">\n' +
        '                                        <div class="home__tooltip__labelPrice home__tooltip__labelPrice--sosim">Số sim</div>\n' +
        '                                        <div class="home__content__sanpham__phoneNumber">056.780.<span>6666</span></div>\n' +
        '                                        <div class="home__tooltip__labelPrice">Tình trạng: <span>Còn hàng</span></div>\n' +
        '                                    </div>\n' +
        '                                </div>\n' +
        '                                <div class="uk-width-auto">\n' +
        '                                    <img src="images/_Thẻ/1600px-Viettel_logo_2021 1.png" alt="">\n' +
        '                                </div>\n' +
        '                            </div>\n' +
        '                            <ul class="uk-accordion" uk-accordion>\n' +
        '                                <li>\n' +
        '                                    <a class="uk-accordion-title" href="#">Phong thuỷ của sim</a>\n' +
        '                                    <div class="uk-accordion-content">\n' +
        '                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>\n' +
        '                                    </div>\n' +
        '                                </li>\n' +
        '                            </ul>\n' +
        '                            <div class="uk-grid uk-child-width-auto uk-flex-between uk-flex-middle" uk-grid>\n' +
        '                                <div>\n' +
        '                                    <div class="home__tooltip__labelPrice">Giá bán:</div>\n' +
        '                                </div>\n' +
        '                                <div>\n' +
        '                                    <div class="home__tooltip__txtPrice">5.000.000đ</div>\n' +
        '                                </div>\n' +
        '                            </div>\n' +
        '                        </div>';

    const content = '<div class="uk-card tooltip__card uk-card-body uk-card-default">\n' +
        '    <div class="tooltip__item">\n' +
        '        <div class="uk-grid-10 uk-child-width-1-1" uk-grid>\n' +
        '            <div>\n' +
        '                <div uk-grid>\n' +
        '                    <div class="uk-width-expand">\n' +
        '                        <div class="tooltip__txt1"><span>Sim số:</span> 0586.779.666</div>\n' +
        '                    </div>\n' +
        '                    <div class="uk-width-auto">\n' +
        '                        <div class="tooltip__txt2">SIM <span>COOL</span></div>\n' +
        '                    </div>\n' +
        '                </div>\n' +
        '            </div>\n' +
        '            <div>\n' +
        '                <div class="tooltip__txt1"><span>Loại sim:</span> Sim Tam hoa</div>\n' +
        '            </div>\n' +
        '            <div>\n' +
        '                <div class="tooltip__txt1"><span>Đại cát:</span> Thành tựu to lớn, tên tuổi lừng danh</div>\n' +
        '            </div>\n' +
        '        </div>\n' +
        '    </div>\n' +
        '</div>'

    tippy('.home__content__sanpham__info', {
        content: contentHtml,
        allowHTML: true,
        followCursor: true,
        placement: 'right-start',
    });

    tippy('.home__content__sanpham__link--info,.home__content__sanpham__phoneNumber', {
        content: content,
        allowHTML: true,
        followCursor: true,
        placement: 'right-start',
    });


    let showPassword = false
    let showPasswordConfirm = false
    const ipnElement = document.querySelector('#ipnPassword')
    const btnElement = document.querySelector('#btnPassword')
    const ipnElementConfirm = document.querySelector('#ipnPassword-confirm')
    const btnElementConfirm = document.querySelector('#btnPassword-confirm')

    if (btnElement){
        btnElement.addEventListener('click', togglePassword)
    }
    if (btnElementConfirm){
        btnElementConfirm.addEventListener('click', togglePasswordConfirm)
    }

    function togglePassword() {
        if (showPassword) {
            // Đang hiện password
            // Chuyển sang ẩn password
            ipnElement.setAttribute('type', 'password')
            showPassword = false
        } else {
            // Đang ẩn password
            // Chuyển sang hiện password
            ipnElement.setAttribute('type', 'text')
            showPassword = true
        }
    }
    function togglePasswordConfirm() {
        if (showPasswordConfirm) {
            // Đang hiện password
            // Chuyển sang ẩn password
            ipnElementConfirm.setAttribute('type', 'password')
            showPasswordConfirm = false
        } else {
            // Đang ẩn password
            // Chuyển sang hiện password
            ipnElementConfirm.setAttribute('type', 'text')
            showPasswordConfirm = true
        }
    }

    // UIkit.modal('#modal-package').show();
    // UIkit.modal('#modal-register').show();

    let btnMenu = document.querySelector("#btnMenu");
    let menumobile = document.querySelector(".menumobile");
    let body = document.querySelector("body");
    let html = document.querySelector("html");
    if(btnMenu){
        btnMenu.addEventListener("click", ()=>{
            btnMenu.classList.toggle("open");
            if(btnMenu.classList.contains("open")){
                menumobile.classList.add("animated");
                menumobile.classList.add("fadeInDown");
                body.classList.add("uk-overflow-hidden");
                html.classList.add("uk-overflow-hidden");
            }else {
                menumobile.classList.remove("animated");
                menumobile.classList.remove("fadeInDown");
                body.classList.remove("uk-overflow-hidden");
                html.classList.remove("uk-overflow-hidden");
            }
        });
    }

    const wishList = '<div class="uk-notification__content uk-notification__content--wishList"><div class="uk-notification__text">Sim số: <span>056.780.666</span> đã được thêm vào mục <span>Danh sách yêu thích</span> của bạn.</div></div>';
    const acc = '<div class="uk-notification__content uk-notification__content--acc"><div class="uk-notification__text">Hãy <span>Đăng ký/Đăng nhập</span> để cải thiện trải nghiệm Cá nhân hoá\n' +
        'khi truy cập và sử dụng <span>Danh sách yêu thích</span> của bạn.</div></div>';
    const error = '<div class="uk-notification__content uk-notification__content--error">' +
        '<div class="uk-notification__text">Bạn đã điền sai Mật khẩu đăng nhập <span>02</span> lần.</div>' +
        '<div class="uk-notification__text">Nhập sai quá <span>05</span> lần sẽ bị khoá tài khoản.</div>' +
        '</div>';

    // UIkit.notification({
    //     message: wishList,
    //     status: 'success',
    //     pos: 'top-right',
    //     timeout: 5000
    // });
    //
    // UIkit.notification({
    //     message: acc,
    //     status: 'success',
    //     pos: 'top-right',
    //     timeout: 5000
    // });
    // UIkit.notification({
    //     message: error,
    //     status: 'danger',
    //     pos: 'top-right',
    //     timeout: 5000
    // });

});

$(window).on('load', function () {
    function output (data, $output) {
        var result = '<div>input: Object</div>';
        result +=   '<div>slider: Object</div>';
        result +=   '<div>min: ' + data.min + '</div>';
        result +=   '<div>min_pretty: ' + data.min_pretty + '</div>';
        result +=   '<div>max: ' + data.max + '</div>';
        result +=   '<div>max_pretty: ' + data.max_pretty + '</div>';
        result +=   '<div>from: ' + data.from + '</div>';
        result +=   '<div>from_pretty: ' + data.from_pretty + '</div>';
        result +=   '<div>from_percent: ' + data.from_percent.toFixed(2) + '</div>';
        result +=   '<div>from_value: ' + data.from_value + '</div>';
        result +=   '<div>to: ' + data.to + '</div>';
        result +=   '<div>to_pretty: ' + data.to_pretty + '</div>';
        result +=   '<div>to_percent: ' + data.to_percent.toFixed(2) + '</div>';
        result +=   '<div>to_value: ' + data.to_value + '</div>';

        var html = '<div class="uk-grid-10 uk-flex-middle" uk-grid>\n' +
            '                <div class="uk-width-expand">\n' +
            '                    <input class="uk-input boloc__inputRange" type="text" placeholder="" value=' + data.from + '>\n' +
            '                </div>\n' +
            '                <div class="uk-width-auto">\n' +
            '                    <span>-</span>\n' +
            '                </div>\n' +
            '                <div class="uk-width-expand">\n' +
            '                    <input class="uk-input boloc__inputRange" type="text" placeholder="" value=' + data.to + '>\n' +
            '                </div>\n' +
            '            </div>'

        $output.html(html);
    }
    var $output1 = $(".js-output__d1");
    $(".js-range-slider").ionRangeSlider({
        type: "double",
        min: 0,
        max: 500,
        from: 0,
        to: 125,
        max_postfix: "tr",
        onStart: function (data) {
            output(data, $output1);
            // console.log('onStart');
        },
        onChange: function (data) {
            output(data, $output1);
            // console.log('onChange');
        },
        onFinish: function (data) {
            output(data, $output1);
            // console.log('onFinish');
        },
        onUpdate: function (data) {
            output(data, $output1);
            // console.log('onUpdate');
        }
    });
});

$(document).ready(function () {

    $('.thanhtoanMethod').click(function () {
        if ($(this).attr("value") == "payonline") {
            $(".Box").show();
        }else {
            $(".Box").hide();
        }
    });

    $('.thanhtoan__method__input').click(function () {
        if ($(this).attr("value") == "vnpay") {
            $(".thanhtoan__method__box").show();
        }else {
            $(".thanhtoan__method__box").hide();
        }
    });

    // $('.thanhtoanMethod').trigger('click');  // trigger the event
});

jQuery(window).on("scroll",function(){
    if( jQuery('.back-to-top').length > 0 && jQuery(window).scrollTop() > 200 ){
        jQuery('.back-to-top').addClass('display');}
    else{
        jQuery('.back-to-top').removeClass('display');
    }
});