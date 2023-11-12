<?php
//    hàm này để thêm loại sản phẩm
  function insert_danhmuc($tendm){
    $sql = "insert into danhmuc(name_danhmuc) value('$tendm')";
    pdo_execute($sql);
  }
//    hàm này để xóa sản phảm
  function delete_danhmuc($id_danhmuc){
    $sql = "delete from danhmuc where id_danhmuc=".$id_danhmuc;
    pdo_query($sql);
  }
//   hàm này để load tất cả loại sản phẩm
  function load_all_dm(){
    $sql = "select * from danhmuc order by id_danhmuc desc";
    $listdm = pdo_query($sql);
    return $listdm;
  }
//  hàm này để load 1 dang mục
  function load_one_dm($id_danhmuc){
    $sql = "select * from danhmuc where id_danhmuc=".$id_danhmuc;
    $list_one = pdo_query_one($sql);
    return $list_one;
  }
//   hàm này để cập nhật loại hàng
  function update_dm($id_danhmuc , $ten){
    $sql = "update danhmuc set name_danhmuc = '$ten' where id_danhmuc=".$id_danhmuc;
    pdo_execute($sql);
  }


?>