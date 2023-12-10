<?php
  if(is_array($listtk)){
    extract($listtk);
  }
?>
<div class="container-fluid">
    <div class="form_add">
        <h1>Cập Nhật Tài Khoản</h1>
        <form action="index.php?act=updatetk" method="post">
            <div class="nhap_tk">
                </select>
                <label for="">
                    Tên người dùng
                </label><br>
                <input type="text" class="form-control" name="name_tk" value="<?= $name_tk ?>"><br>
                <label for="">
                    Mật khẩu
                </label><br>
                <input type="text" class="form-control" name="pass_tk" value="<?= $pass_tk ?>"><br>
                <label for="">
                    Email 
                </label><br>
                <input type="text" class="form-control" name="email_tk" value="<?= $email_tk ?>"><br>
                
                <label for="">
                    Địa chỉ
                </label><br>
                <input type="text" class="form-control" name="addr_tk" value="<?= $address_tk ?>"><br>
                <label for="">
                    Số điện thoại
                </label><br>
                <input type="text" class="form-control" name="tel_tk" value="<?= $tel_tk ?>"><br>
                
                <div class="mt-3">
                    <input type="hidden" name="id_tk" value="<?= $id_tk ?>">
                    <input type="submit" name="capnhat" value="Cập nhật tài khoản" class="btn btn-success">
                    <a href="index.php?act=taikhoan">
                        <input type="button" value="Danh sách tài khoản" class="btn btn-warning">
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
