<?php
 function binhluan_all(){
    $sql = "select * from binhluan order by id_bl desc";
    $listbl = pdo_query($sql);
    return $listbl;
 }
 function binhluan_all_id($id_sp){
    $sql = "select * from binhluan where id_sp='".$id_sp."' order by id_bl desc";
    $listbl = pdo_query($sql);
    return $listbl;
 }
 
 function insert_binhluan($noidung, $id_tk, $id_sp, $ngaybinhluan, $name_tk)
{
   $sql = "INSERT INTO binhluan (noidung, id_tk, id_sp, ngaybinhluan, name_tk) VALUES ('$noidung', '$id_tk', '$id_sp', '$ngaybinhluan', '$name_tk')";
  pdo_execute($sql);
}
?>