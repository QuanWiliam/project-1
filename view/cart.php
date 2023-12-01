<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="shopping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Name Product</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $tong = 0;
                            foreach ($carts as $kay => $cart) {
                                extract($cart);
                                $total = $price_sp * $amount;
                                $tong += $total;
                                $xoa_cart = '<a href="index.php?act=delcart&idcart=' . $id_sp . '"><input type="button" value="Xóa"></a>';
                                echo '<tr>
                                <td class="product__cart__item">
                                    <div class="product__cart__item__pic">
                                        <img style="height: 299px" src="upload/' . $img_sp . '" alt="">
                                    </div>
                                    <div class="product__cart__item__text">
                                        <h6>' . $name_sp . '</h6>
                                        <h5>' . $price_sp . '</h5>
                                    </div>
                                </td>
                                <td class="quantity__item">
                                    <div class="quantity">
                                        <div class="pro-qty-2">
                                            <input type="number" min="1" value="' . $amount . '">
                                        </div>
                                    </div>
                                </td>
                                <td class="cart__price">' . $total . '</td>
                                <td class="cart__close">' . $xoa_cart . '</td>
                                
                            </tr>';
                            }
                            echo '</tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn">
                                    <a href="index.php">Continue Shopping</a>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="continue__btn update__btn">
                                    <a href="#"><i class="fa fa-spinner"></i> Update cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="cart__discount">
                            <h6>Discount codes</h6>
                            <form action="#">
                                <input type="text" placeholder="Coupon code">
                                <button type="submit">Apply</button>
                            </form>
                        </div>
                        <div class="cart__total">
                            <h6>Cart total</h6>
                            <ul>
                                <li>Total <span>$' . $tong . '</span></li>
                            </ul>
                            <a href="index.php?act=checkout" class="primary-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>';

                            ?>
                            <!-- Shopping Cart Section End -->