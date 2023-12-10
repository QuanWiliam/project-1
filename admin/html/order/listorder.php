<div class="card">
    <div class="card-body">
        <h1 class="card-title">Danh sách bình luận</h1>
        <div class="table-responsive">
            <table id="zero_config" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID_USER</th>
                        <th>Trạng Thái</th>
                        <th>Tổng Tiền</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>


                    <?php
                    foreach ($lisorder as $order) {
                        extract($order);
                        $xoadh = "index.php?act=xoadh&id_order=" . $id_order;
                        $tthai = [
                            "0" => "Chưa xác nhận",
                            "1" => "Đã xác nhận",
                            "2" => "Chờ vận chuyển",
                            "3" => "Đã vận chuyển",
                            "4" => "Giao hàng thành công"
                        ];
                        ?>
                        <tr>
                            <td>
                                <?= $id_tk ?>
                            </td>
                            <td>
                                <?= $tthai[$status] ?>
                            </td>
                            <td>
                                <?= $total ?>
                            </td>
                            <td>
                                <a href="../html/index.php?act=updatedh&id=<?= $id_order ?>">Thay Đổi Trạng Thái</a>
                            </td>
                            <td>
                                <a href="<?= $xoadh ?>">Xóa Đơn Hàng</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>