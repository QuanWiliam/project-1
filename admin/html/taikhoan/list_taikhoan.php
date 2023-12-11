<div class="container-fluid">
  <div>
    <h1>Danh sách loại sản phẩm</h1>
    <a href="index.php?act=addtk" class="btn btn-info">Thêm mới</a>
    <table class="table table-hover">
      <tr>
        <td>#</td>
        <td>Tên tài khoản</td>
        <td>Mật khẩu</td>
        <td>Email</td>
        <td>Địa chỉ</td>
        <td>Số Điện thoại</td>
        <td>Role</td>
        <td>Action</td>
      </tr>
      <?php
      // lấy $listdm từ case listdm trong file index.php rồi
      // đặt các danh mục thành biến $dm sau đó extract ra để lấy id và tên của danh mục
      foreach ($listtk as $tk) {
        extract($tk);
        $suatk = "index.php?act=suatk&id_tk=" . $id_tk;
        // $xoatk = "index.php?act=xoatk&id_tk=".$id_tk;
        echo '
            <tr>
            <td>' . $id_tk . '</td>
            <td>' . $name_tk . '</td>
            <td>' . $pass_tk . '</td>
            <td>' . $email_tk . '</td>
            <td>' . $address_tk . '</td>
            <td>' . $tel_tk . '</td>
            <td>' . $role . '</td>
            <td>
            <a href="' . $suatk . '">
              <input type="button" value="Sửa" class="btn btn-success">
            </a>
            </td>
        </tr>
            ';
      }
      ?>
    </table>
  </div>

</div>