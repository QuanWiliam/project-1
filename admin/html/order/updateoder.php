<?php
if (is_array($listdh)) {
    extract($listdh);
}

?>

<div class="container-fluid">
    <div class="form_add">
        <h1>Cập nhật Trạng Thái</h1>
        <form action="index.php?act=updatethanhcong" method="post">
            <div class="nhap_danhmuc">
                <label for="">
                    Trạng thái Đơn Hàng
                </label><br>
                <input type="hidden" name="id_order" value="<?= $id_order ?>">
                <input type="text" class="form-control" name="tthai" value="<?= $status ?>">
                <div class="mt-3">
                    <input type="submit" name="capnhat" value="Cập nhật trạng thái" class="btn btn-success">
                    <a href="index.php?act=list">
                        <input type="button" value="Danh sách" class="btn btn-warning">
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>