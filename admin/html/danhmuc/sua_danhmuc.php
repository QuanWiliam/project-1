<?php
 if(is_array($list_one)){
    extract($list_one);
 }

?>

<div class="container-fluid">
    <div class="form_add">
        <h1>Cập nhật loại sản phẩm</h1>
        <form action="index.php?act=updatedm" method="post">
           <div class="nhap_danhmuc">
            <label for="">
                Tên Loại Sản phẩm
            </label><br>
            <input type="hidden" name="iddm" value="<?= $id_danhmuc ?>">
            <input type="text" class="form-control" name="tenloai" value="<?= $name_danhmuc ?>">
            <div class="mt-3">
                <input type="submit" name="capnhat" value="Sửa danh mục" class="btn btn-success">
                <a href="index.php?act=listdm">
                    <input type="button"  value="Danh sách" class="btn btn-warning">
                </a>
            </div>
           </div>
        </form>
    </div> 
</div>