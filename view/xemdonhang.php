<div class="container mt-4">
    <link rel="stylesheet" href="css/order.css">
    <article class="card">
        <?php
        $trangthai = [
            ['icon' => 'fa fa-check', 'text' => 'Chưa xác nhận'],
            ['icon' => 'fa fa-user', 'text' => 'Đã xác nhận'],
            ['icon' => 'fa fa-truck', 'text' => 'Đang xử lí'],
            ['icon' => 'fa fa-box', 'text' => 'Đang vận chuyển'],
            ['icon' => 'fa fa-check', 'text' => 'Hoàn thành'],
        ];
        ?>
        <div class="card-body">
            <div class="track">
                <div class="step active"> <span class="icon"> <i class="fa fa-check"></i> </span> <span
                        class="text">Order confirmed</span> </div>
                <div class="step active"> <span class="icon"> <i class="fa fa-user"></i> </span> <span class="text">
                        Picked by courier</span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-truck"></i> </span> <span class="text"> On the
                        way </span> </div>
                <div class="step"> <span class="icon"> <i class="fa fa-box"></i> </span> <span class="text">Ready for
                        pickup</span> </div>
            </div>
        </div>
    </article>
    <div class="row">
        <!-- Section 1: Chi tiết đơn hàng (Order details) -->
        <div class="col-md-6">


            <div class="card mt-4">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tên sản phẩm</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Giá</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($listsp as $key => $sp) {
                            ?>
                            <tr>
                                <td>
                                    <?= $sp['tieude'] ?>
                                </td>
                                <td>
                                    <?= $sp['soluong'] ?>
                                </td>
                                <td>
                                    <?= $sp['gia_sanpham'] ?>
                                </td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Section 2: Thông tin khách hàng (Customer information) -->
        <div class="col-md-6">
            <div class="mt-4">
                <h3>Thông tin khách hàng</h3>
                <p>Họ và tên: quanglocnd123</p>
                <p>Email: loc@gmail.com</p>
                <p>Số điện thoại: 123-456-7890</p>
            </div>
        </div>
    </div>
    <a href="index.php?act=listdonhang" class="btn btn-warning" data-abc="true"> <i class="fa fa-chevron-left"></i> Back
        to orders</a>
</div>

<style>
    .card {
        background-color: #fff;
        border: 1px solid rgba(0, 0, 0, 0.1);
        border-radius: 0.1rem;
    }

    .card-header:first-child {
        border-radius: calc(0.37rem - 1px) calc(0.37rem - 1px) 0 0;
    }

    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: #fff;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    }

    .track {
        background-color: #ddd;
        height: 7px;
        display: flex;
        margin-bottom: 60px;
        margin-top: 50px;
    }

    .track .step {
        flex-grow: 1;
        width: 25%;
        margin-top: -18px;
        text-align: center;
        position: relative;
    }

    .track .step.active:before {
        background: #ff5722;
    }

    .track .step::before {
        height: 7px;
        position: absolute;
        content: "";
        width: 100%;
        left: 0;
        top: 18px;
    }

    .track .step.active .icon {
        background: #ee5435;
        color: #fff;
    }

    .track .icon {
        width: 40px;
        height: 40px;
        line-height: 40px;
        position: relative;
        border-radius: 100%;
        background: #ddd;
        display: inline-block;
    }

    .track .step.active .text {
        font-weight: 400;
        color: #000;
    }

    .track .text {
        display: block;
        margin-top: 7px;
    }

    .btn-warning {
        color: #ffffff;
        background-color: #ee5435;
        border-color: #ee5435;
        border-radius: 1px;
    }

    .btn-warning:hover {
        color: #ffffff;
        background-color: #ff2b00;
        border-color: #ff2b00;
        border-radius: 1px;
    }
</style>