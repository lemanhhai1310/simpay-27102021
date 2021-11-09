<div id="my-search" class="search__section" uk-sticky="offset: 76">
    <div class="uk-container">
        <div class="uk-card uk-card-default uk-card-body home__search__card uk-visible@m">
            <div class="uk-text-center uk-margin-bottom home__search__box">
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
                        <a href="timsim.php" class="home__search__form__option uk-position-bottom-right">Tìm kiếm nâng cao</a>
                    </div>
                </div>
                <div class="uk-width-auto uk-flex uk-flex-middle">
                    <a href="" class="home__search__micro"></a>
                </div>
            </div>
            <div class="home__search__tagGrid">
                <div class="uk-child-width-auto uk-grid-12" uk-grid>
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
        </div>
    </div>
</div>