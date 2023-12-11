<?php
if (is_array($onesp)) {
    // Không sử dụng extract vì lý do bảo mật
} else {
    echo "không có dữ liệu";
}
?>

<div class="container-fluid">
    <div class="form_add">
        <h1>Thêm sản phẩm</h1>
        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
            <div class="nhap_danhmuc">
                <label for="id_danhmuc">
                    Hãy chọn loại cho sản phẩm
                </label><br>
                <select class="form-select" aria-label="Default select example" name="id_danhmuc" id="id_danhmuc">
                    <?php
                    foreach ($listdm as $dm) {
                        // Không sử dụng extract vì lý do bảo mật
                        echo '<option value="' . $dm['id_danhmuc'] . '">' . $dm['name_danhmuc'] . '</option>';
                    }
                    ?>
                </select>
                <label for="name_sp">
                    Tên Sản phẩm
                </label><br>
                <input type="text" class="form-control" name="name_sp" id="name_sp"
                    value="<?= isset($onesp['name_sp']) ? $onesp['name_sp'] : '' ?>"><br>
                <label for="price_sp">
                    Giá sản phẩm
                </label><br>
                <input type="text" class="form-control" name="price_sp" id="price_sp"
                    value="<?= isset($onesp['price_sp']) ? $onesp['price_sp'] : '' ?>"><br>
                <label for="">
                    Số lượng sản phẩm
                </label><br>
                <input type="text" class="form-control" name="soluong" id="soluong"
                    value="<?= isset($onesp['soluong']) ? $onesp['soluong'] : '' ?>"><br>
                <label for="img_sp">
                    Ảnh sản phẩm
                </label><br>
                <img width=200px src="../../upload/<?= $onesp['img_sp'] ?>" alt=""> <br>
                <input type="file" name="img_sp" id="">
                <label for="mota_sp">
                    Mô tả sản phẩm
                </label><br>
                <textarea name="mota_sp" class="form-control"
                    rows="3"><?= isset($onesp['mota']) ? $onesp['mota'] : '' ?></textarea>
                <input type="hidden" name="id_sp" value="<?= isset($onesp['id_sp']) ? $onesp['id_sp'] : '' ?>">
                <div class="mt-3">
                    <input type="submit" name="capnhat" value="Cập nhật sản phẩm" class="btn btn-success">
                    <a href="index.php?act=listsp">
                        <input type="button" value="Danh sách sản phẩm" class="btn btn-warning">
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>