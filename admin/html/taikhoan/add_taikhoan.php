
<div class="container-fluid">
    <div class="form_add">
        <h1>Thêm Tài Khoản</h1>
        <form action="index.php?act=addtk" method="post" enctype="multipart/form-data">
            <div class="nhap_tk">
                </select>
                <label for="">
                    Tên người dùng
                </label><br>
                <input type="text" class="form-control" name="name_tk" placeholder="Hãy nhập tên người dùng"><br>
                <label for="">
                    Mật khẩu người dùng
                </label><br>
                <input type="text" class="form-control" name="pass_tk" placeholder="Hãy nhập mật khẩu"><br>
                <label for="">
                    Email người dùng
                </label><br>
                <input type="text" class="form-control" name="email_tk" placeholder="Hãy nhập email"><br>
                
                <label for="">
                    Địa chỉ
                </label><br>
                <input type="text" class="form-control" name="addr_tk" placeholder="Hãy nhập địa chỉ"><br>
                <label for="">
                    Số điện thoại
                </label><br>
                <input type="text" class="form-control" name="tel_tk" placeholder="Hãy nhập số tài khoản"><br>
                
                <div class="mt-3">
                    <input type="submit" name="themmoitk" value="Thêm mới" class="btn btn-success">
                    <a href="index.php?act=taikhoan">
                        <input type="button" value="Danh sách tài khoản" class="btn btn-warning">
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>