<?php
if (is_array($loadone)) {
    extract($loadone);
    $img = $img_path . $img_sp;
}
echo '
 <section class="shop-details">
        <div class="product__details__pic">
        <div >
            <div class="col-lg-12">
                <div class="product__details__breadcrumb">
                    <a href="./index.php">Trang chủ</a>
                    <a href="./shop.php">Sản phẩm</a>
                    <span>Chi tiết sản phẩm</span>
                </div>
            </div>
        </div>
            <div class="container d-flex justify-content-center">
                    
                <div class="col-lg-6 col-md-9 ">
                    <div class="tab-content">
                        <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <div class="product__details__pic__item ">
                                <img src="' . $img . '" alt="">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="product__details__content">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-8">
                        <div class="product__details__text">
                            <h4>' . $name_sp . '</h4>
                            <div class="rating">
                            </div>
                            <h3 class="price">' . number_format($price_sp, 0, '.', '.') . ' .VND</h3>
                        
                            <div class="product__details__option">
                                <div class="product__details__option__size">
                                </div>
                                <div class="product__details__option__color">
                                </div>
                            </div>
                            <div class="product__details__cart__option">
                                <div class="quantity" >
                                    <div class="pro-qty1">
                                        <button class=" border-0 bg-0" id="decrease">
                                        <i class="fa-solid fa-minus"></i>
                                        </button>
                                        <span data-quantity = "' . $soluong . '" type="text" id="quantity">1</span>
                                        <button class=" border-0 bg-0" id="increase">
                                        <i class="fa-solid fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <a class="primary-btn" id="btn-add" href="index.php?act=addtocart&id=' . $id_sp . '">ADD TO CART</a>
                            </div>
                            <div class="product__details__btns__option">
                            </div>
                            <div class="product__details__last__option">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-5"
                                    role="tab">Mô tả sản phẩm</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-7" role="tab">Bình luận</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-5" role="tabpanel">
                                    <div class="product__details__tab__content">
                                        <div class="product__details__tab__content__item">
                                            <h5>Mô tả</h5>
                                            <p>' . $mota . '</p>
                                            
                                        </div>
                                        <div class="product__details__tab__content__item">
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-7" role="tabpanel">
                                    <div class="product__details__tab__content ">
                                    <iframe class="border-0 position-relative" src="view/binhluan.php?id_sp=' . $id_sp . '" style="height:450px;width:100%;" title="description"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <h3 class="related-title">Sản phẩm cùng loại</h3>
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
                        <li><a name="chitiet" href="index.php?act=chitiet&id_sp=' . $id_sp . '"><img src="img/icon/search.png" alt=""></a></li>
                    </ul>
                </div>
                <div class="product__item__text">
                    <h6>' . $name_sp . '</h6>
                    <a href="#" class="add-cart">+ Add To Cart</a>
                    <div class="rating">
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                        <i class="fa fa-star-o"></i>
                    </div>
                    <h5>' . number_format($price_sp, 0, '.', '.') . '</h5>
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

<script>
// Tạo biến để lưu trữ số lượng sản phẩm trong giỏ hàng
const btnAdd = document.getElementById("btn-add");
let link = btnAdd.href;
let quantity = 1;

// Xử lý sự kiện click của nút tăng số lượng
document.querySelector("#increase").addEventListener("click", function() {
    // Tăng số lượng lên 1
    let amount = document.querySelector("#quantity")
    let sl = amount.dataset.quantity
    if (quantity >= sl) {
        return
    }
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