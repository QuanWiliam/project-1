<div class="container-fluid">
   <div>
    <h1>Danh sách sản phẩm</h1>
    <form action="index.php?act=listsp" method="post" class="d-flex justify-content-between">
       <div>
       <a href="index.php?act=addsp" class="btn btn-info p-2 ">Thêm mới</a>
       </div>
        
       <div class="d-flex">
       <select class="mx-2" aria-label="Default select example" name="id_danhmuc" >
            <option value="0">Tất cả</option>
                <?php
                 foreach ($listdm as $dm) {
                    extract($dm);
                    echo '
                    <option value="'.$id_danhmuc.'">'.$name_danhmuc.'</option>';
                 }
                
                ?>
            </select>
            <input type="text" name="kyw">
            <input type="submit" class="btn btn-dark mx-2" name="timkiem" value="Tìm kiếm">
       </div>
    </form>
    <table class="table table-hover mt-3">
        <tr>
            <td>Mã sản phẩm</td> 
            <td>Tên sản phẩm</td>
            <td>Ảnh sản phẩm</td>
            <td>Giá sản phẩm</td>
            <td>Mô tả</td>
            <td>Action</td>
        </tr>
        <?php
        // lấy $listdm từ case listdm trong file index.php rồi
        // đặt các danh mục thành biến $dm sau đó extract ra để lấy id và tên của danh mục
         foreach($listsp as $sp){
            extract($sp);
            $suasp = "index.php?act=suasp&id_sp=".$id_sp;
            $xoasp = "index.php?act=xoasp&id_sp=".$id_sp;
            // đường dẫn ảnh trong thư mục upload
            $anh = "../../upload/".$img_sp;
            if(is_file($anh)){
                $hinh = "<img src='{$anh}' height='80'>";
            }else{
                $hinh = "Ảnh không tồi tại";
            }
            echo '
            <tr>
            <td>'.$id_sp.'</td>
            <td>'.$name_sp.'</td>
            <td>'.$hinh.'</td>
            <td>'.$price_sp.' VND</td>
            <td>'.$mota.'</td>
            <td>
            <a href="'.$suasp.'">
              <input type="button" value="Sửa" class="btn btn-success">
            </a>
            <a href="'.$xoasp.'">
              <input type="button" value="Xóa" class="btn btn-danger">
            </a>
            </td>
        </tr>
            ';
         }
        ?>
    </table>
   </div>
   
</div>