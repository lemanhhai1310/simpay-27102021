<h3 class="uk-h3 boloc__title">Bộ lọc</h3>
<div class="uk-grid-24 uk-grid uk-child-width-1-1 uk-form-stacked" uk-grid>
    <div>
        <div class="uk-margin uk-grid-10 uk-child-width-1-1 uk-grid" uk-grid>
            <label><input class="uk-checkbox boloc__checkBox__check" type="checkbox" checked> <span class="boloc__checkBox__txt">Trả trước</span></label>
            <label><input class="uk-checkbox boloc__checkBox__check" type="checkbox"> <span class="boloc__checkBox__txt">Trả sau</span></label>
        </div>
    </div>
    <div>
        <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Giá tiền</label>
        <div class="uk-form-controls">
            <div class="uk-grid-10 uk-flex-middle" uk-grid>
                <div class="uk-width-expand">
                    <input class="uk-input boloc__inputRange" type="text" placeholder="" value="0">
                </div>
                <div class="uk-width-auto">
                    <span>-</span>
                </div>
                <div class="uk-width-expand">
                    <input class="uk-input boloc__inputRange" type="text" placeholder="" value="125">
                </div>
            </div>
        </div>
    </div>
    <div>
        <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Sim theo loại</label>
        <div class="uk-form-controls">
            <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                <select>
                    <option value="">Sim Tứ quý</option>
                    <option value="1">Mobifone</option>
                    <option value="2">Vinaphone</option>
                    <option value="3">Vietnammobile</option>
                </select>
                <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                    <span></span>
                    <span class="uk-icon uk-position-center-right"></span>
                </button>
            </div>
        </div>
    </div>
    <div>
        <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Không bao gồm</label>
        <div class="uk-form-controls">
            <div class="uk-grid-8 uk-child-width-auto uk-grid" uk-grid>
                <?php for ($i=1;$i<=9;$i++): ?>
                <label class="boloc__notNumber">
                    <input class="uk-checkbox boloc__notNumber__check" type="checkbox" <?= ($i==1)?'checked':'' ?>>
                    <span class="boloc__notNumber__txt"><?= $i ?></span>
                </label>
                <?php endfor; ?>
            </div>
        </div>
    </div>
</div>
<ul class="boloc__accordion" uk-accordion="multiple: true">
    <li class="boloc__accordion__li uk-open">
        <a class="uk-accordion-title boloc__accordion__title" href="#">THEO NHÀ MẠNG</a>
        <div class="uk-accordion-content boloc__accordion__content">
            <div class="uk-grid uk-grid-16 uk-form-stacked" uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Nhà mạng</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Viettel</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Loại số</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Đầu số</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Tổng điểm</label>
                    <div class="uk-form-controls">

                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="boloc__accordion__li uk-open">
        <a class="uk-accordion-title boloc__accordion__title" href="#">THEO NGÀY SINH</a>
        <div class="uk-accordion-content boloc__accordion__content">
            <div class="uk-grid uk-grid-16 uk-form-stacked" uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Ngày sinh</label>
                    <div class="uk-form-controls">
                        <div class="uk-inline uk-width-1-1 boloc__accordion__ngaysinh">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                            <input class="uk-input" type="text" value="21/09/1997">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
    <li class="boloc__accordion__li uk-open">
        <a class="uk-accordion-title boloc__accordion__title" href="#">THEO PHONG THUỶ</a>
        <div class="uk-accordion-content boloc__accordion__content">
            <div class="uk-grid uk-grid-16 uk-form-stacked" uk-grid>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Chọn tuổi</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Thân</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Hợp mệnh</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Tất cả</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Giờ sinh</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">23H - 1H</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="uk-width-1-2">
                    <label class="uk-form-label boloc__accordion__label" for="form-stacked-text">Giới tính</label>
                    <div class="uk-form-controls">
                        <div class="uk-width-1-1" uk-form-custom="target: > * > span:first-child">
                            <select>
                                <option value="">Nữ</option>
                                <option value="1">Mobifone</option>
                                <option value="2">Vinaphone</option>
                                <option value="3">Vietnammobile</option>
                            </select>
                            <button class="uk-button uk-button-default home__content__btnSort uk-width-1-1" type="button" tabindex="-1">
                                <span></span>
                                <span class="uk-icon uk-position-center-right"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </li>
</ul>