<section class="breadcrumb-option">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__text">
                    <h4>Mua hàng</h4>
                    <div class="breadcrumb__links">
                        <a href="./index.php">Trang chủ</a>
                        <span>Sản Phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shop Section Begin -->
<section class="shop spad">
    <div class="container">
        <div class="row">
            <!-- sidebar -->
            <?php include "view/sidebar.php" ?>
            <!-- hết sidebar -->

            <div class="col-lg-9">
                <div class="shop__product__option">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__left">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="shop__product__option__right">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php
                    foreach ($sphomeShop as $sp) {
                        extract($sp);
                        $img = $img_path . $img_sp;
                        echo '
                                <div class="col-lg-4 col-md-6 col-sm-6 choanh">
                                    <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="' . $img . '">
                                            <ul class="product__hover">
                                                <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                                <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a>
                                                </li>
                                                <li><a name="chitiet" href="index.php?act=chitietsanpham&id_sp=' . $id_sp . '"><img src="img/icon/search.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__item__text">
                                            <h6>' . $name_sp . '</h6>
                                            <a href="index.php?act=addtocart&id=' . $id_sp . '" class="add-cart">Thêm vào giỏ hàng</a>

                                            <div class="rating">
                                            </div>
                                            <h5>' . number_format($price_sp, 0, '.', '.') . '.VND</h5>
                                            <div class="product__color__select">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                    }

                    ?>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__pagination">
                            <!-- <form action=""></form> chèn code này vào để tránh lỗi không nhận form  -->
                            <form action=""></form>
                            <form action="index.php?act=shop" method="post">
                                <?php
                                for ($i = 0; $i < $count; $i++) {
                                    ?>
                                    <input type="submit" name="number" value="<?= $i + 1 ?>">
                                    <?php
                                }
                                ?>
                            </form>
                            <!-- <a class="active" href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <span>...</span>
                            <a href="#">21</a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>