<!-- Checkout Section Begin -->
<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form action="?act=thanhtoan" method="POST">
                <div class="row">
                    <div class="col-lg-8 col-md-6">
                        <h6 class="coupon__code"><span class="icon_tag_alt"></span><a href="#"></a></h6>
                        <h6 class="checkout__title">Chi tiết thanh toán</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Tên:<span>*</span></p>
                                    <input style="color: black;" type="text"
                                        value="<?= $_SESSION['user']['name_tk'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="checkout__input">
                            <p>Địa Chỉ:<span>*</span></p>
                            <input style="color: black;" type="text" value="<?= $_SESSION['user']['address_tk'] ?>"
                                class="checkout__input__add">
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Số điện thoại:<span>*</span></p>
                                    <input style="color: black;" type="text" value="<?= $_SESSION['user']['tel_tk'] ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="checkout__input">
                                    <p>Email<span>*</span></p>
                                    <input style="color: black;" type="text"
                                        value="<?= $_SESSION['user']['email_tk'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="checkout__order">
                            <h4 class="order__title">Your order</h4>
                            <div class="checkout__order__products">Thông tin sản phẩm <span>Giá</span></div>
                            <?php
                            $tong = 0;
                            // var_dump($hoadon);
                            foreach ($hoadon as $kay => $hd) {
                                extract($hd);
                                $total = $price_sp * $amount;
                                $tong += $total;
                                echo '
                                <ul class="checkout__total__products">
                                <li>' . $name_sp . '<span>$' . number_format($total, 0, '.', '.') . '.VND</span></li>
                                </ul>';
                            }
                            ?>
                            <?php
                            echo '
                                <ul class="checkout__total__all">
                                <in>Total <span>' . number_format($tong, 0, '.', '.') . '.VND</span></in>
                                </ul>'
                                ?>
                            <input type="hidden" name="total" value="<?= $tong ?>">
                                <button  name="btn-payment" class="site-btn" type="submit">Thanh toán"</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- Checkout Section End -->