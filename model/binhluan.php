<?php
 function binhluan_all(){
    $sql = "select * from binhluan order by id_bl desc";
    $listbl = pdo_query($sql);
    return $listbl;
 }
 
 function insert_binhluan($noidung, $id_tk, $id_sp, $ngaybinhluan, $name_tk,$role)
{
  $sql = "insert into sanpham(noidung,id_tk,id_sp,ngaybinhluan,name_tk,role) value('$noidung','$id_tk','$id_sp','$ngaybinhluan','$name_tk,','$role')";
  pdo_execute($sql);
}

?>