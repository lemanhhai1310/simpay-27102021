<div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-small uk-grid-32-m home__content__sanpham__grid" uk-grid>
    <?php
    $logos = Array(
        'images/_Thẻ/1600px-Viettel_logo_2021 1.png',
        'images/mobifone.png',
        'images/reddi.png',

        'images/vinaphone.png',
        'images/vietnamobile.png',
        'images/itel.png',
        'images/indochina.png',
    );

    function randomNumberSequence($requiredLength = 7, $highestDigit = 8) {
        $sequence = '';
        for ($i = 0; $i < $requiredLength; ++$i) {
            $sequence .= mt_rand(0, $highestDigit);
        }
        return $sequence;
    }
    $numberPrefixes = ['84055', '84086', '84088', '84087', '84092','84056','84094','84098'];
    for ($i=1;$i<=45;$i++): ?>
        <div>
            <div class="uk-card uk-card-default uk-card-body home__content__sanpham__card">
                <?php
                $numberPrefixes[array_rand($numberPrefixes)];
                $phone = $numberPrefixes[array_rand($numberPrefixes)] ."". randomNumberSequence();
                $parts=sscanf($phone,'%2c%3c%3c%4c');
                ?>
                <?php if ($i<=6): ?>
                    <?php
                    $items = Array(
                        'images/_Thẻ/Tag1.png',
                        'images/_Thẻ/Tag2.png',
                        'images/_Thẻ/Tag3.png',
                    );
                    ?>
                    <img hidden class="uk-position-top-left home__content__sanpham__imgTag" src="<?= $items[array_rand($items)] ?>" alt="">
                <?php endif; ?>
                <div class="uk-position-top-right home__content__sanpham__link--position">
                    <a href="simphongthuy.php" class="home__content__sanpham__link home__content__sanpham__link--info"></a>
                    <a href="javascript:void(0)" onclick="addWishList()" class="home__content__sanpham__link home__content__sanpham__link--wishList"></a>
                    <a href="cart.php" class="home__content__sanpham__link home__content__sanpham__link--addCart"></a>
                </div>
                <div class="home__content__sanpham__mb">
                    <div class="home__content__sanpham__phoneNumber"><?php print "$parts[1].$parts[2].<span>$parts[3]</span>"; ?></div>
                    <span class="home__content__sanpham__info" hidden></span>
                </div>
                <div class="uk-child-width-auto uk-grid-small uk-flex-between uk-flex-middle" uk-grid>
                    <div>
                        <img src="<?= $logos[array_rand($logos)] ?>" alt="">
                    </div>
                    <div>
                        <span class="home__content__sanpham__priceTxt">1.800.000đ</span>
                    </div>
                </div>
            </div>
        </div>
    <?php endfor; ?>
</div>

<script>
    const wishList = '<div class="uk-notification__content uk-notification__content--wishList"><div class="uk-notification__text">Sim số: <span>056.780.666</span> đã được thêm vào mục <span>Danh sách yêu thích</span> của bạn.</div></div>';
    const addWishList = () => {
        UIkit.notification({
            message: wishList,
            status: 'success',
            pos: 'top-right',
            timeout: 5000
        });
    }
</script>