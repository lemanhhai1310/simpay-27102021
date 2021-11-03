<?php $data["title"] = "Tìm sim"; ?>
<?php $isHeader = true; ?>
<?php $isFooter = true; ?>
<?php $isSticky = true; ?>
<?php require "template-parts/layouts/header.php"; ?>
<!--Slider-->
<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="ratio: 1440:423; min-height: 240; animation: push">

    <ul class="uk-slideshow-items">
        <li>
            <img src="images/Group3868.png" alt="" uk-cover>
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

<div class="uk-section-small timsim__section">
    <?php require "template-parts/layouts/search.php"; ?>
    <div class="uk-container">
        <div class="home__content">
            <div class="uk-grid-divider uk-grid-medium" uk-grid>
                <div class="uk-width-1-4@m uk-visible@m">
                    <div class="uk-section-xsmall home__content__section" uk-sticky="offset: 230; bottom: true;">
                        <?php require "template-parts/layouts/boloc.php"; ?>
                    </div>
                </div>
                <div class="uk-width-expand">
                    <div class="uk-section-xsmall home__content__section">
                        <div class="uk-hidden@m uk-margin-small-bottom" uk-sticky="offset: 70">
                            <div class="uk-flex-middle uk-grid-16" uk-grid>
                                <div class="uk-width-expand">
                                    <div class="uk-inline uk-width-1-1 home__search__mobile">
                                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                                        <input class="uk-input" type="text" placeholder="Tìm tên, phong thuỷ,...">
                                    </div>
                                </div>
                                <div class="uk-width-auto uk-flex uk-flex-middle">
                                    <div class="boloc__btnFillter" uk-toggle="target: #offcanvas-fillter"></div>
                                </div>
                            </div>
                        </div>
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
                                <?php for ($i=1;$i<=45;$i++): ?>
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