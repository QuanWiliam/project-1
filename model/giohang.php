<?php
function addcart($id_tk)
{
    $sql = "INSERT INTO GIOHANG(ID_TK) VALUES($id_tk)";
    pdo_execute($sql);
}
function addtocart($id_giohang, $id_sp, $total, $amount = 1)
{
    $sql = "INSERT INTO CT_GIOHANG (ID_GIOHANG,ID_SP,AMOUNT,TOTAL) VALUES($id_giohang, $id_sp, $amount, $total)";
    pdo_execute($sql);
}
function load_cart_tk($id_tk)
{
    $sql = "SELECT * FROM GIOHANG 
    JOIN CT_GIOHANG ON GIOHANG.ID_GIOHANG = CT_GIOHANG.ID_GIOHANG
    JOIN SANPHAM ON CT_GIOHANG.ID_SP = SANPHAM.ID_SP
    JOIN TAIKHOAN ON GIOHANG.ID_TK = TAIKHOAN.ID_TK
    WHERE GIOHANG.ID_TK = $id_tk";
    $carts = pdo_query($sql);
    return $carts;
}

function delete_giohang($id)
{
    $sql = "DELETE FROM CT_GIOHANG WHERE id_sp=" . $id;
    pdo_execute($sql);
}

function load_hoadon($id)
{
    $sql = "SELECT * FROM CT_GIOHANG 
    JOIN SANPHAM ON CT_GIOHANG.ID_SP = SANPHAM.ID_SP WHERE ID_GIOHANG = $id";
    $hoadon = pdo_query($sql);
    return $hoadon;
}

function ton_tai($id)
{
    $sql = "SELECT * FROM CT_GIOHANG WHERE ID_SP = $id";
    return pdo_query_one($sql);
}
?>