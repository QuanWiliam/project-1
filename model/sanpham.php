<?php
function insert_sanpham($name, $img, $price, $mota, $id_danhmuc)
{
  $sql = "insert into sanpham(name_sp,img_sp,price_sp,mota,id_danhmuc) value('$name','$img','$price','$mota','$id_danhmuc')";
  pdo_execute($sql);
}
function delete_sanpham($id)
{
  $sql = "delete from sanpham where id_sp=" . $id;
  pdo_execute($sql);
}
function load_sp($kyw, $id_danhmuc)
{
  $sql = "select * from sanpham where 1 ";
  if ($kyw != "") {
    $sql .= " and name_sp like '%" . $kyw . "%'";
  }
  if ($id_danhmuc > 0) {
    $sql .= " and id_danhmuc = '" . $id_danhmuc . "'";
  }
  $sql .= " order by id_sp desc";
  $listsp = pdo_query($sql);
  return $listsp;
}
// đây là load sap ở shop
function load_sp_home_shop()
{
  $sql = "select * from sanpham where 1 order by id_sp desc ";
  $listsp = pdo_query($sql);
  return $listsp;
}
function load_sp_home()
{
  $sql = "select * from sanpham where 1 order by id_sp desc limit 0,7";
  $listsp = pdo_query($sql);
  return $listsp;
}
// đây là load sản phẩm mới 
function load_sp_home_new_arr()
{
  $sql = "select * from sanpham where 1 order by id_sp desc limit 0,3";
  $listsp = pdo_query($sql);
  return $listsp;
}
// đây là load sản phẩm hot sales
function load_sp_home_hot()
{
  $sql = "select * from sanpham where 1 order by id_sp desc limit 4,7";
  $listsp = pdo_query($sql);
  return $listsp;
}
function load_one_sanpham($id)
{
  $sql = "select * from sanpham where id_sp=" . $id;
  $list_one = pdo_query_one($sql);
  return $list_one;
}
function load_sanpham_cungloai($id, $id_danhmuc)
{
  $sql = "select * from sanpham where id_danhmuc=" . $id_danhmuc . " and id_sp <>" . $id;
  $listcungloai = pdo_query($sql);
  return $listcungloai;
}
function update_sanpham($id, $name, $img, $price, $mota, $id_danhmuc)
{

  if ($img != "") {
    $sql = "UPDATE sanpham SET id_danhmuc = '$id_danhmuc', name_sp = '$name', img_sp = '$img', price_sp = '$price', mota = '$mota' WHERE id_sp=" . $id;
    pdo_execute($sql);
  } else {
    $sql = "UPDATE sanpham SET id_danhmuc = '$id_danhmuc', name_sp = '$name', price_sp = '$price', mota = '$mota' WHERE id_sp=" . $id;
    pdo_execute($sql);
  }
}

// hàm này để lấy tên danh mục 
function load_ten_dm($id_danhmuc)
{
  $sql = "select * from danhmuc where id_danhmuc=" . $id_danhmuc;
  $dm = pdo_query_one($sql);
  extract($dm);
  return $name_danhmuc;
}
// xac dinh so btton can in ra
function count_pro()
{
  $sql = "SELECT * FROM SANPHAM";
  $pro = pdo_query($sql);
  $i = 0;
  foreach ($pro as $row) {
    $i++;
  }
  $number = ceil($i / 9);
  return $number;
}
// LOAD SAN PHAM TU = LIMIT TU VI TRI START
function load_limit_9_pro($start, $limit)
{
  $sql = "SELECT * FROM SANPHAM ORDER BY ID_SP DESC LIMIT $start, $limit";
  $pro = pdo_query($sql);
  return $pro;
}
?>