<?php $data["title"] = "Trang chủ"; ?>
<?php
$isLogin = rand(false,true);
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
<div class="uk-section-small home__section">
    <div class="uk-container uk-padding-remove home__sanpham__margin">
        <div class="home__sanpham__overFlow uk-child-width-1-5@m uk-grid-16 uk-grid-match uk-flex-nowrap" uk-toggle="cls: uk-overflow-auto; mode: media; media: (max-width: 959px)" uk-grid>
            <?php
            $data = array(
                array(
                    'txt' => 'cool',
                    'desc' => 'Sim Đẹp - Giá rẻ - Data Khủng',
                ),
                array(
                    'txt' => 'biz',
                    'desc' => 'Bạn đồng hành của nhà kinh doanh',
                ),
                array(
                    'txt' => 'sang',
                    'desc' => 'Sim dành cho giới TINH HOA',
                ),
                array(
                    'txt' => 'may',
                    'desc' => 'Thay Sim Đổi Vận',
                ),
                array(
                    'txt' => 'pal',
                    'desc' => 'Yêu thương kết nối bằng Sim số',
                ),
            );
            foreach ($data as $k=>$v): ?>
            <div class="home__sanpham__column">
                <div class="home__sanpham__card uk-card <?= $v['txt'] ?>">
                    <div class="uk-card-body home__sanpham__body">
                        <h3 class="uk-h3 home__sanpham__title">sim <span><?= $v['txt'] ?></span></h3>
                        <p class="home__sanpham__desc"><?= $v['desc'] ?></p>
                    </div>
                    <div class="uk-card-footer home__sanpham__footer">
                        <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slider>

                            <ul class="uk-slider-items uk-child-width-1-1">
                                <?php for ($i=0;$i<=2;$i++): ?>
                                <li>
                                    <div class="home__sanpham__number">0586.779.666</div>
                                </li>
                                <?php endfor; ?>
                            </ul>

                            <a class="uk-position-center-left uk-position-small home__sanpham__icon home__sanpham__icon--prev" href="#" uk-slider-item="previous"></a>
                            <a class="uk-position-center-right uk-position-small home__sanpham__icon home__sanpham__icon--next" href="#" uk-slider-item="next"></a>

                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body home__search__card uk-visible@m">
            <div class="uk-text-center uk-margin-bottom">
                <h3 class="uk-card-title home__search__title">Tìm kiếm SIM</h3>
                <div class=""><a href="" class="home__search__link">Hướng dẫn tìm SIM ưng ý</a></div>
            </div>
            <div class="uk-grid-25-m uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <div class="uk-position-relative home__search__margin25">
                        <div class="home__search__form">
                            <div class="uk-grid-divider uk-grid-small" uk-grid>
                                <div class="uk-width-auto">
                                    <div uk-form-custom="target: > * > span:first-child">
                                        <select>
                                            <option value="">Tất cả</option>
                                            <option value="1">Option 01</option>
                                            <option value="2">Option 02</option>
                                            <option value="3">Option 03</option>
                                            <option value="4">Option 04</option>
                                        </select>
                                        <button class="uk-button uk-button-default home__search__form__btnSelect" type="button" tabindex="-1">
                                            <span></span>
                                            <span uk-icon="icon: chevron-down"></span>
                                        </button>
                                    </div>
                                </div>
                                <div class="uk-width-expand">
                                    <div class="uk-position-relative">
                                        <input id="search" class="uk-input home__search__form__input" type="text" placeholder="">
                                        <button type="submit" class="uk-button home__search__form__btnSubmit uk-button-default uk-position-center-right"></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="" class="home__search__form__option uk-position-bottom-right">Tìm kiếm nâng cao</a>
                    </div>
                </div>
                <div class="uk-width-auto uk-flex uk-flex-middle">
                    <a href="" class="home__search__micro"></a>
                </div>
            </div>
            <div class="uk-child-width-auto uk-grid-12 home__search__tagGrid uk-flex-center" uk-grid>
                <?php
                $data = array(
                    'Sản phẩm của SIMPAY',
                    'Gói cước Combo',
                    'Tìm Sim*',
                    'Sim Phong thuỷ',
                    'Sim năm sinh',
                    'Sim số đẹp',
                );
                foreach ($data as $k=>$v): ?>
                <div>
                    <a href="" class="uk-button uk-button-default home__search__tag"><span><?= $v ?></span></a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="home__content">
            <div class="uk-grid-divider" uk-grid>
                <div class="uk-width-1-4@m uk-visible@m">
                    <div class="uk-section-xsmall home__content__section">
                        <?php require "template-parts/layouts/boloc.php"; ?>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-section-xsmall home__content__section">
                        <div class="home__content__mb24">
                            <div class="uk-child-width-auto uk-flex-middle uk-grid-16-m" uk-grid>
                                <div>
                                    <div class="uk-button uk-button-default home__content__selectFillter">
                                        <span>Giá từ 0 đến 125Tr</span>
                                        <a href="" class="uk-close uk-position-center-right"></a>
                                    </div>
                                </div>
                                <div>
                                    <a href="" class="home__content__deleteFillter">Xoá bộ lọc</a>
                                </div>
                            </div>
                        </div>
                        <div class="home__content__mb23">
                            <div class="uk-flex-middle uk-grid-small" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="home__content__txtKetqua">15 Kết quả</div>
                                </div>
                                <div class="uk-width-auto@s">
                                    <div class="uk-child-width-auto uk-flex-middle uk-grid-19" uk-grid>
                                        <div>
                                            <div class="home__content__labelSort">Lọc theo:</div>
                                        </div>
                                        <div>
                                            <div uk-form-custom="target: > * > span:first-child">
                                                <select>
                                                    <option value="">Giá thấp đến cao</option>
                                                    <option value="1">Option 01</option>
                                                    <option value="2">Option 02</option>
                                                    <option value="3">Option 03</option>
                                                    <option value="4">Option 04</option>
                                                </select>
                                                <button class="uk-button uk-button-default home__content__btnSort" type="button" tabindex="-1">
                                                    <span></span>
                                                    <span class="uk-icon uk-position-center-right"></span>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="home__content__mb77">
                            <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-32-m home__content__sanpham__grid" uk-grid>
                                <?php for ($i=1;$i<=15;$i++): ?>
                                <div>
                                    <div class="uk-card uk-card-default uk-card-body home__content__sanpham__card">
                                        <?php if ($i<=6): ?>
                                            <?php
                                            $items = Array(
                                                'images/_Thẻ/Tag1.png',
                                                'images/_Thẻ/Tag2.png',
                                                'images/_Thẻ/Tag3.png',
                                            );
                                            ?>
                                            <img class="uk-position-top-left home__content__sanpham__imgTag" src="<?= $items[array_rand($items)] ?>" alt="">
                                        <?php endif; ?>
                                        <div class="uk-position-top-right home__content__sanpham__link--position">
                                            <a href="" class="home__content__sanpham__link home__content__sanpham__link--wishList"></a>
                                            <a href="" class="home__content__sanpham__link home__content__sanpham__link--addCart"></a>
                                        </div>
                                        <div class="home__content__sanpham__mb">
                                            <div class="home__content__sanpham__phoneNumber">056.780.<span>6666</span></div>
                                            <span class="home__content__sanpham__info"></span>
                                        </div>
                                        <div class="uk-child-width-auto uk-grid-small uk-flex-between uk-flex-middle" uk-grid>
                                            <div>
                                                <img src="images/_Thẻ/1600px-Viettel_logo_2021 1.png" alt="">
                                            </div>
                                            <div>
                                                <span class="home__content__sanpham__priceTxt">1.800.000đ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>

                        <ul class="uk-pagination uk-flex-center pagination uk-grid-4" uk-margin>
                            <li><a href="#"><span uk-pagination-previous></span></a></li>
                            <li><a href="#">1</a></li>
                            <li class="uk-disabled"><span>...</span></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">6</a></li>
                            <li class="uk-active"><span>7</span></li>
                            <li><a href="#">8</a></li>
                            <li><a href="#"><span uk-pagination-next></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require "template-parts/layouts/footer.php"; ?>