<?php
  function insert_sanpham($name,$img,$price,$mota,$id_danhmuc){
    $sql = "insert into sanpham(name_sp,img_sp,price_sp,mota,id_danhmuc) value('$name','$img','$price','$mota','$id_danhmuc')";
    pdo_execute($sql);
  }
  function delete_sanpham($id){
    $sql = "delete from sanpham where id_sp=".$id;
    pdo_query($sql);
  }
  function load_sp($kyw = "", $id_danhmuc = 0){
     $sql = "select * from sanpham where 1 ";
     if($kyw!= ""){
        $sql .= " and name_sp like '%".$kyw."%'";
     }
     if($id_danhmuc > 0){
        $sql .= " and id_danhmuc = '".$id_danhmuc."'";
     }
     $sql .= " order by id_sp desc";
     $listsp = pdo_query($sql);
     return $listsp;
  }
  function load_one_sanpham($id){
    $sql = "select * from sanpham where id_sp=".$id;
    $list_one = pdo_query_one($sql);
    return $list_one;
  }
  function update_sanpham($id,$name,$img,$price,$mota,$id_danhmuc){
    if($img != ""){
      $sql = "update sanpham set id_danhmuc = {$id_danhmuc}, name_sp = {$name}, img_sp = {$img}, price_sp = {$price}, mota = {$mota} where id_sp=".$id;
    }else{
      $sql = "update sanpham set id_danhmuc = {$id_danhmuc}, name_sp = {$name}, price_sp = {$price}, mota = {$mota} where id_sp=".$id;
    }
    pdo_execute($sql);
  }

?>