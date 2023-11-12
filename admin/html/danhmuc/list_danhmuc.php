<div class="container-fluid">
   <div>
    <h1>Danh sách loại sản phẩm</h1>
    <table class="table table-hover">
        <tr>
            <td>#</td>
            <td>Tên loại</td>
            <td>Action</td>
        </tr>
        <?php
        // lấy $listdm từ case listdm trong file index.php rồi
        // đặt các danh mục thành biến $dm sau đó extract ra để lấy id và tên của danh mục
         foreach($listdm as $dm){
            extract($dm);
            $suadm = "index.php?act=suadm&id_danhmuc=".$id_danhmuc;
            $xoadm = "index.php?act=xoadm&id_danhmuc=".$id_danhmuc;
            echo '
            <tr>
            <td>'.$id_danhmuc.'</td>
            <td>'.$name_danhmuc.'</td>
            <td>
            <a href="'.$suadm.'">
              <input type="button" value="Sửa" class="btn btn-success">
            </a>
            <a href="'.$xoadm.'">
              <input type="button" value="Xóa" class="btn btn-danger">
            </a>
            </td>
        </tr>
            ';
         }
        ?>
    </table>
   </div>
   <a href="index.php?act=adddm" class="btn btn-info">Thêm mới</a>
</div>