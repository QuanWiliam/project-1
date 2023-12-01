<!-- Shop Details Section Begin -->
<?php
if (is_array($loadone)) {
    extract($loadone);
    $img = $img_path . $img_sp;
}
echo '
<section class="shop-details">
    <div class="product__details__pic">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__breadcrumb">
                        <a href="./index.php">Home</a>
                        <a href="./shop.php">Shop</a>
                        <span>Product Details</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="product-left">
                    <img src="' . $img . '" alt="">
                </div>
                <div class="product-right">
                    <div class="name-product">
                        <h2 class="mb">' . $name_sp . '</h2>

                        <h3 class="price mb">$' . $price_sp . '<span>$470.00</span></h3>

                        <div class="product__details__option__size mb">
                                    <span>Size:</span>
                                    <label for="xxl">xxl
                                        <input type="radio" id="xxl">
                                    </label>
                                    <label class="active" for="xl">xl
                                        <input type="radio" id="xl">
                                    </label>
                                    <label for="l">l
                                        <input type="radio" id="l">
                                    </label>
                                    <label for="sm">s
                                        <input type="radio" id="sm">
                                    </label>
                                </div>

                        <div class="prices mb">
                        <button id="decrease">-</button>
                        <span id="quantity">1</span>
                        <button id="increase">+</button>
                        </div>

                        <a class="prices add" id="btn-add" href="index.php?act=addtocart&id=' . $id_sp . '"><button class="mb">ADD TO CART</button></a>

                        <div class="list-img prices">
                        </div>
                        <div class="mota">
                            <p>' . $mota . '</p>
                        </div>
                    </div>
                </div>
</section>
';

?>
<!-- Shop Details Section End -->

<!-- Related Section Begin -->
<section class="related spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="related-title">Related Product</h3>
            </div>
        </div>

        <div class="row">
            <?php
            foreach ($sanphamcungloai as $cungloai) {
                extract($cungloai);
                $img = $img_path . $img_sp;

                echo '
            <div class="col-lg-3 col-md-6 col-sm-6 col-sm-6">
            <div class="product__item">
                <div class="product__item__pic set-bg" data-setbg="' . $img . '">
                    <span class="label">Same Kind</span>
                    <ul class="product__hover">
                        <li><a href="#"><img src="img/icon/heart.png" alt=""></a></li>
                        <li><a href="#"><img src="img/icon/compare.png" alt=""> <span>Compare</span></a></li>
                        <li><a name="chitiet" href="index.php?act=shopdetail&id_sp=' . $id_sp . '"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>' . $name_sp . '</h6>
                    <a href="index.php?act=addtocart&id=' . $id_sp . '" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>' . $price_sp . '</h5>
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
        </div>
            ';

            }


            ?>
        </div>
    </div>
</section>
<!-- Related Section End -->
<style>
.product-left img {
    width: 400px;
}

.mb {
    margin-bottom: 20px;
}

.so {
    width: 30px;
    text-align: center;
}

.price {
    margin-right: 180px;
    font-size: 25px;
}

.price span {
    text-decoration-line: line-through;
    opacity: 0.5;
    margin-left: 10px;
}

.prices {
    margin-right: 230px;
}

.add button {
    background-color: black;
    color: white;
}

.list-img ul {
    list-style-type: none;
}

.mota {
    width: 700px;
    float: left;
}
</style>

<script>
// Tạo biến để lưu trữ số lượng sản phẩm trong giỏ hàng
const btnAdd = document.getElementById("btn-add");
let link = btnAdd.href;
let quantity = 1;

// Xử lý sự kiện click của nút tăng số lượng
document.querySelector("#increase").addEventListener("click", function() {
    // Tăng số lượng lên 1
    quantity++;
    btnAdd.href = `${link}&amount=${quantity}`
    // Cập nhật số lượng trong giỏ hàng
    document.querySelector("#quantity").textContent = quantity;
});

// Xử lý sự kiện click của nút giảm số lượng
document.querySelector("#decrease").addEventListener("click", function() {
    // Giảm số lượng xuống 1
    quantity--;

    // Kiểm tra số lượng có còn lớn hơn 0 không
    if (quantity < 1) {
        // Nếu số lượng nhỏ hơn 0, thì đặt số lượng thành 1
        quantity = 1;
    }
    btnAdd.href = `${link}&amount=${quantity}`
    // Cập nhật số lượng trong giỏ hàng
    document.querySelector("#quantity").textContent = quantity;
});
</script>