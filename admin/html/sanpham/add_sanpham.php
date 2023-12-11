<div class="container-fluid">
    <div class="form_add">
        <h1>Thêm sản phẩm</h1>
        <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <div class="nhap_danhmuc">
                <label for="">
                    Hãy chọn loại cho sản phẩm
                </label><br>
                <select class="form-select" aria-label="Default select example" name="id_danhmuc">
                    <?php
                    foreach ($listdm as $dm) {
                        extract($dm);
                        echo '
                    <option value="' . $id_danhmuc . '">' . $name_danhmuc . '</option>';
                    }

                    ?>
                </select>
                <label for="">
                    Tên Sản phẩm
                </label><br>
                <input type="text" class="form-control" name="name_sp" placeholder="Hãy nhập tên loại sản phẩm"><br>
                <label for="">
                    Giá sản phẩm
                </label><br>
                <input type="text" class="form-control" name="price_sp" placeholder="Hãy nhập giá sản phẩm"><br>
                <label for="">
                    Số lượng sản phẩm
                </label><br>
                <input type="text" class="form-control" name="soluong" placeholder="Hãy nhập số lượng sản phẩm"><br>
                <label for="">
                    Ảnh sản phẩm
                </label><br>
                <input type="file" class="form-control" name="img_sp" placeholder="Hãy nhập tên loại sản phẩm"><br>
                <label for="">
                    Mô tả sản phẩm
                </label><br>
                <textarea name="mota_sp" class="form-control" rows="3"></textarea>
                <div class="mt-3">
                    <input type="submit" name="themmoisp" value="Thêm mới" class="btn btn-success">
                    <a href="index.php?act=listsp">
                        <input type="button" value="Danh sách sản phẩm" class="btn btn-warning">
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>