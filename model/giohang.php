<?php
function insert_giohang($id_tk)
{
    $sql = "INSERT INTO GIOHANG(ID_TK) VALUES($id_tk)";
    pdo_execute($sql);
}
function addtocart($id_giohang, $id_sp, $total, $amount)
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

function ton_tai($id, $id_gh)
{
    $sql = "SELECT * FROM CT_GIOHANG WHERE ID_SP = $id AND ID_GIOHANG = $id_gh";
    return pdo_query_one($sql);
}

function updateSL($id, $amount)
{
    $sql = "UPDATE CT_GIOHANG SET AMOUNT = $amount WHERE ID_CTGIOHANG = $id ";
    pdo_execute($sql);
}

function loadAllGioHang($id)
{
    $sql = "SELECT id_sp, amount FROM CT_GIOHANG WHERE id_giohang = $id";
    return pdo_query($sql);
}

function deleteAll($id)
{
    $sql = "DELETE FROM CT_GIOHANG WHERE id_giohang = $id";
    pdo_execute($sql);
}

function tru_soluong($id_sp, $amount)
{
    $sql = "UPDATE SANPHAM SET SOLUONG = SOLUONG - $amount WHERE ID_SP = $id_sp";
    pdo_execute($sql);
}

?>