<!-- Hero Section Begin -->
<section class="hero">
    <div class="hero__slider owl-carousel">
        <div class="hero__items set-bg" data-setbg="img/hero/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Bộ sưu tập mùa hè</h6>
                            <h2>Nam Thanh Lịch Trẻ Trung: Bộ Sưu Tập Thời Trang Xuân Hè</h2>
                            <p> Bộ sưu tập Xuân Hè luôn đem lại sự tươi mới và sôi động của mùa xuân cùng với sự nhẹ
                                nhàng, thoải mái của mùa hè. Những bộ trang phục trong bộ sưu tập này thường mang đậm
                                bản sắc tự nhiên, sắc màu tươi sáng</p>
                            <a href="index.php?act=shop" class="primary-btn">Mua ngay <span
                                    class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero__items set-bg" data-setbg="img/hero/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-5 col-lg-7 col-md-8">
                        <div class="hero__text">
                            <h6>Bộ sưu tập mùa hè</h6>
                            <h2>Nam Thanh Lịch Trẻ Trung: Bộ Sưu Tập Thời Trang Xuân Hè</h2>
                            <p> Bộ sưu tập Xuân Hè luôn đem lại sự tươi mới và sôi động của mùa xuân cùng với sự nhẹ
                                nhàng, thoải mái của mùa hè. Những bộ trang phục trong bộ sưu tập này thường mang đậm
                                bản sắc tự nhiên, sắc màu tươi sáng</p>
                            <a href="index.php?act=shop" class="primary-btn">Mua ngay <span
                                    class="arrow_right"></span></a>
                            <div class="hero__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-4">
                <div class="banner__item">
                    <div class="banner__item__pic">
                        <img width="400" src="../../project-1/upload/ni1.jpeg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Bộ sưu tập áo Nỉ 2030</h2>
                        <a href="index.php?act=shop">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__pic">
                        <img width="400" src="../../project-1/upload/polo2.jpeg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Các dòng áo polo</h2>
                        <a href="index.php?act=shop">Mua ngay</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner__item banner__item--last">
                    <div class="banner__item__pic">
                        <img width="400" src="../../project-1/upload/khoac2.jpeg" alt="">
                    </div>
                    <div class="banner__item__text">
                        <h2>Bộ sưu tập áo khoác</h2>
                        <a href="index.php?act=shop">Mua ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Banner Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="filter__controls">

                    <li class="active" data-filter="*">Bán chạy nhất</li>
                    <li data-filter=".new-arrivals">Điểm đến mới</li>
                    <li data-filter=".hot-sales">Giảm giá sốc</li>

                </ul>
            </div>
        </div>
        <div class="row product__filter">
            <!-- đây là sản phẩm mới -->
            <?php
            foreach ($sphomeNew as $sp) {
                // var_dump($sp);
                extract($sp);
                $img = $img_path . $img_sp;
                echo '
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                        <div class="product__item">
                        <a href="index.php?act=chitietsanpham"><div class="product__item__pic set-bg" data-setbg="' . $img . '"></a>
                                <span class="label">New</span>
                                <ul class="product__hover">
                                    <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                                    <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                                    <li><a name="chitiet" href="index.php?act=shopdetail&id_sp=' . $id_sp . '"><img src="img/icon/search.png" alt=""></a></li>
                                </ul>
                            </div>
                            <div class="product__item__text">
                                <h6>' . $name_sp . '</h6>
                                <div>
                                <a href="index.php?act=addtocart&id=' . $id_sp . '" class="add-cart">Thêm vào giỏ hàng</a>
                            </div>
                                <div class="rating">
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <h5>' . number_format($price_sp, 0, '.', '.') . '.VND</h5>
                                <div class="product__color__select">
                                    <label for="pc-1">
                                        <input type="radio" id="pc-1">
                                    </label>
                                    <label class="active black" for="pc-2">
                                        <input type="radio" id="pc-2">
                                    </label>
                                    <label class="grey" for="pc-3">
                                        <input type="radio" id="pc-3">
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>';
            }
            ?>
            <!-- đây là sản phẩm bán chạy -->
            <?php
            foreach ($sphomeHot as $spHot) {
                extract($spHot);
                $img = $img_path . $img_sp;
                echo '
                    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="' . $img . '">
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a name="chitiet" href="index.php?act=chitietsanpham&id_sp=' . $id_sp . '"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>' . $name_sp . '</h6>
                        <a href="index.php?act=addtocart&id=' . $id_sp . '" class="add-cart">Thêm vào giỏ hàng</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>' . number_format($price_sp, 0, '.', '.') . '.VND</h5>
                        <div class="product__color__select">
                            <label for="pc-4">
                                <input type="radio" id="pc-4">
                            </label>
                            <label class="active black" for="pc-5">
                                <input type="radio" id="pc-5">
                            </label>
                            <label class="grey" for="pc-6">
                                <input type="radio" id="pc-6">
                            </label>
                        </div>
                    </div>
                </div>
            </div>';
            }

            ?>
            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-2.jpg">
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Piqué Biker Jacket</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>$67.24</h5>
                        <div class="product__color__select">
                            <label for="pc-4">
                                <input type="radio" id="pc-4">
                            </label>
                            <label class="active black" for="pc-5">
                                <input type="radio" id="pc-5">
                            </label>
                            <label class="grey" for="pc-6">
                                <input type="radio" id="pc-6">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                <div class="product__item sale">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-3.jpg">
                        <span class="label">Sale</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Multi-pocket Chest Bag</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>$43.48</h5>
                        <div class="product__color__select">
                            <label for="pc-7">
                                <input type="radio" id="pc-7">
                            </label>
                            <label class="active black" for="pc-8">
                                <input type="radio" id="pc-8">
                            </label>
                            <label class="grey" for="pc-9">
                                <input type="radio" id="pc-9">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-4.jpg">
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Diagonal Textured Cap</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>$60.9</h5>
                        <div class="product__color__select">
                            <label for="pc-10">
                                <input type="radio" id="pc-10">
                            </label>
                            <label class="active black" for="pc-11">
                                <input type="radio" id="pc-11">
                            </label>
                            <label class="grey" for="pc-12">
                                <input type="radio" id="pc-12">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-5.jpg">
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Lether Backpack</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>$31.37</h5>
                        <div class="product__color__select">
                            <label for="pc-13">
                                <input type="radio" id="pc-13">
                            </label>
                            <label class="active black" for="pc-14">
                                <input type="radio" id="pc-14">
                            </label>
                            <label class="grey" for="pc-15">
                                <input type="radio" id="pc-15">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                <div class="product__item sale">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-6.jpg">
                        <span class="label">Sale</span>
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Ankle Boots</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>$98.49</h5>
                        <div class="product__color__select">
                            <label for="pc-16">
                                <input type="radio" id="pc-16">
                            </label>
                            <label class="active black" for="pc-17">
                                <input type="radio" id="pc-17">
                            </label>
                            <label class="grey" for="pc-18">
                                <input type="radio" id="pc-18">
                            </label>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-7.jpg">
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>T-shirt Contrast Pocket</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>$49.66</h5>
                        <div class="product__color__select">
                            <label for="pc-19">
                                <input type="radio" id="pc-19">
                            </label>
                            <label class="active black" for="pc-20">
                                <input type="radio" id="pc-20">
                            </label>
                            <label class="grey" for="pc-21">
                                <input type="radio" id="pc-21">
                            </label>
                        </div>
                    </div>
                </div>
            </div> -->
            <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix hot-sales">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-8.jpg">
                        <ul class="product__hover">
                            <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                            <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                            <li><a href="#"><img src="img/icon/search.png" alt=""></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>Basic Flowing Scarf</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div>
                        <h5>$26.28</h5>
                        <div class="product__color__select">
                            <label for="pc-22">
                                <input type="radio" id="pc-22">
                            </label>
                            <label class="active black" for="pc-23">
                                <input type="radio" id="pc-23">
                            </label>
                            <label class="grey" for="pc-24">
                                <input type="radio" id="pc-24">
                            </label>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!-- Product Section End -->

<!-- from add-cart -->
<!-- <div>
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="id" value="' . $id . '">
                                    <input type="hidden" name="name_sp" value="' . $name_sp . '">
                                    <input type="hidden" name="img" value="' . $img . '">
                                    <input type="hidden" name="price_sp" value="' . $price_sp . '">
                                    <input type="submit" name="addtocart" value="+ Add To Cart">
                                </form>
                            </div> -->

<!-- Categories Section Begin -->
<section class="categories spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="categories__text">
                    <h2>Clothings Hot <br /> <span>Shoe Collection</span> <br /> Accessories</h2>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="categories__hot__deal">
                    <img src="img/product-sale.png" alt="">
                    <div class="hot__deal__sticker">
                        <span>Sale Of</span>
                        <h5>$29.99</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-1">
                <div class="categories__deal__countdown">
                    <span>Deal Of The Week</span>
                    <h2>Multi-pocket Chest Bag Black</h2>
                    <div class="categories__deal__countdown__timer" id="countdown">
                        <div class="cd-item">
                            <span>3</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>1</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>50</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>18</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Mua ngay</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Section End -->

<!-- Instagram Section Begin -->
<section class="instagram spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="instagram__pic">
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-1.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-2.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-3.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-4.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-5.jpg"></div>
                    <div class="instagram__pic__item set-bg" data-setbg="img/instagram/instagram-6.jpg"></div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="instagram__text">
                    <h2>Instagram</h2>
                    <p>Đừng ngần ngại ghé thăm trang Instagram của chúng tôi để tham gia vào cộng đồng thời trang đầy
                        màu sắc. Bạn sẽ có cơ hội thấy những bức ảnh nổi bật về sản phẩm, cùng với những chia sẻ về
                        phong cách, cách kết hợp trang phục độc đáo và một vài bí quyết thời trang từ đội ngũ chuyên gia
                        của chúng tôi.
                        Hãy để chúng tôi biến trang cá nhân của bạn thành một không gian thăng hoa với phong cách và sự
                        tự tin. Liên hệ với chúng tôi ngay trên Instagram để trải nghiệm sự độc đáo và phong phú trong
                        thế giới thời trang của chúng tôi. Chúng tôi sẵn sàng đồng hành và hỗ trợ bạn! 📸✨ #LiênHệ
                        #Instagram #ThờiTrang"</p>
                    <h3>#Male_Fashion</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <span>Latest News</span>
                    <h2>Fashion New Trends</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-1.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 16 February 2020</span>
                        <h5>What Curling Irons Are The Best Ones</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-2.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 21 February 2020</span>
                        <h5>Eternity Bands Do Last Forever</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="blog__item">
                    <div class="blog__item__pic set-bg" data-setbg="img/blog/blog-3.jpg"></div>
                    <div class="blog__item__text">
                        <span><img src="img/icon/calendar.png" alt=""> 28 February 2020</span>
                        <h5>The Health Benefits Of Sunglasses</h5>
                        <a href="#">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->