<div class="container-fluid">
    <div class="form_add">
        <h1>Thêm loại sản phẩm</h1>
        <form action="index.php?act=adddm" method="post">
           <div class="nhap_danhmuc">
            <label for="">
                Tên Loại Sản phẩm
            </label><br>
            <input type="text" class="form-control" name="tenloai" placeholder="Hãy nhập tên loại sản phẩm">
            <div class="mt-3">
                <input type="submit" name="themmoi" value="Thêm mới" class="btn btn-success">
                <a href="index.php?act=listdm">
                    <input type="button"  value="Danh sách" class="btn btn-warning">
                </a>
            </div>
           </div>
        </form>
    </div> 
</div>