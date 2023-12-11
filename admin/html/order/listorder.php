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
                        $huydh = "index.php?act=huydh&id_order=" . $id_order;
                        $tthai = [
                            "0" => "Chưa xác nhận",
                            "1" => "Đã xác nhận",
                            "2" => "Chờ vận chuyển",
                            "3" => "Đã vận chuyển",
                            "4" => "Giao hàng thành công",
                            "5" => "Đơn Đã Hủy"
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
                            <form action="index.php?act=updatett" method="post">
                                <input type="hidden" name="id_order" value="<?= $id_order ?>">
                                <input type="hidden" name="tthai" value="<?= $status + 1 ?>">
                                <input <?= $status == 4 || $status == 5 ? "hidden" : "" ?> type="submit" name="updatett"
                                    value="Thay Đổi Trạng Thái">
                            </form>
                        </td>
                        <td>
                            <a style="display: <?= $status != 5 && $status != 0 ? "none" : "" ?>"
                                href="<?= $huydh ?>"><?= $status == 5 ?"":"Hủy Đơn Hàng" ?></a>
                        </td>
                    </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>
    </div>
</div>